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

/* partials/mobile-navigation.html.twig */
class __TwigTemplate_91ba8366641db12706590d12cf6e36578809d91885176777eeb616bc7bc95039 extends \Twig\Template
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
        $context["classes"] = ["root" => "flex flex-col text-gray-300 text-left w-full", "default" => ["ul" => "pl-6 pt-2 -mb-1 menu-default", "li" => ["base" => "text-sm pl-2 border-t border-gray-700 py-1", "active" => "active"], "a" => "transition duration-300 hover:text-primary", "icon" => "w-3 ml-2 text-white inline"], "level_1" => ["li" => ["base" => "text-lg pl-2 border-t border-gray-700 py-2"]]];
        // line 18
        echo "
";
        // line 19
        $context["alpine"] = ["parent" => "x-data=\"{ selected: MENU_STATE }\"", "button" => "@click=\"selected = !selected\"", "child" => "x-show=\"selected\"
            x-transition:enter=\"transition duration-700\"
            x-transition:enter-start=\"opacity-0\"
            x-transition:enter-end=\"opacity-1\"", "svg_open" => "x-show=\"selected\"", "svg_closed" => "x-show=\"!selected\""];
        // line 29
        echo "
";
        // line 30
        $context["svg"] = null;
        // line 31
        $context["open"] = call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/minus.svg", "h-6 w-6 text-gray-500 stroke-3/2"]);
        // line 32
        $context["closed"] = call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/plus.svg", "h-6 w-6 text-gray-600 stroke-3/2"]);
        // line 33
        echo "
";
        // line 34
        if ((($context["open"] ?? null) || ($context["closed"] ?? null))) {
            // line 35
            echo "  ";
            $context["svg"] = ["closed" => ($context["closed"] ?? null), "open" => ($context["open"] ?? null)];
        }
        // line 37
        echo "
";
        // line 38
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/mobile-navigation.html.twig", 38)->unwrap();
        // line 39
        echo "
<div :class=\"{ 'invisible': !show_mobile_nav, 'opacity-100': show_mobile_nav }\"
     class=\"mobile-nav invisible z-20 overflow-hidden transition duration-500 h-screen w-screen absolute top-0 flex flex-col items-center justify-around absolute opacity-0 bg-gray-800 transition duration-500\">

  <div class=\"overflow-y-auto w-full py-12 pl-2 pr-12 sm:p-12\">

    <ul class='";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["classes"] ?? null), "root", []), "html", null, true);
        echo "'>
      ";
        // line 46
        echo $context["macros"]->getnav_loop(call_user_func_array($this->env->getFunction('typhoon_full_menu')->getCallable(), []), ($context["classes"] ?? null), ($context["alpine"] ?? null), ($context["svg"] ?? null));
        echo "
    </ul>
  </div>


  ";
        // line 52
        echo "  <div class=\"absolute top-2 right-2\">
    <button @click=\"show_mobile_nav = false\" aria-label=\"Close button\" type=\"button\"
            class=\"inline-flex items-center justify-center p-2 rounded-md text-white hover:text-primary focus:outline-none focus:text-gray-800 transition duration-150 ease-in-out\">
      ";
        // line 55
        echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/x.svg", "h-8 w-8 text-gray-300 hover:text-white"]);
        echo "
    </button>
  </div>
  ";
        // line 59
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/mobile-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 59,  88 => 55,  83 => 52,  75 => 46,  71 => 45,  63 => 39,  61 => 38,  58 => 37,  54 => 35,  52 => 34,  49 => 33,  47 => 32,  45 => 31,  43 => 30,  40 => 29,  35 => 19,  32 => 18,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = {
  root: \"flex flex-col text-gray-300 text-left w-full\",
  default: {
    ul: \"pl-6 pt-2 -mb-1 menu-default\",
    li: {
      base: \"text-sm pl-2 border-t border-gray-700 py-1\",
      active: 'active'
    },
    a: \"transition duration-300 hover:text-primary\",
    icon: \"w-3 ml-2 text-white inline\",
  },
  level_1: {
    li: {
      base: \"text-lg pl-2 border-t border-gray-700 py-2\",
    }
  }
} %}

{% set alpine = {
  parent: 'x-data=\"{ selected: MENU_STATE }\"',
  button: '@click=\"selected = !selected\"',
  child: 'x-show=\"selected\"
            x-transition:enter=\"transition duration-700\"
            x-transition:enter-start=\"opacity-0\"
            x-transition:enter-end=\"opacity-1\"',
  svg_open: 'x-show=\"selected\"',
  svg_closed: 'x-show=\"!selected\"'
} %}

{% set svg = null %}
{% set open = svg_icon('tabler/minus.svg', 'h-6 w-6 text-gray-500 stroke-3/2') %}
{% set closed = svg_icon('tabler/plus.svg', 'h-6 w-6 text-gray-600 stroke-3/2') %}

{% if open or closed %}
  {% set svg = { closed: closed, open: open} %}
{% endif %}

{% import 'macros/macros.html.twig' as macros %}

<div :class=\"{ 'invisible': !show_mobile_nav, 'opacity-100': show_mobile_nav }\"
     class=\"mobile-nav invisible z-20 overflow-hidden transition duration-500 h-screen w-screen absolute top-0 flex flex-col items-center justify-around absolute opacity-0 bg-gray-800 transition duration-500\">

  <div class=\"overflow-y-auto w-full py-12 pl-2 pr-12 sm:p-12\">

    <ul class='{{ classes.root }}'>
      {{ macros.nav_loop(typhoon_full_menu(), classes, alpine, svg) }}
    </ul>
  </div>


  {# CLOSE BUTTON #}
  <div class=\"absolute top-2 right-2\">
    <button @click=\"show_mobile_nav = false\" aria-label=\"Close button\" type=\"button\"
            class=\"inline-flex items-center justify-center p-2 rounded-md text-white hover:text-primary focus:outline-none focus:text-gray-800 transition duration-150 ease-in-out\">
      {{ svg_icon('tabler/x.svg', 'h-8 w-8 text-gray-300 hover:text-white')|raw }}
    </button>
  </div>
  {# CLOSE BUTTON #}
</div>
", "partials/mobile-navigation.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\mobile-navigation.html.twig");
    }
}
