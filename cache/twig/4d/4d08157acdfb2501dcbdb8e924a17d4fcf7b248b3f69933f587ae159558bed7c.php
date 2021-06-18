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

/* partials/base.html.twig */
class __TwigTemplate_90ca629a935815b37700602b32d6821407f18448e5dbfe6387c698a0b700a66b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 2, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'render_body' => [$this, 'block_render_body'],
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'header' => [$this, 'block_header'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'footer' => [$this, 'block_footer'],
                'mobile_nav' => [$this, 'block_mobile_nav'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/theme-variables.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/theme-variables.html.twig", "partials/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 3
    public function block_render_body($context, array $blocks = [])
    {
        // line 4
        echo "  <!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\"
      data-appearance=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["appearance" => (($this->getAttribute($this->getAttribute(        // line 7
($context["theme_config"] ?? null), "appearance", [], "any", false, true), "theme", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "appearance", [], "any", false, true), "theme", []), "")) : ("")), "store" => (($this->getAttribute($this->getAttribute(        // line 8
($context["theme_config"] ?? null), "appearance", []), "storage", [])) ? (1) : (0))]));
        // line 9
        echo "\"
      x-data=\"{ show_mobile_nav: false, theme: typhoonRetrieve().theme, appearance: typhoonRetrieve().appearance }\"
      :class=\"[ show_mobile_nav ? 'overflow-hidden' : '', theme ]\" class=\"overflow-x-hidden\">
<head>
  ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "
  ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
  ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('assets', $context, $blocks);
        // line 46
        echo "</head>

<body
        id=\"top\"
        class=\"flex flex-col items-stretch min-h-screen antialiased relative bg-white dark:bg-gray-900 overflow-x-hidden ";
        // line 50
        echo twig_escape_filter($this->env, ($context["base_text_style"] ?? null), "html", null, true);
        echo " ";
        if (($context["debugger_enabled"] ?? null)) {
            echo "debug-screens ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []), "html", null, true);
        echo "\"
        @typhoon-theme.window=\"theme = \$event.detail.theme || ''; appearance = \$event.detail.appearance || '';\">
";
        // line 52
        $this->loadTemplate("partials/notices.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "<div class=\"flex-1 flex flex-col relative\">
  ";
        // line 54
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
  ";
        // line 58
        $this->displayBlock('hero', $context, $blocks);
        // line 63
        echo "
  ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
  ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
  ";
        // line 76
        $this->displayBlock('mobile_nav', $context, $blocks);
        // line 81
        echo "</div>

";
        // line 83
        $this->displayBlock('bottom', $context, $blocks);
        // line 86
        echo "</body>
</html>
";
    }

    // line 13
    public function block_head($context, array $blocks = [])
    {
        // line 14
        echo "    <meta charset=\"utf-8\"/>
    <title>";
        // line 16
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
        }
        // line 17
        if ($this->getAttribute(($context["theme_config"] ?? null), "append_site_title", [])) {
            // line 18
            if (($this->getAttribute(($context["header"] ?? null), "title", []) && $this->getAttribute(($context["site"] ?? null), "title", []))) {
                echo " | ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        }
        // line 20
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    ";
        // line 23
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 23)->display($context);
        // line 24
        echo "    ";
        $this->loadTemplate("partials/favicon.html.twig", "partials/base.html.twig", 24)->display($context);
        // line 25
        echo "    <link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\"/>
  ";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://build/css/site.css"], "method");
        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "      ";
        $this->loadTemplate("partials/theme.css.twig", "partials/base.html.twig", 31)->display($context);
        // line 32
        echo "    ";
        $context["tailwind_theme"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["tailwind_theme"] ?? null)], "method");
        // line 34
        echo "
  ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        // line 38
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/alpine.js", 1 => ["loading" => "defer"]], "method");
        // line 39
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/appearance.js", 1 => ["group" => "bottom"]], "method");
        // line 40
        echo "  ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 42
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 43
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
  ";
        // line 44
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
  ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 54
    public function block_header($context, array $blocks = [])
    {
        // line 55
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "  ";
    }

    // line 58
    public function block_hero($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        if (($context["hero_display"] ?? null)) {
            // line 60
            echo "      ";
            $this->loadTemplate("partials/hero.html.twig", "partials/base.html.twig", 60)->display($context);
            // line 61
            echo "    ";
        }
        // line 62
        echo "  ";
    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        // line 65
        echo "    <section class=\"flex-1\">
      <div class=\"";
        // line 66
        echo ((($context["hero_display"] ?? null)) ? ("pt-0") : ("pt-16"));
        echo "\">
        ";
        // line 67
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
      </div>
    </section>
  ";
    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        // line 73
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 73)->display($context);
        // line 74
        echo "  ";
    }

    // line 76
    public function block_mobile_nav($context, array $blocks = [])
    {
        // line 77
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "menu", []), "mobile_nav", []) == true)) {
            // line 78
            echo "      ";
            $this->loadTemplate("partials/mobile-navigation.html.twig", "partials/base.html.twig", 78)->display($context);
            // line 79
            echo "    ";
        }
        // line 80
        echo "  ";
    }

    // line 83
    public function block_bottom($context, array $blocks = [])
    {
        // line 84
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 84,  315 => 83,  311 => 80,  308 => 79,  305 => 78,  302 => 77,  299 => 76,  295 => 74,  292 => 73,  289 => 72,  281 => 67,  277 => 66,  274 => 65,  271 => 64,  267 => 62,  264 => 61,  261 => 60,  258 => 59,  255 => 58,  251 => 56,  248 => 55,  245 => 54,  238 => 44,  233 => 43,  230 => 42,  221 => 40,  218 => 39,  215 => 38,  212 => 37,  207 => 34,  204 => 33,  201 => 32,  198 => 31,  195 => 30,  192 => 29,  189 => 28,  182 => 25,  179 => 24,  177 => 23,  172 => 20,  166 => 18,  164 => 17,  160 => 16,  157 => 14,  154 => 13,  148 => 86,  146 => 83,  142 => 81,  140 => 76,  137 => 75,  135 => 72,  132 => 71,  130 => 64,  127 => 63,  125 => 58,  122 => 57,  120 => 54,  117 => 53,  115 => 52,  105 => 50,  99 => 46,  97 => 42,  94 => 41,  92 => 37,  89 => 36,  87 => 28,  84 => 27,  82 => 13,  76 => 9,  74 => 8,  73 => 7,  72 => 6,  68 => 5,  65 => 4,  62 => 3,  51 => 1,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/theme-variables.html.twig' %}
{% use 'blocks/base.html.twig' %}
{% block render_body %}
  <!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\"
      data-appearance=\"{{ {
        appearance: theme_config.appearance.theme|default(''),
        store: theme_config.appearance.storage ? 1 : 0
      }|json_encode|e }}\"
      x-data=\"{ show_mobile_nav: false, theme: typhoonRetrieve().theme, appearance: typhoonRetrieve().appearance }\"
      :class=\"[ show_mobile_nav ? 'overflow-hidden' : '', theme ]\" class=\"overflow-x-hidden\">
