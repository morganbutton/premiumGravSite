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
class __TwigTemplate_cd312b9a36009477be469684c97d7b0f37bdbfb7854166f12cccbebbd2bdcbc1 extends \Twig\Template
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
        if (((($context["header_background"] ?? null) == "custom") && ($context["header_custom_style"] ?? null))) {
            // line 2
            echo "  ";
            $context["header_style"] = (("background: " . ($context["header_custom_style"] ?? null)) . ";");
        } else {
            // line 4
            echo "  ";
            $context["header_style"] = (((($context["header_background"] ?? null) == "dark")) ? ("background-color: rgba(0,0,0,0.5);") : ((((($context["header_background"] ?? null) == "light")) ? ("background-color: rgba(255,255,255,0.5);") : (""))));
        }
        // line 6
        $context["header_text_class"] = (((($context["header_text"] ?? null) == "auto")) ? ("text-gray-800 dark:text-gray-200") : ((((($context["header_text"] ?? null) == "light")) ? ("text-gray-200") : ("text-gray-800"))));
        // line 7
        echo "<header class=\"absolute w-full z-10 pb-1 h-16 flex items-center ";
        echo (((($context["header_background"] ?? null) == "auto")) ? ("bg-white dark:bg-gray-900") : (""));
        echo "\"
        style=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["header_style"] ?? null), "html", null, true);
        echo "\">
  <div class=\"flex-auto ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "wrapper_spacing"));
        echo "\">
    <nav class=\"header-nav relative flex items-center justify-between lg:justify-start animated \">
      <div class=\"flex items-center\">
        <div class=\"flex items-center justify-between w-full md:w-auto\">
          <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" aria-label=\"Logo\" class=\"";
        echo twig_escape_filter($this->env, ($context["header_text_class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 14
        $this->loadTemplate("partials/logo.html.twig", "partials/header.html.twig", 14)->display($context);
        // line 15
        echo "          </a>
        </div>
      </div>
      ";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "menu", []), "primary_location", []) == "header")) {
            // line 19
            echo "        <div class=\"hidden h-full md:flex md:flex-grow justify-end\">
          ";
            // line 20
            $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 20)->display($context);
            // line 21
            echo "        </div>
      ";
        }
        // line 23
        echo "    </nav>
  </div>
  ";
        // line 25
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "menu", []), "mobile_nav", []) == true)) {
            // line 26
            echo "    <div class=\"flex items-center md:hidden justify-end\">
      <button @click=\"show_mobile_nav = true\" aria-label=\"Mobile menu\" type=\"button\"
              class=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["header_text_class"] ?? null), "html", null, true);
            echo " inline-flex items-center justify-center p-2 mr-2 rounded-md focus:outline-none transition duration-150 ease-in-out\">
        ";
            // line 29
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/menu.svg", "current-color h-8 w-8"]);
            echo "
      </button>
    </div>
  ";
        }
        // line 33
        echo "</header>
";
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
        return array (  103 => 33,  96 => 29,  92 => 28,  88 => 26,  86 => 25,  82 => 23,  78 => 21,  76 => 20,  73 => 19,  71 => 18,  66 => 15,  64 => 14,  58 => 13,  51 => 9,  47 => 8,  42 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if header_background == 'custom' and header_custom_style %}
  {% set header_style = 'background: ' ~ header_custom_style ~ ';' %}
{% else %}
  {% set header_style = header_background == 'dark' ? 'background-color: rgba(0,0,0,0.5);' : header_background == 'light' ? 'background-color: rgba(255,255,255,0.5);' : '' %}
{% endif %}
{% set header_text_class = header_text == 'auto' ? 'text-gray-800 dark:text-gray-200' : header_text == 'light' ? 'text-gray-200' : 'text-gray-800' %}
<header class=\"absolute w-full z-10 pb-1 h-16 flex items-center {{ header_background == 'auto' ? 'bg-white dark:bg-gray-900' }}\"
        style=\"{{ header_style }}\">
  <div class=\"flex-auto {{ theme_var('wrapper_spacing')|e }}\">
    <nav class=\"header-nav relative flex items-center justify-between lg:justify-start animated \">
      <div class=\"flex items-center\">
        <div class=\"flex items-center justify-between w-full md:w-auto\">
          <a href=\"{{ home_url }}\" aria-label=\"Logo\" class=\"{{ header_text_class }}\">
            {% include 'partials/logo.html.twig' %}
          </a>
        </div>
      </div>
      {% if theme_config.menu.primary_location == 'header' %}
        <div class=\"hidden h-full md:flex md:flex-grow justify-end\">
          {% include 'partials/navigation.html.twig' %}
        </div>
      {% endif %}
    </nav>
  </div>
  {% if theme_config.menu.mobile_nav == true %}
    <div class=\"flex items-center md:hidden justify-end\">
      <button @click=\"show_mobile_nav = true\" aria-label=\"Mobile menu\" type=\"button\"
              class=\"{{ header_text_class }} inline-flex items-center justify-center p-2 mr-2 rounded-md focus:outline-none transition duration-150 ease-in-out\">
        {{ svg_icon('tabler/menu.svg', 'current-color h-8 w-8')|raw }}
      </button>
    </div>
  {% endif %}
</header>
", "partials/header.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\header.html.twig");
    }
}
