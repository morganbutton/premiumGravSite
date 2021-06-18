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
class __TwigTemplate_339ea473b3f768724dcd3d0030190d63f2505ea42b1f18fdb4c76a3763f3b06f extends \Twig\Template
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
        $context["colors"] = ["default" => "text-gray-700", "active" => "text-gray-900"];
        // line 5
        echo "
";
        // line 6
        if ((($context["header_text"] ?? null) == "light")) {
            // line 7
            echo "  ";
            $context["colors"] = ["default" => "text-gray-400", "active" => "text-gray-100"];
        }
        // line 12
        echo "
";
        // line 13
        if ((($context["header_text"] ?? null) == "auto")) {
            // line 14
            echo "  ";
            $context["colors"] = ["default" => "text-gray-700 hover:text-primary dark:text-gray-400 dark:hover:text-primary", "active" => "text-gray-900 dark:text-gray-100"];
        }
        // line 19
        echo "
";
        // line 20
        $context["colors_default"] = ["default" => "text-gray-700 hover:text-primary dark:text-gray-400 dark:hover:text-primary", "active" => "text-gray-900 dark:text-gray-100"];
        // line 24
        echo "

";
        // line 26
        $context["classes"] = ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : (["root" => "flex h-16 mr-8", "default" => ["a" => "flex px-3 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-900", "li" => ["base" => "flex leading-5 relative", "inactive" => (" " . $this->getAttribute(        // line 32
($context["colors_default"] ?? null), "default", [])), "active" => $this->getAttribute(        // line 33
($context["colors_default"] ?? null), "active", [])], "icon" => "w-4 h-4 ml-1 text-gray-800er", "ul" => "flex transition duration-300 z-10 absolute py-2 flex-col w-48 rounded-b bg-white dark:bg-gray-800 border-t-2 border-gray-200 dark:border-gray-600 shadow-lg text-gray-700 dark:text-gray-300"], "level_1" => ["a" => "flex items-center h-full px-3", "li" => ["base" => "flex ml-4 text-sm relative inline-flex items-center pt-1 border-b-2 font-medium leading-5 transition duration-150 ease-in-out ", "inactive" => (("border-transparent " . $this->getAttribute(        // line 42
($context["colors"] ?? null), "default", [])) . " hover:text-primary hover:border-primary focus:outline-none focus:text-primary focus:border-gray-300 "), "active" => ("border-primary text-sm focus:outline-none focus:border-primary " . $this->getAttribute(        // line 43
($context["colors"] ?? null), "active", []))], "ul" => "flex transition duration-300 z-10 absolute py-2 flex-col w-48 rounded-b bg-white border-gray-200 shadow-lg"]]));
        // line 48
        echo "
";
        // line 49
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 49)->unwrap();
        // line 50
        echo "<ul class='";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["classes"] ?? null), "root", []), "html", null, true);
        echo "'>
  ";
        // line 51
        echo $context["macros"]->getnav_loop(call_user_func_array($this->env->getFunction('typhoon_primary_menu')->getCallable(), []), ($context["classes"] ?? null), ($context["alpine"] ?? null), ($context["svg"] ?? null));
        echo "
</ul>
";
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
        return array (  75 => 51,  70 => 50,  68 => 49,  65 => 48,  63 => 43,  62 => 42,  61 => 33,  60 => 32,  59 => 26,  55 => 24,  53 => 20,  50 => 19,  46 => 14,  44 => 13,  41 => 12,  37 => 7,  35 => 6,  32 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set colors = {
  default: 'text-gray-700',
  active: 'text-gray-900',
} %}

{% if header_text == 'light' %}
  {% set colors = {
    default: 'text-gray-400',
    active: 'text-gray-100',
  } %}
{% endif %}

{% if header_text == 'auto' %}
  {% set colors = {
    default: 'text-gray-700 hover:text-primary dark:text-gray-400 dark:hover:text-primary',
    active: 'text-gray-900 dark:text-gray-100',
  } %}
{% endif %}

{% set colors_default = {
  default: 'text-gray-700 hover:text-primary dark:text-gray-400 dark:hover:text-primary',
  active: 'text-gray-900 dark:text-gray-100',
} %}


{% set classes = classes ? classes : {
  root: 'flex h-16 mr-8',
  default: {
    a: 'flex px-3 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-900',
    li: {
      base: 'flex leading-5 relative',
      inactive: ' ' ~ colors_default.default,
      active: colors_default.active,
    },
    icon: 'w-4 h-4 ml-1 text-gray-800er',
    ul: 'flex transition duration-300 z-10 absolute py-2 flex-col w-48 rounded-b bg-white dark:bg-gray-800 border-t-2 border-gray-200 dark:border-gray-600 shadow-lg text-gray-700 dark:text-gray-300',
  },
  level_1: {
    a: 'flex items-center h-full px-3',
    li: {
      base: 'flex ml-4 text-sm relative inline-flex items-center pt-1 border-b-2 font-medium leading-5 transition duration-150 ease-in-out ',
      inactive: 'border-transparent ' ~ colors.default ~' hover:text-primary hover:border-primary focus:outline-none focus:text-primary focus:border-gray-300 ',
      active: 'border-primary text-sm focus:outline-none focus:border-primary ' ~ colors.active,
    },
    ul: 'flex transition duration-300 z-10 absolute py-2 flex-col w-48 rounded-b bg-white border-gray-200 shadow-lg',
  }
} %}

{% import 'macros/macros.html.twig' as macros %}
<ul class='{{ classes.root }}'>
  {{ macros.nav_loop(typhoon_primary_menu(), classes, alpine, svg) }}
</ul>
", "partials/navigation.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\navigation.html.twig");
    }
}