<head>
  {% block head %}
    <meta charset=\"utf-8\"/>
    <title>
      {%- if header.title -%}{{- header.title|e('html') -}}{%- endif -%}
      {%- if theme_config.append_site_title -%}
        {%- if header.title and site.title %} | {% endif -%}{{- site.title|e('html') -}}
      {%- endif -%}
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    {% include 'partials/metadata.html.twig' %}
    {% include 'partials/favicon.html.twig' %}
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
  {% endblock head %}

  {% block stylesheets %}
    {% do assets.addCss('theme://build/css/site.css') %}
    {% set tailwind_theme %}
      {% include 'partials/theme.css.twig' %}
    {% endset %}
    {% do assets.addInlineCss(tailwind_theme) %}

  {% endblock %}

  {% block javascripts %}
    {% do assets.addJs('theme://js/alpine.js', {loading: 'defer'}) %}
    {% do assets.addJs('theme://js/appearance.js', {group: 'bottom'}) %}
  {% endblock %}

  {% block assets deferred %}
  {{ assets.css() | raw }}
  {{ assets.js() | raw }}
  {% endblock %}
</head>

<body
        id=\"top\"
        class=\"flex flex-col items-stretch min-h-screen antialiased relative bg-white dark:bg-gray-900 overflow-x-hidden {{ base_text_style }} {% if debugger_enabled %}debug-screens {% endif %}{{ page.header.body_classes }}\"
        @typhoon-theme.window=\"theme = \$event.detail.theme || ''; appearance = \$event.detail.appearance || '';\">
{% include 'partials/notices.html.twig' %}
<div class=\"flex-1 flex flex-col relative\">
  {% block header %}
    {% include 'partials/header.html.twig' %}
  {% endblock %}

  {% block hero %}
    {% if hero_display %}
      {% include 'partials/hero.html.twig' %}
    {% endif %}
  {% endblock %}

  {% block body %}
    <section class=\"flex-1\">
      <div class=\"{{ hero_display ? 'pt-0' : 'pt-16' }}\">
        {{ block('content_surround') }}
      </div>
    </section>
  {% endblock %}

  {% block footer %}
    {% include 'partials/footer.html.twig' %}
  {% endblock %}

  {% block mobile_nav %}
    {% if theme_config.menu.mobile_nav == true %}
      {% include 'partials/mobile-navigation.html.twig' %}
    {% endif %}
  {% endblock %}
</div>

{% block bottom %}
  {{ assets.js(\"bottom\") | raw }}
{% endblock %}
</body>
</html>
{% endblock %}
", "partials/base.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\base.html.twig");
    }
}
