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

/* partials/footer.html.twig */
class __TwigTemplate_54e58318f861aa8689c273da97c60cd3ebc0bc844caa85771cc7757d528d6e0c extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <ul class=\"social-links\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", []);
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\"></i></a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </ul>
            <ul class=\"copyright\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "copyright", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <li>";
            echo $this->getAttribute($context["item"], "line", []);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
        <div id=\"go-top\"><a class=\"smoothscroll\" title=\"Back to Top\" href=\"#home\"><i class=\"icon-up-open\"></i></a></div>
    </div>
</footer>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  62 => 11,  58 => 10,  54 => 8,  43 => 6,  39 => 5,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"row\">
        <div class=\"twelve columns\">
            <ul class=\"social-links\">
                {% for item in site.social %}
                <li><a href=\"{{ item.url }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
                {% endfor %}
            </ul>
            <ul class=\"copyright\">
                {% for item in site.copyright %}
                <li>{{ item.line }}</li>
                {% endfor %}
            </ul>
        </div>
        <div id=\"go-top\"><a class=\"smoothscroll\" title=\"Back to Top\" href=\"#home\"><i class=\"icon-up-open\"></i></a></div>
    </div>
</footer>
", "partials/footer.html.twig", "/var/www/grav/user/themes/ceevee/templates/partials/footer.html.twig");
    }
}
