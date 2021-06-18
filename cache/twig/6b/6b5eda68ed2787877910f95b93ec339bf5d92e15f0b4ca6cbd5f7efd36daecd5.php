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

/* forms/fields/mediapicker/mediapicker.html.twig */
class __TwigTemplate_d7d5060ba38fda466cb19fa191e429a8899de56d54e7a31ebe72d2c9ae2e8d4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'contents' => [$this, 'block_contents'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/text/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 6
        $context["unique_identifier"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->randomStringFunc();
        // line 1
        $this->parent = $this->loadTemplate("forms/fields/text/text.html.twig", "forms/fields/mediapicker/mediapicker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 9
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
data-mediapicker-modal-trigger
data-grav-mediapicker-unique-identifier=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["unique_identifier"] ?? null), "html", null, true);
        echo "\"
";
    }

    // line 15
    public function block_contents($context, array $blocks = [])
    {
        // line 16
        $this->displayParentBlock("contents", $context, $blocks);
        echo "
<div class=\"remodal remodal-mediapicker\" data-remodal-mediapicker data-remodal-unique-identifier=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["unique_identifier"] ?? null), "html", null, true);
        echo "\" data-remodal-options=\"hashTracking: false\">
    ";
        // line 18
        $this->loadTemplate("partials/media-list-wrapper.html.twig", "forms/fields/mediapicker/mediapicker.html.twig", 18)->display(twig_array_merge($context, ["is_modal" => true]));
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/mediapicker/mediapicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  72 => 18,  68 => 17,  64 => 16,  61 => 15,  55 => 11,  50 => 9,  47 => 8,  42 => 1,  40 => 6,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/fields/text/text.html.twig\" %}

{% set originalValue = value %}
{% set value = (value is null ? field.default : value) %}

{% set unique_identifier = random_string() %}

{% block global_attributes %}
{{ parent() }}
data-mediapicker-modal-trigger
data-grav-mediapicker-unique-identifier=\"{{ unique_identifier }}\"
{% endblock %}


{% block contents %}
{{ parent() }}
<div class=\"remodal remodal-mediapicker\" data-remodal-mediapicker data-remodal-unique-identifier=\"{{ unique_identifier }}\" data-remodal-options=\"hashTracking: false\">
    {% include 'partials/media-list-wrapper.html.twig' with { is_modal: true } %}
</div>
{% endblock %}
", "forms/fields/mediapicker/mediapicker.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\mediapicker\\mediapicker.html.twig");
    }
}
