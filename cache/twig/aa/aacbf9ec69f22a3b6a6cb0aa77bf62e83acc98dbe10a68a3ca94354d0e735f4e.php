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

/* register.html.twig */
class __TwigTemplate_93d669beee96dc4367ed4535c24d5a76f72e8a1a69c68566fa6deff64e6f3760 extends \Twig\Template
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
        $this->loadTemplate("register.html.twig", "register.html.twig", 1, "1769233552")->display(twig_array_merge($context, ["title" => "Grav Register Admin User", "classes" => "wide"]));
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/register.html.twig' with {title:'Grav Register Admin User', classes:'wide'} %}

    {% block instructions %}
    <div class=\"instructions\">
        {{ page.content|raw }}
    </div>
    {% endblock %}

    {% block form %}
        {% for field_name,field in form.fields %}
            {% if field.type %}
                {% set field = field|merge({ name: field.name ?? field_name }) %}
                {% set value = form.value(field.name) %}
                <div class=\"wrapper-{{ field.name }}\">
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                </div>
            {% endif %}
        {% endfor %}

        <div class=\"form-actions primary-accent\">

            <button type=\"reset\" class=\"button secondary\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_CLEAR'|tu }}</button>
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"register\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_CREATE_USER'|tu }}</button>

        </div>

    {% endblock %}

{% endembed %}
", "register.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\admin\\themes\\grav\\templates\\register.html.twig");
    }
}


/* register.html.twig */
class __TwigTemplate_93d669beee96dc4367ed4535c24d5a76f72e8a1a69c68566fa6deff64e6f3760___1769233552 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'instructions' => [$this, 'block_instructions'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/register.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_instructions($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"instructions\">
        ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
    ";
    }

    // line 9
    public function block_form($context, array $blocks = [])
    {
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 11
            echo "            ";
            if ($this->getAttribute($context["field"], "type", [])) {
                // line 12
                echo "                ";
                $context["field"] = twig_array_merge($context["field"], ["name" => ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["field_name"]))]);
                // line 13
                echo "                ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 14
                echo "                <div class=\"wrapper-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", []), "html", null, true);
                echo "\">
                    ";
                // line 15
                $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "register.html.twig", 15)->display($context);
                // line 16
                echo "                </div>
            ";
            }
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
        <div class=\"form-actions primary-accent\">

            <button type=\"reset\" class=\"button secondary\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_CLEAR"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"register\"><i class=\"fa fa-sign-in\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_CREATE_USER"), "html", null, true);
        echo "</button>

        </div>

    ";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 23,  190 => 22,  185 => 19,  171 => 18,  167 => 16,  165 => 15,  160 => 14,  157 => 13,  154 => 12,  151 => 11,  133 => 10,  130 => 9,  123 => 5,  120 => 4,  117 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/register.html.twig' with {title:'Grav Register Admin User', classes:'wide'} %}

    {% block instructions %}
    <div class=\"instructions\">
        {{ page.content|raw }}
    </div>
    {% endblock %}

    {% block form %}
        {% for field_name,field in form.fields %}
            {% if field.type %}
                {% set field = field|merge({ name: field.name ?? field_name }) %}
                {% set value = form.value(field.name) %}
                <div class=\"wrapper-{{ field.name }}\">
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                </div>
            {% endif %}
        {% endfor %}

        <div class=\"form-actions primary-accent\">

            <button type=\"reset\" class=\"button secondary\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_CLEAR'|tu }}</button>
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"register\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_CREATE_USER'|tu }}</button>

        </div>

    {% endblock %}

{% endembed %}
", "register.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\admin\\themes\\grav\\templates\\register.html.twig");
    }
}
