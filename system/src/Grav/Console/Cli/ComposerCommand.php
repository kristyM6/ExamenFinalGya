<?php

/**
 * @package    Grav\Console\Cli
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Console\Cli;

use Grav\Console\ConsoleCommand;
use Symfony\Component\Console\Input\InputOption;

class ComposerCommand extends ConsoleCommand
{
    protected function configure()
    {
        $this
            ->setName("composer")
            ->addOption(
                'install',
                'i',
                InputOption::VALUE_NONE,
                'install the dependencies'
            )
            ->addOption(
                'update',
                'u',
                InputOption::VALUE_NONE,
                'update the dependencies'
            )
            ->setDescription("Updates the composer vendor dependencies needed by Grav.")
            ->setHelp('The <info>composer</info> command updates the composer vendor dependencies needed by Grav');
    }

    protected function serve()
    {
        $action = $this->input->getOption('install') ? 'install' : ($this->input->getOption('update') ? 'update' : 'install');

        if ($this->input->getOption('install')) {
            $action = 'install';
        }

        // Updates composer first
        $this->output->writeln("\nInstalling vendor dependencies");
        $this->output->writeln($this->composerUpdate(GRAV_ROOT, $action));
    }
}
