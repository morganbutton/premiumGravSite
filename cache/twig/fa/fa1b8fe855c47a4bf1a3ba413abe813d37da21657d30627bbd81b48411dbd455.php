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

/* partials/hero.html.twig */
class __TwigTemplate_203c185be0faf77d86c9d0cb4d18cce0910ec45e231fa174bfc5bf6732239760 extends \Twig\Template
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
        $context["hero"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero", []);
        // line 2
        $context["hero_overlay"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.overlay"));
        // line 3
        $context["hero_alignment"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.alignment"));
        // line 4
        $context["hero_overlay__direction"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.overlay_direction"));
        // line 5
        $context["hero_gradient"] = [0 => 0.9, 1 => 0.5];
        // line 6
        $context["hero_default"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.image"));
        // line 7
        $context["hero_text"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.text", "auto"));
        // line 8
        $context["hero_image"] = (($context["hero_image"]) ?? (call_user_func_array($this->env->getFilter('hero_image')->getCallable(), [$context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero", []), "image", []), ($context["hero_default"] ?? null))])));
        // line 9
        $context["hero_align_classes"] = "flex";
        // line 10
        $context["hero_padding"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.padding", "pt-32 md:pt-40 lg:pt-48 xl:pt-56 pb-16 md:pb-20 lg:pb-24 xl:pb-32"));
        // line 11
        echo "
";
        // line 12
        if ((($context["hero_overlay"] ?? null) == "custom")) {
            // line 13
            echo "  ";
            $context["hero_overlay"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.custom"));
            // line 14
            echo "  ";
            $context["hero_gradient"] = [0 => 0.9, 1 => 0.5];
        } elseif ((        // line 15
($context["hero_overlay"] ?? null) == "dark")) {
            // line 16
            echo "  ";
            $context["hero_gradient"] = [0 => 0.6, 1 => 0.2];
        } elseif ((        // line 17
($context["hero_overlay"] ?? null) == "darker")) {
            // line 18
            echo "  ";
            $context["hero_gradient"] = [0 => 0.9, 1 => 0.5];
        } elseif ((        // line 19
($context["hero_overlay"] ?? null) == "light")) {
            // line 20
            echo "  ";
            $context["hero_gradient"] = [0 => 0.8, 1 => 0.4];
        } elseif ((        // line 21
($context["hero_overlay"] ?? null) == "lighter")) {
            // line 22
            echo "  ";
            $context["hero_gradient"] = [0 => 1.0, 1 => 0.6];
        } elseif ((        // line 23
($context["hero_overlay"] ?? null) == "none")) {
            // line 24
            echo "  ";
            $context["hero_gradient"] = [0 => 0, 1 => 0];
        }
        // line 26
        echo "
";
        // line 27
        if ((($context["hero_overlay"] ?? null) != "none")) {
            // line 28
            echo "  ";
            $context["hero_gradient"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.overlay_gradient", ($context["hero_gradient"] ?? null)));
        }
        // line 30
        $context["hero_color"] = call_user_func_array($this->env->getFilter('color_object')->getCallable(), [$context, ($context["hero_overlay"] ?? null)]);
        // line 31
        $context["rgb"] = $this->getAttribute(($context["hero_color"] ?? null), "getRgb", [], "method");
        // line 32
        $context["hero_overlay_output"] = (((((((((((((((((("linear-gradient(to " . ($context["hero_overlay__direction"] ?? null)) . ", rgba(") . $this->getAttribute(($context["rgb"] ?? null), "R", [])) . ",") . $this->getAttribute(($context["rgb"] ?? null), "G", [])) . ",") . $this->getAttribute(($context["rgb"] ?? null), "B", [])) . ",") . twig_first($this->env, ($context["hero_gradient"] ?? null))) . "), rgba(") . $this->getAttribute(($context["rgb"] ?? null), "R", [])) . ",") . $this->getAttribute(($context["rgb"] ?? null), "G", [])) . ",") . $this->getAttribute(($context["rgb"] ?? null), "B", [])) . ",") . twig_last($this->env, ($context["hero_gradient"] ?? null))) . "))");
        // line 33
        echo "
";
        // line 34
        if ((($context["hero_text"] ?? null) == "auto")) {
            // line 35
            echo "  ";
            $context["hero_text"] = (($this->getAttribute(($context["hero_color"] ?? null), "isLight", [], "method")) ? ("dark") : ("light"));
        }
        // line 37
        echo "
";
        // line 38
        if ((($context["hero_alignment"] ?? null) == "center")) {
            // line 39
            echo "  ";
            $context["hero_align_classes"] = (($context["hero_align_classes"] ?? null) . " text-center justify-center");
            // line 40
            echo "  ";
            $context["button_classes"] = "justify-center";
        } elseif ((        // line 41
($context["hero_alignment"] ?? null) == "right")) {
            // line 42
            echo "  ";
            $context["hero_align_classes"] = (($context["hero_align_classes"] ?? null) . " text-right justify-end");
            // line 43
            echo "  ";
            $context["button_classes"] = "justify-end";
        }
        // line 45
        echo "
";
        // line 46
        $context["subtitle"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter(($context["subtitle"] ?? null), $this->getAttribute(($context["hero"] ?? null), "subtitle", []));
        // line 47
        echo "
<section id=\"hero\" class=\"relative ";
        // line 48
        if (($context["hero_animated"] ?? null)) {
            echo "animated";
        }
        echo " overflow-hidden ";
        echo twig_escape_filter($this->env, ($context["hero_height"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 49
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["hero_image"] ?? null), "sizes", [0 => "80vw"], "method"), "classes", [0 => "background-image absolute inset-0 object-cover h-full w-full"], "method"), "html", [0 => null, 1 => "Hero Image"], "method");
        echo "
  <div class=\"absolute inset-0 bg-cover bg-center bg-no-repeat\"
       style=\"background-image: ";
        // line 51
        echo twig_escape_filter($this->env, ($context["hero_overlay_output"] ?? null), "html", null, true);
        echo ";\"></div>
  <div class=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "wrapper_spacing"));
        echo " relative ";
        echo twig_escape_filter($this->env, ($context["hero_padding"] ?? null), "html", null, true);
        echo "\">
    <div class=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["hero_align_classes"] ?? null), "html", null, true);
        echo "\">
      <div class=\"w-5/6 md:w-3/4 lg:w-2/3 xl:w-1/2\">

        ";
        // line 56
        if (($context["subtitle"] ?? null)) {
            // line 57
            echo "          <div class=\"text-xs md:text-sm opacity-75 font-semibold uppercase tracking-wide ";
            echo (((($context["hero_text"] ?? null) == "dark")) ? ("text-gray-700") : ("text-gray-300"));
            echo " \">
            ";
            // line 58
            echo ($context["subtitle"] ?? null);
            echo "
          </div>
        ";
        }
        // line 61
        echo "
        ";
        // line 62
        $context["default_h1_color"] = (((($context["hero_text"] ?? null) == "dark")) ? ("text-gray-900") : ("text-gray-100"));
        // line 63
        echo "        ";
        $context["h1_color"] = (((($this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title", []), "color", []) == "auto") ||  !$this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title", [], "any", false, true), "color", [], "any", true, true))) ? (($context["default_h1_color"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title", []), "color", [])));
        // line 64
        echo "        <h1 class=\"mt-1 tracking-tight leading-tighter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold ";
        echo twig_escape_filter($this->env, ($context["h1_color"] ?? null), "html", null, true);
        echo "\">
          ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title", []), "text", []), $this->getAttribute(($context["page"] ?? null), "title", [])));
        echo "
          ";
        // line 66
        if ($this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title2", []), "text", [])) {
            // line 67
            echo "            ";
            $context["h2_color"] = (((($this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title2", []), "color", []) == "auto") ||  !$this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title2", [], "any", false, true), "color", [], "any", true, true))) ? (($context["default_h1_color"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title2", []), "color", [])));
            // line 68
            echo "            <br/>
            <span class=\"";
            // line 69
            echo twig_escape_filter($this->env, ($context["h2_color"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["hero"] ?? null), "title2", []), "text", []), "html", null, true);
            echo "</span>
          ";
        }
        // line 71
        echo "        </h1>

        ";
        // line 73
        if (($context["hero_tags"] ?? null)) {
            // line 74
            echo "          <div class=\"mt-2 ";
            echo (((($context["hero_text"] ?? null) == "dark")) ? ("text-gray-700") : ("text-gray-300"));
            echo " \">
            ";
            // line 75
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/hero.html.twig", 75)->display($context);
            // line 76
            echo "          </div>
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        if ($this->getAttribute(($context["hero"] ?? null), "content", [])) {
            // line 80
            echo "          <div class=\"mt-3 ";
            echo (((($context["hero_text"] ?? null) == "dark")) ? ("text-gray-800") : ("text-gray-200"));
            echo " text-lg md:text-xl\">
            ";
            // line 81
            echo call_user_func_array($this->env->getFilter('shortcodes')->getCallable(), [$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute(($context["hero"] ?? null), "content", []))]);
            echo "
          </div>
        ";
        }
        // line 84
        echo "

        ";
        // line 86
        if ($this->getAttribute(($context["hero"] ?? null), "buttons", [])) {
            // line 87
            echo "          <div class=\"mt-5 mt-8 flex space-x-4 ";
            echo twig_escape_filter($this->env, ($context["button_classes"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hero"] ?? null), "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 89
                echo "
              <div class=\"rounded-md shadow\">
                <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($context["button"], "link", [])), "html", null, true);
                echo "\"
                   class=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "classes", []), "html", null, true);
                echo " w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md focus:outline-none focus:ring transition duration-300 ease-in-out md:py-4 md:text-lg md:px-10\">
                  ";
                // line 93
                echo call_user_func_array($this->env->getFilter('shortcodes')->getCallable(), [$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["button"], "text", []), false)]);
                echo "
                </a>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "          </div>
        ";
        }
        // line 99
        echo "      </div>

    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 99,  283 => 97,  273 => 93,  269 => 92,  265 => 91,  261 => 89,  257 => 88,  252 => 87,  250 => 86,  246 => 84,  240 => 81,  235 => 80,  233 => 79,  230 => 78,  226 => 76,  224 => 75,  219 => 74,  217 => 73,  213 => 71,  206 => 69,  203 => 68,  200 => 67,  198 => 66,  194 => 65,  189 => 64,  186 => 63,  184 => 62,  181 => 61,  175 => 58,  170 => 57,  168 => 56,  162 => 53,  156 => 52,  152 => 51,  147 => 49,  139 => 48,  136 => 47,  134 => 46,  131 => 45,  127 => 43,  124 => 42,  122 => 41,  119 => 40,  116 => 39,  114 => 38,  111 => 37,  107 => 35,  105 => 34,  102 => 33,  100 => 32,  98 => 31,  96 => 30,  92 => 28,  90 => 27,  87 => 26,  83 => 24,  81 => 23,  78 => 22,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  48 => 10,  46 => 9,  44 => 8,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set hero = page.header.hero %}
{% set hero_overlay = theme_var('hero.overlay')|e %}
{% set hero_alignment = theme_var('hero.alignment')|e %}
{% set hero_overlay__direction = theme_var('hero.overlay_direction')|e %}
{% set hero_gradient = [0.9, 0.5] %}
{% set hero_default = theme_var('hero.image')|e %}
{% set hero_text = theme_var('hero.text', 'auto')|e %}
{% set hero_image = hero_image ?? ((page.header.hero.image|defined(hero_default))|hero_image) %}
{% set hero_align_classes = 'flex' %}
{% set hero_padding = theme_var('hero.padding', 'pt-32 md:pt-40 lg:pt-48 xl:pt-56 pb-16 md:pb-20 lg:pb-24 xl:pb-32')|e %}

{% if hero_overlay == 'custom' %}
  {% set hero_overlay = theme_var('hero.custom')|e %}
  {% set hero_gradient = [0.9, 0.5] %}
{% elseif hero_overlay == 'dark' %}
  {% set hero_gradient = [0.6, 0.2] %}
{% elseif hero_overlay == 'darker' %}
  {% set hero_gradient = [0.9, 0.5] %}
{% elseif hero_overlay == 'light' %}
  {% set hero_gradient = [0.8, 0.4] %}
{% elseif hero_overlay == 'lighter' %}
  {% set hero_gradient = [1.0, 0.6] %}
{% elseif hero_overlay == 'none' %}
  {% set hero_gradient = [0, 0] %}
{% endif %}

{% if hero_overlay != 'none' %}
  {% set hero_gradient = theme_var('hero.overlay_gradient', hero_gradient)|e %}
{% endif %}
{% set hero_color = hero_overlay|color_object %}
{% set rgb = hero_color.getRgb() %}
{% set hero_overlay_output = 'linear-gradient(to '~hero_overlay__direction~', rgba('~rgb.R~','~rgb.G~','~rgb.B~','~hero_gradient|first~'), rgba('~rgb.R~','~rgb.G~','~rgb.B~','~hero_gradient|last~'))' %}

{% if hero_text == 'auto' %}
  {% set hero_text = hero_color.isLight() ? 'dark' : 'light' %}
{% endif %}

{% if hero_alignment == 'center' %}
  {% set hero_align_classes = hero_align_classes ~ ' text-center justify-center' %}
  {% set button_classes = 'justify-center' %}
{% elseif hero_alignment == 'right' %}
  {% set hero_align_classes = hero_align_classes ~ ' text-right justify-end' %}
  {% set button_classes = 'justify-end' %}
{% endif %}

{% set subtitle = subtitle|defined(hero.subtitle) %}

<section id=\"hero\" class=\"relative {% if hero_animated %}animated{% endif %} overflow-hidden {{ hero_height }}\">
  {{ hero_image.sizes('80vw').classes('background-image absolute inset-0 object-cover h-full w-full').html(null, 'Hero Image')|raw }}
  <div class=\"absolute inset-0 bg-cover bg-center bg-no-repeat\"
       style=\"background-image: {{ hero_overlay_output }};\"></div>
  <div class=\"{{ theme_var('wrapper_spacing')|e }} relative {{ hero_padding }}\">
    <div class=\"{{ hero_align_classes }}\">
      <div class=\"w-5/6 md:w-3/4 lg:w-2/3 xl:w-1/2\">

        {% if subtitle %}
          <div class=\"text-xs md:text-sm opacity-75 font-semibold uppercase tracking-wide {{ hero_text == 'dark' ? 'text-gray-700' : 'text-gray-300' }} \">
            {{ subtitle|raw }}
          </div>
        {% endif %}

        {% set default_h1_color = hero_text == 'dark' ? 'text-gray-900' : 'text-gray-100' %}
        {% set h1_color = hero.title.color == 'auto' or hero.title.color is not defined ? default_h1_color : hero.title.color %}
        <h1 class=\"mt-1 tracking-tight leading-tighter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold {{ h1_color }}\">
          {{ hero.title.text|defined(page.title)|e }}
          {% if hero.title2.text %}
            {% set h2_color = hero.title2.color == 'auto' or hero.title2.color is not defined ? default_h1_color : hero.title2.color %}
            <br/>
            <span class=\"{{ h2_color }}\">{{ hero.title2.text }}</span>
          {% endif %}
        </h1>

        {% if hero_tags %}
          <div class=\"mt-2 {{ hero_text == 'dark' ? 'text-gray-700' : 'text-gray-300' }} \">
            {% include 'partials/blog/taxonomy.html.twig' %}
          </div>
        {% endif %}

        {% if hero.content %}
          <div class=\"mt-3 {{ hero_text == 'dark' ? 'text-gray-800' : 'text-gray-200' }} text-lg md:text-xl\">
            {{ hero.content|markdown|shortcodes|raw }}
          </div>
        {% endif %}


        {% if hero.buttons %}
          <div class=\"mt-5 mt-8 flex space-x-4 {{ button_classes }}\">
            {% for button in hero.buttons %}

              <div class=\"rounded-md shadow\">
                <a href=\"{{ url(button.link) }}\"
                   class=\"{{ button.classes }} w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md focus:outline-none focus:ring transition duration-300 ease-in-out md:py-4 md:text-lg md:px-10\">
                  {{ button.text|markdown(false)|shortcodes|raw }}
                </a>
              </div>
            {% endfor %}
          </div>
        {% endif %}
      </div>

    </div>
  </div>
</section>
", "partials/hero.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\hero.html.twig");
    }
}
