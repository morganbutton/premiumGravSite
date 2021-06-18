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

/* partials/register.html.twig */
class __TwigTemplate_3d50935ac5a6cdf5b48d1497dcd9ed622aca8e884cb1e1b3661ed5173e9b0a01 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'instructions' => [$this, 'block_instructions'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["scope"] = $this->getAttribute(($context["form"] ?? null), "scope", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partials/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        // line 5
        echo "<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-glow-shadow ";
        // line 6
        echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 7
        $this->loadTemplate("partials/login-logo.html.twig", "partials/register.html.twig", 7)->display($context);
        // line 8
        echo "
        ";
        // line 9
        $this->loadTemplate("partials/messages.html.twig", "partials/register.html.twig", 9)->display($context);
        // line 10
        echo "
        ";
        // line 11
        $this->displayBlock('instructions', $context, $blocks);
        // line 12
        echo "
        <form method=\"post\" action=\"\">
            <div class=\"padding\">
                ";
        // line 15
        $this->displayBlock('form', $context, $blocks);
        // line 16
        echo "                ";
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "partials/register.html.twig", 16)->display($context);
        // line 17
        echo "                ";
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "partials/register.html.twig", 17)->display($context);
        // line 18
        echo "                ";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc(((($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")) : ("form")), ((($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")) : ("form-nonce")));
        echo "
            </div>
        </form>
    </section>
</body>
";
    }

    // line 11
    public function block_instructions($context, array $blocks = [])
    {
    }

    // line 15
    public function block_form($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 15,  90 => 11,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  66 => 12,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  50 => 6,  47 => 5,  44 => 4,  39 => 1,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set scope = form.scope %}

{% block body %}
<body id=\"admin-login-wrapper\">
    <section id=\"admin-login\" class=\"default-glow-shadow {{ classes }}\">
        {% include 'partials/login-logo.html.twig' %}

        {% include 'partials/messages.html.twig' %}

        {% block instructions %}{% endblock %}

        <form method=\"post\" action=\"\">
            <div class=\"padding\">
                {% block form %}{% endblock %}
                {% include \"forms/fields/formname/formname.html.twig\" %}
                {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
                {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}
            </div>
        </form>
    </section>
</body>
{% endblock %}
", "partials/register.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\register.html.twig");
    }
}
