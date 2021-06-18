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

/* partials/theme-variables.html.twig */
class __TwigTemplate_b0dbb6b6e6a0cabaeb28dc093267942502ddb4d72973ff84389ea71b49c2fa89 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'render_body' => [$this, 'block_render_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute(($context["config"] ?? null), "theme", []);
        // line 2
        $context["prose_style"] = "prose md:prose-md";
        // line 3
        $context["base_text_style"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "colors.text_style"));
        // line 4
        $context["debugger_enabled"] = twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "debugger", []), "enabled", []));
        // line 5
        $context["brightness_lighter"] = twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "colors", []), "brightness_lighter", []));
        // line 6
        $context["brightness_darker"] = twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "colors", []), "brightness_darker", []));
        // line 7
        $context["primary_color"] = call_user_func_array($this->env->getFunction('color')->getCallable(), [$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "colors.primary")]);
        // line 8
        $context["header_background"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "header_bar.background", "light"));
        // line 9
        $context["header_custom_style"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "header_bar.custom_style"));
        // line 10
        $context["header_text"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "header_bar.text", "default"));
        // line 11
        $context["hero_display"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "hero.display");
        // line 12
        $context["favicon_file"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_favicon");
        // line 13
        $this->displayBlock('render_body', $context, $blocks);
        // line 14
        echo "
";
    }

    // line 13
    public function block_render_body($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/theme-variables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 14,  55 => 13,  53 => 12,  51 => 11,  49 => 10,  47 => 9,  45 => 8,  43 => 7,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = config.theme %}
{% set prose_style = 'prose md:prose-md' %}
{% set base_text_style = theme_var('colors.text_style')|e %}
{% set debugger_enabled = config.system.debugger.enabled|e %}
{% set brightness_lighter = theme_config.colors.brightness_lighter|e %}
{% set brightness_darker = theme_config.colors.brightness_darker|e %}
{% set primary_color = color(theme_var('colors.primary')) %}
{% set header_background = theme_var('header_bar.background', 'light')|e %}
{% set header_custom_style = theme_var('header_bar.custom_style')|e %}
{% set header_text = theme_var('header_bar.text', 'default')|e %}
{% set hero_display = theme_var('hero.display') %}
{% set favicon_file = theme_var('custom_favicon') %}
{% block render_body %}{% endblock %}

", "partials/theme-variables.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\theme-variables.html.twig");
    }
}
