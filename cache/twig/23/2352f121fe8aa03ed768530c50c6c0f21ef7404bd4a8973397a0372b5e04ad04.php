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

/* blocks/base.html.twig */
class __TwigTemplate_a9f2c9b800c64c4210943fc51a9a1216dde17c3dcdeb83eb89edc54452125395 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content_surround' => [$this, 'block_content_surround'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('content_surround', $context, $blocks);
    }

    public function block_content_surround($context, array $blocks = [])
    {
        // line 2
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "menu", []), "primary_location", []) == "sidebar")) {
            // line 3
            echo "    ";
            $context["secondary_menu"] = call_user_func_array($this->env->getFunction('typhoon_primary_menu')->getCallable(), []);
            // line 4
            echo "  ";
        } else {
            // line 5
            echo "    ";
            $context["secondary_menu"] = call_user_func_array($this->env->getFunction('typhoon_secondary_menu')->getCallable(), [($context["page"] ?? null)]);
            // line 6
            echo "  ";
        }
        // line 7
        echo "
  ";
        // line 8
        $context["secondary_classes"] = ["default" => ["a" => "flex px-1 pl-3 w-full border-l-2 border-transparent transition duration-150 ease-in-out text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary", "li" => ["base" => "pl-4", "inactive" => "", "active" => "active text-gray-800 dark:text-gray-100"]]];
        // line 18
        echo "
  ";
        // line 19
        $context["alpine"] = ["parent" => "x-data=\"{ selected: MENU_STATE }\"", "button" => "@click=\"selected = !selected\"", "child" => "x-show=\"selected\"
          x-transition:enter=\"transition duration-500\"
          x-transition:enter-start=\"opacity-0\"
          x-transition:enter-end=\"opacity-1\"", "svg_open" => "x-show=\"selected\"", "svg_closed" => "x-show=\"!selected\""];
        // line 29
        echo "
  ";
        // line 30
        $context["svg"] = ["closed" => call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/plus.svg", "h-4 w-4 text-gray-300"]), "open" => call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/minus.svg", "h-4 w-4 text-gray-500"])];
        // line 34
        echo "
  <div class=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "wrapper_spacing"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "section_classes"));
        echo " py-12\">
    <div class=\"flex\">
      ";
        // line 37
        if (($context["secondary_menu"] ?? null)) {
            // line 38
            echo "        <nav class=\"hidden md:block w-1/4 lg:1/5 border-r border-gray-200 dark:border-gray-700 pr-3\">
          ";
            // line 39
            $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "blocks/base.html.twig", 39)->unwrap();
            // line 40
            echo "          <ul class=\"sidebar-nav -ml-4 text-sm\">
            ";
            // line 41
            echo $context["macros"]->getnav_loop(($context["secondary_menu"] ?? null), ($context["secondary_classes"] ?? null), ($context["alpine"] ?? null), ($context["svg"] ?? null));
            echo "
          </ul>
        </nav>
        ";
            // line 44
            $context["content_classes"] = "w-full md:w-3/4 lg:4/5 md:pl-6";
            // line 45
            echo "      ";
        }
        // line 46
        echo "      <div class=\"";
        ((($context["content_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["content_classes"] ?? null), "html", null, true))) : (print ("w-full")));
        echo "\">
        ";
        // line 47
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 52
        echo "      </div>
    </div>
  </div>
";
    }

    // line 47
    public function block_content_wrapper($context, array $blocks = [])
    {
        // line 48
        echo "          <div class=\"";
        echo twig_escape_filter($this->env, ($context["prose_style"] ?? null), "html", null, true);
        echo " max-w-none\">
            ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "          </div>
        ";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "blocks/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  127 => 50,  125 => 49,  120 => 48,  117 => 47,  110 => 52,  108 => 47,  103 => 46,  100 => 45,  98 => 44,  92 => 41,  89 => 40,  87 => 39,  84 => 38,  82 => 37,  75 => 35,  72 => 34,  70 => 30,  67 => 29,  62 => 19,  59 => 18,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block content_surround %}
  {% if theme_config.menu.primary_location == 'sidebar' %}
    {% set secondary_menu = typhoon_primary_menu() %}
  {% else %}
    {% set secondary_menu = typhoon_secondary_menu(page) %}
  {% endif %}

  {% set secondary_classes = {
    default: {
      a: \"flex px-1 pl-3 w-full border-l-2 border-transparent transition duration-150 ease-in-out text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary\",
      li: {
        base: \"pl-4\",
        inactive: \"\",
        active: \"active text-gray-800 dark:text-gray-100\",
      }
    }
  } %}

  {% set alpine = {
    parent: 'x-data=\"{ selected: MENU_STATE }\"',
    button: '@click=\"selected = !selected\"',
    child: 'x-show=\"selected\"
          x-transition:enter=\"transition duration-500\"
          x-transition:enter-start=\"opacity-0\"
          x-transition:enter-end=\"opacity-1\"',
    svg_open: 'x-show=\"selected\"',
    svg_closed: 'x-show=\"!selected\"'
  } %}

  {% set svg = {
    closed: svg_icon('tabler/plus.svg', 'h-4 w-4 text-gray-300'),
    open: svg_icon('tabler/minus.svg', 'h-4 w-4 text-gray-500')
  } %}

  <div class=\"{{ theme_var('wrapper_spacing') }} {{ theme_var('section_classes')|e }} py-12\">
    <div class=\"flex\">
      {% if secondary_menu %}
        <nav class=\"hidden md:block w-1/4 lg:1/5 border-r border-gray-200 dark:border-gray-700 pr-3\">
          {% import 'macros/macros.html.twig' as macros %}
          <ul class=\"sidebar-nav -ml-4 text-sm\">
            {{ macros.nav_loop(secondary_menu, secondary_classes, alpine, svg) }}
          </ul>
        </nav>
        {% set content_classes = 'w-full md:w-3/4 lg:4/5 md:pl-6' %}
      {% endif %}
      <div class=\"{{ content_classes ?: 'w-full' }}\">
        {% block content_wrapper %}
          <div class=\"{{ prose_style }} max-w-none\">
            {% block content %}{% endblock %}
          </div>
        {% endblock %}
      </div>
    </div>
  </div>
{% endblock %}
", "blocks/base.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\blocks\\base.html.twig");
    }
}
