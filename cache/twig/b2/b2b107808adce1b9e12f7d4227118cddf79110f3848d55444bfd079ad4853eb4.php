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

/* partials/navigation.html.twig */
class __TwigTemplate_0be8a8b00a89cafc4a07ca24e1503780881123abac4c294ab4d9c7a1c0d834fd extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation.html.twig"));

        // line 1
        echo "<nav id=\"nav-wrap\">
    <a class=\"mobile-btn\" href=\"#nav-wrap\" title=\"Show navigation\">Show navigation</a>
    <a class=\"mobile-btn\" href=\"#close\" title=\"Hide navigation\">Hide navigation</a>

    ";
        // line 5
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 6
        echo "    ";
        // line 7
        echo "
    <ul id=\"nav\" class=\"nav\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 10
            echo "            ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 11
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("current") : (""));
                // line 12
                echo "                ";
                if (twig_in_filter("home", $this->getAttribute($context["page"], "menu", []))) {
                    // line 13
                    echo "                <li class=\"current\">
                    <a class=\"smoothscroll\" href=\"#home\">
                        ";
                    // line 15
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "
                    </a>
                </li>
                ";
                } else {
                    // line 19
                    echo "                <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                    <a href=\"";
                    // line 20
                    echo $this->getAttribute($context["page"], "url", []);
                    echo "\">
                        ";
                    // line 21
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "
                    </a>
                </li>
                ";
                }
                // line 25
                echo "            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 28
            echo "            <li>
                <a href=\"";
            // line 29
            echo $this->getAttribute($context["mitem"], "link", []);
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 33
            echo "            ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", []), "hidemenu", [])) {
                // line 34
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", []) || $this->getAttribute($context["module"], "activeChild", []))) ? ("current") : (""));
                // line 35
                echo "                <li class=\"";
                echo ($context["current_module"] ?? null);
                echo "\">
                    <a class=\"smoothscroll\" href=\"#";
                // line 36
                echo $this->getAttribute($this, "pageLinkName", [0 => $this->getAttribute($context["module"], "menu", [])], "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", []);
                echo "</a>
                </li>
            ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </ul>
</nav>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 6
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "pageLinkName"));

            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]);
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 6,  145 => 40,  139 => 39,  131 => 36,  126 => 35,  123 => 34,  120 => 33,  115 => 32,  104 => 29,  101 => 28,  96 => 27,  90 => 26,  87 => 25,  80 => 21,  76 => 20,  71 => 19,  64 => 15,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  47 => 9,  43 => 7,  41 => 6,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"nav-wrap\">
    <a class=\"mobile-btn\" href=\"#nav-wrap\" title=\"Show navigation\">Show navigation</a>
    <a class=\"mobile-btn\" href=\"#close\" title=\"Hide navigation\">Hide navigation</a>

    {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
    {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

    <ul id=\"nav\" class=\"nav\">
        {% for page in pages.children %}
            {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
                {% if 'home' in page.menu %}
                <li class=\"current\">
                    <a class=\"smoothscroll\" href=\"#home\">
                        {{ page.menu }}
                    </a>
                </li>
                {% else %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {{ page.menu }}
                    </a>
                </li>
                {% endif %}
            {% endif %}
        {% endfor %}
        {% for mitem in site.menu %}
            <li>
                <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
            </li>
        {% endfor %}
        {% for module in page.collection() %}
            {% if not module.header.hidemenu %}
                {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}
                <li class=\"{{ current_module }}\">
                    <a class=\"smoothscroll\" href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
</nav>
", "partials/navigation.html.twig", "/var/www/grav/user/themes/ceevee/templates/partials/navigation.html.twig");
    }
}
