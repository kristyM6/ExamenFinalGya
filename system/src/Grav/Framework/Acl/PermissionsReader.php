<?php

/**
 * @package    Grav\Framework\Acl
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Acl;

use Grav\Common\File\CompiledYamlFile;

class PermissionsReader
{
    private static $types;

    /**
     * @param string $filename
     * @return Action[]
     */
    public static function fromYaml(string $filename): array
    {
        /** @var array $content */
        $content = CompiledYamlFile::instance($filename)->content();
        $actions = $content['actions'] ?? [];
        $types = $content['types'] ?? [];

        return static::fromArray($actions, $types);
    }

    /**
     * @param array $actions
     * @param array $types
     * @return Action[]
     */
    public static function fromArray(array $actions, array $types): array
    {
        static::initTypes($types);

        $list = [];
        foreach (static::read($actions) as $type => $data) {
            $list[$type] = new Action($type, $data);
        }

        return $list;
    }

    /**
     * @param array $actions
     * @param string $prefix
     * @return array
     */
    public static function read(array $actions, string $prefix = ''): array
    {
        $list = [];
        foreach ($actions as $name => $action) {
            $prefixNname = $prefix . $name;
            $list[$prefixNname] = null;

            // Support nested sets of actions.
            if (isset($action['actions']) && is_array($action['actions'])) {
                $list += static::read($action['actions'], "{$prefixNname}.");
            }

            unset($action['actions']);

            // Add defaults if they exist.
            $action = static::addDefaults($action);

            // Build flat list of actions.
            $list[$prefixNname] = $action;
        }

        return $list;
    }

    /**
     * @param array $types
     */
    protected static function initTypes(array $types)
    {
        static::$types = [];

        $dependencies = [];
        foreach ($types as $type => $defaults) {
            $current = array_fill_keys((array)($defaults['use'] ?? null), null);
            $defType = $defaults['type'] ?? $type;
            if ($type !== $defType) {
                $current[$defaults['type']] = null;
            }

            $dependencies[$type] = (object)$current;
        }

        // Build dependency tree.
        foreach ($dependencies as $type => $dep) {
            foreach ($dep as $k => &$val) {
                if (null === $val) {
                    $val = $dependencies[$k] ?? new \stdClass();
                }
            }
            unset($val);
        }
        $dependencies = json_decode(json_encode($dependencies), true);

        foreach (static::getDependencies($dependencies) as $type) {
            $defaults = $types[$type] ?? null;
            if ($defaults) {
                static::$types[$type] = static::addDefaults($defaults);
            }
        }
    }

    /**
     * @param array $dependencies
     * @return array
     */
    protected static function getDependencies(array $dependencies): array
    {
        $list = [];
        foreach ($dependencies as $name => $deps) {
            $current = $deps ? static::getDependencies($deps) : [];
            $current[] = $name;

            $list[] = $current;
        }

        return array_unique(array_merge(...$list));
    }

    /**
     * @param array $action
     * @return array
     */
    protected static function addDefaults(array $action): array
    {
        $scopes = [];

        // Add used properties.
        $use = (array)($action['use'] ?? null);
        foreach ($use as $type) {
            if (isset(static::$types[$type])) {
                $used = static::$types[$type];
                unset($used['type']);
                $scopes[] = $used;
            }
        }
        unset($action['use']);

        // Add type defaults.
        $type = $action['type'] ?? 'default';
        $defaults = static::$types[$type] ?? null;
        if (is_array($defaults)) {
            $scopes[] = $defaults;
        }

        if ($scopes) {
            $scopes[] = $action;

            $action = array_replace_recursive(...$scopes);
            if (null === $action) {
                throw new \RuntimeException('Internal error');
            }

            $newType =  $defaults['type'] ?? null;
            if ($newType && $newType !== $type) {
                $action['type'] = $newType;
            }
        }

        return $action;
    }
}
