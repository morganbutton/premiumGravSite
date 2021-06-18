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

/* partials/theme.css.twig */
class __TwigTemplate_79a92d3ae128d936aed82ede50d5298fbaa5edc798be5ad820d3c8f012d99781 extends \Twig\Template
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
        // line 1
        echo ":root {
  --color-primary: #";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["primary_color"] ?? null), "getHex", []), "html", null, true);
        echo ";
  --color-primary__lighter: #";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["primary_color"] ?? null), "lighten", [0 => ($context["brightness_lighter"] ?? null)], "method"), "html", null, true);
        echo ";
  --color-primary__darker: #";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["primary_color"] ?? null), "darken", [0 => ($context["brightness_darker"] ?? null)], "method"), "html", null, true);
        echo ";
}";
    }

    public function getTemplateName()
    {
        return "partials/theme.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(":root {
  --color-primary: #{{ primary_color.getHex }};
  --color-primary__lighter: #{{ primary_color.lighten(brightness_lighter) }};
  --color-primary__darker: #{{ primary_color.darken(brightness_darker) }};
}", "partials/theme.css.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\theme.css.twig");
    }
}
