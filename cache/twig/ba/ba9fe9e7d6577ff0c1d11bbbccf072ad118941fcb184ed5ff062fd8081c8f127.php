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

/* partials/header.html.twig */
class __TwigTemplate_34e5d362af06dd2c956abbcc9bbc6ec0ce2193e092c90328870a53514a0a4b43 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<header id=\"home\">
  ";
        // line 2
        $this->displayBlock('navigation', $context, $blocks);
        // line 5
        echo "  <div class=\"row banner\">
    <div class=\"banner-text\">
      <h1 class=\"responsive-headline\">";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "title", []);
        echo "</h1>
      <h3>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "description", []);
        echo "</h3>
      <hr />
      ";
        // line 10
        if ($this->getAttribute(($context["site"] ?? null), "social", [])) {
            // line 11
            echo "      <ul class=\"social\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["item"], "url", []);
                echo "\"><i class=\"fa fa-";
                echo $this->getAttribute($context["item"], "icon", []);
                echo "\"></i></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
      ";
        }
        // line 17
        echo "    </div>
  </div>
  <p class=\"scrolldown\">
    <a class=\"smoothscroll\" href=\"#about\"><i class=\"icon-down-circle\"></i></a>
  </p>
</header>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 2
    public function block_navigation($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 3
        echo "  ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 3)->display($context);
        // line 4
        echo "  ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 4,  95 => 3,  89 => 2,  76 => 17,  72 => 15,  61 => 13,  57 => 12,  54 => 11,  52 => 10,  47 => 8,  43 => 7,  39 => 5,  37 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"home\">
  {% block navigation %}
  {% include 'partials/navigation.html.twig' %}
  {% endblock %}
  <div class=\"row banner\">
    <div class=\"banner-text\">
      <h1 class=\"responsive-headline\">{{ site.header.title }}</h1>
      <h3>{{ site.header.description }}</h3>
      <hr />
      {% if site.social %}
      <ul class=\"social\">
        {% for item in site.social %}
        <li><a href=\"{{ item.url }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
        {% endfor %}
      </ul>
      {% endif %}
    </div>
  </div>
  <p class=\"scrolldown\">
    <a class=\"smoothscroll\" href=\"#about\"><i class=\"icon-down-circle\"></i></a>
  </p>
</header>
", "partials/header.html.twig", "/var/www/grav/user/themes/ceevee/templates/partials/header.html.twig");
    }
}
