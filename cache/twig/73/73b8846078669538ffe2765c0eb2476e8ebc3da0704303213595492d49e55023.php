<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/plugins-details.html.twig */
class __TwigTemplate_e4feb90b0c28e2c9a673bfe64bf6f1b10b254702d0a4bf1dc83490f6d9bb455e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/plugins-details.html.twig"));

        // line 1
        $context["gpm"] = $this->getAttribute(($context["admin"] ?? null), "gpm", [], "method");
        // line 2
        $context["installed"] = $this->getAttribute(($context["gpm"] ?? null), "isPluginInstalled", [0 => $this->getAttribute(($context["admin"] ?? null), "route", [])], "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute(($context["gpm"] ?? null), "isTestingRelease", [0 => $this->getAttribute(($context["plugin"] ?? null), "slug", [])], "method");
        // line 4
        $context["gumroad_loaded"] = false;
        // line 5
        echo "
<div class=\"grav-update plugin\" data-gpm-plugin=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", []), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "name", []));
        echo "
    ";
        // line 11
        if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => ($context["plugin"] ?? null)], "method")) {
            // line 12
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 14
        echo "    ";
        if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", [0 => ($context["plugin"] ?? null)], "method")) {
            // line 15
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["plugin"] ?? null), "symlink", [])) {
            // line 18
            echo "    <small class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 22
        echo "    <small>";
        (($this->getAttribute(($context["plugin"] ?? null), "version", [])) ? (print (twig_escape_filter($this->env, ("v" . twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "version", []))), "html", null, true))) : (print ("")));
        echo "</small>
    ";
        // line 23
        if (($context["isTestingRelease"] ?? null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 24
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "icon", []), "html", null, true);
        echo "\"></i>
    ";
        // line 27
        $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-details.html.twig", 27)->display(twig_array_merge($context, ["plugin" => ($context["plugin"] ?? null)]));
        // line 28
        echo "</div>

";
        // line 30
        if (($context["installed"] ?? null)) {
            // line 31
            echo "    ";
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("plugins/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
            // line 32
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/plugins-details.html.twig", 32)->display(twig_array_merge($context, ["data" => ($context["data"] ?? null), "blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", [])]));
            // line 33
            echo "
    ";
            // line 34
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "form", []), "fields", []), "enabled", []), "type", []) != "hidden") && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "form", []), "fields", []), "tabs", []), "fields", []), "login", []), "fields", []), "enabled", []), "type", []) != "hidden"))) {
                // line 35
                echo "        <div class=\"button-bar danger\">
            <span class=\"danger-zone\"></span>
            ";
                // line 37
                if ( !$this->getAttribute(($context["plugin"] ?? null), "symlink", [])) {
                    // line 38
                    echo "                <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REINSTALL_PLUGIN"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 40
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_PLUGIN"), "html", null, true);
                echo "</a>
        </div>
    ";
            }
            // line 43
            echo "
";
        } else {
            // line 45
            echo "    <div class=\"button-bar success\">
        ";
            // line 46
            if (($this->getAttribute(($context["plugin"] ?? null), "premium", []) &&  !$this->getAttribute(($context["admin"] ?? null), "license", [0 => $this->getAttribute(($context["plugin"] ?? null), "slug", [])], "method"))) {
                // line 47
                echo "            ";
                if ( !($context["gumroad_loaded"] ?? null)) {
                    // line 48
                    echo "                ";
                    $context["gumroad_loaded"] = true;
                    // line 49
                    echo "                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            ";
                }
                // line 51
                echo "            <a class=\"gumroad-button button\" href=\"https://gum.co/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["plugin"] ?? null), "premium", []), "permalink", []), "html", null, true);
                echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("Buy Now"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 53
                echo "            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "slug", []), "html", null, true);
                echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_PLUGIN"), "html", null, true);
                echo "</a>
        ";
            }
            // line 55
            echo "    </div>
";
        }
        // line 57
        echo "
";
        // line 58
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/plugins-details.html.twig", 58)->display($context);
        // line 59
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-details.html.twig", 59)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 60
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-details.html.twig", 60)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 61
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/plugins-details.html.twig", 61)->display(twig_array_merge($context, ["type" => "plugin", "package" => ($context["plugin"] ?? null)]));
        // line 62
        $this->loadTemplate("partials/modal-reinstall-package.html.twig", "partials/plugins-details.html.twig", 62)->display(twig_array_merge($context, ["type" => "plugin", "package" => ($context["plugin"] ?? null)]));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/plugins-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 62,  186 => 61,  184 => 60,  182 => 59,  180 => 58,  177 => 57,  173 => 55,  165 => 53,  157 => 51,  153 => 49,  150 => 48,  147 => 47,  145 => 46,  142 => 45,  138 => 43,  131 => 40,  125 => 38,  123 => 37,  119 => 35,  117 => 34,  114 => 33,  111 => 32,  108 => 31,  106 => 30,  102 => 28,  100 => 27,  96 => 26,  92 => 24,  88 => 23,  83 => 22,  75 => 18,  72 => 17,  66 => 15,  63 => 14,  57 => 12,  55 => 11,  51 => 10,  44 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set gpm = admin.gpm() %}
{% set installed = gpm.isPluginInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(plugin.slug) %}
{% set gumroad_loaded = false %}

<div class=\"grav-update plugin\" data-gpm-plugin=\"{{ admin.route }}\">
</div>

<h1>
    {{ plugin.name|e }}
    {% if admin.isTeamGrav(plugin) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN\"|tu }}\"></i></span></small>
    {% endif %}
    {% if admin.isPremiumProduct(plugin) %}
        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|tu }}</span></small>
    {% endif %}
    {% if plugin.symlink %}
    <small class=\"hint--bottom\" data-hint=\"{{ \"PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED\"|tu }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ plugin.version ? 'v' ~ plugin.version|e }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{ plugin.icon }}\"></i>
    {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}
</div>

{% if (installed) %}
    {% set data = admin.data('plugins/' ~ admin.route) %}
    {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}

    {% if (plugin.form.fields.enabled.type != 'hidden' and plugin.form.fields.tabs.fields.login.fields.enabled.type != 'hidden') %}
        <div class=\"button-bar danger\">
            <span class=\"danger-zone\"></span>
            {% if not plugin.symlink %}
                <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> {{ \"PLUGIN_ADMIN.REINSTALL_PLUGIN\"|tu }}</a>
            {% endif %}
            <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_PLUGIN\"|tu }}</a>
        </div>
    {% endif %}

{% else %}
    <div class=\"button-bar success\">
        {% if (plugin.premium and not admin.license(plugin.slug)) %}
            {% if not gumroad_loaded %}
                {% set gumroad_loaded = true %}
                <script src=\"//gumroad.com/js/gumroad.js\"></script>
            {% endif %}
            <a class=\"gumroad-button button\" href=\"https://gum.co/{{ plugin.premium.permalink }}\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> {{ \"Buy Now\"|tu }}</a>
        {% else %}
            <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ plugin.slug }}\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_PLUGIN\"|tu }}</a>
        {% endif %}
    </div>
{% endif %}

{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-add-package.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'plugin' } %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'plugin', package: plugin } %}
{% include 'partials/modal-reinstall-package.html.twig' with { type: 'plugin', package: plugin } %}
", "partials/plugins-details.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/partials/plugins-details.html.twig");
    }
}
