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

/* forms/fields/display/display.html.twig */
class __TwigTemplate_3a45c8dc621b7d004ebfcb139dcf0ce82cd47fa83bc4256387b1a51de3234ff3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        if ($this->getAttribute(($context["field"] ?? null), "file", [])) {
            // line 4
            $context["content"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->readFileFunc($this->getAttribute(($context["field"] ?? null), "file", []));
        } else {
            // line 6
            $context["content"] = $this->getAttribute(($context["field"] ?? null), "content", []);
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/display/display.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_input($context, array $blocks = [])
    {
        // line 10
        echo "    <div class=\"form-display-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        echo ">
        ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
            // line 12
            echo "            ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["content"] ?? null)));
            echo "
        ";
        } else {
            // line 14
            echo "            ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["content"] ?? null));
            echo "
        ";
        }
        // line 16
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/display/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  72 => 14,  66 => 12,  64 => 11,  51 => 10,  48 => 9,  43 => 1,  40 => 6,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% if field.file %}
    {% set content = read_file(field.file) %}
{% else %}
    {% set content = field.content %}
{% endif %}

{% block input %}
    <div class=\"form-display-wrapper {{ field.size }} {{ field.classes }}\" {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}>
        {% if field.markdown %}
            {{ content|t|markdown|raw }}
        {% else %}
            {{ content|t|raw }}
        {% endif %}
    </div>
{% endblock %}
", "forms/fields/display/display.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\form\\templates\\forms\\fields\\display\\display.html.twig");
    }
}
