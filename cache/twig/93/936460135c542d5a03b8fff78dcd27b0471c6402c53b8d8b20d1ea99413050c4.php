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

/* forms/fields/page-exists/page-exists.html.twig */
class __TwigTemplate_50ccef603b1dded9c84ed479dfff01a306ed1ea44967bbd817604ac13b351140 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/page-exists/page-exists.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        echo "
  ";
        // line 5
        $context["msg"] = $this->getAttribute(($context["field"] ?? null), "error_msg", []);
        // line 6
        echo "  ";
        $context["color"] = "#999";
        // line 7
        echo "  ";
        $context["font"] = "white";
        // line 8
        echo "  ";
        $context["overlay"] = false;
        // line 9
        echo "  ";
        $context["page_route"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, $this->getAttribute(($context["field"] ?? null), "page_field", []));
        // line 10
        echo "  ";
        $context["found_page"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", []), "find", [0 => ($context["page_route"] ?? null)], "method");
        // line 11
        echo "
  ";
        // line 12
        if (call_user_func_array($this->env->getFunction('page_exists')->getCallable(), [($context["field"] ?? null)])) {
            // line 13
            echo "    ";
            $context["msg"] = $this->getAttribute(($context["field"] ?? null), "success_msg", []);
            // line 14
            echo "    ";
            $context["color"] = "green";
            // line 15
            echo "    ";
            $context["font"] = "white";
            // line 16
            echo "    ";
            $context["overlay"] = true;
            // line 17
            echo "  ";
        }
        // line 18
        echo "
  <div style=\"border: 2px solid ";
        // line 19
        echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
        echo ";\">
      <div style=\"background-color: ";
        // line 20
        echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
        echo ";color: ";
        echo twig_escape_filter($this->env, ($context["font"] ?? null), "html", null, true);
        echo ";padding: 6px 1.5rem;\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["msg"] ?? null)), "html", null, true);
        echo "
      </div>
      <div style=\"position:relative;display:grid;padding:10px 0;\">
        ";
        // line 24
        if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
            // line 25
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 29
            echo "            ";
            $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/page-exists/page-exists.html.twig", 29)->display(twig_array_merge($context, ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "fields" => $this->getAttribute(($context["field"] ?? null), "fields", [])]));
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
            // line 33
            echo "        </div>
        ";
        }
        // line 35
        echo "        ";
        if (($context["overlay"] ?? null)) {
            // line 36
            echo "          <div style=\"position: absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.2);z-index:2;\"></div>
        ";
        }
        // line 38
        echo "      </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/page-exists/page-exists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 38,  132 => 36,  129 => 35,  125 => 33,  123 => 32,  120 => 31,  117 => 30,  114 => 29,  112 => 28,  109 => 27,  103 => 25,  101 => 24,  95 => 21,  89 => 20,  85 => 19,  82 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
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

{% block field %}

  {% set msg = field.error_msg %}
  {% set color = '#999' %}
  {% set font = 'white' %}
  {% set overlay = false %}
  {% set page_route = theme_var(field.page_field) %}
  {% set found_page = admin.page.find(page_route) %}

  {% if page_exists(field) %}
    {% set msg = field.success_msg %}
    {% set color = 'green' %}
    {% set font = 'white' %}
    {% set overlay = true %}
  {% endif %}

  <div style=\"border: 2px solid {{ color }};\">
      <div style=\"background-color: {{ color }};color: {{ font }};padding: 6px 1.5rem;\">
        {{ msg|tu }}
      </div>
      <div style=\"position:relative;display:grid;padding:10px 0;\">
        {% if field.classes %}
        <div class=\"{{ field.classes }}\">
        {% endif %}

        {% if field.fields %}
            {% include 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}
        {% endif %}

        {% if field.classes %}
        </div>
        {% endif %}
        {% if overlay %}
          <div style=\"position: absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.2);z-index:2;\"></div>
        {% endif %}
      </div>
  </div>
{% endblock %}", "forms/fields/page-exists/page-exists.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\forms\\fields\\page-exists\\page-exists.html.twig");
    }
}
