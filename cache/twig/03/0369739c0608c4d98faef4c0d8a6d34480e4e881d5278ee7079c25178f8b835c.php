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

/* partials/favicon.html.twig */
class __TwigTemplate_c971389eecf67b47bfdaf6f4174d7219126a4c96c795510ab5fec312b3758891 extends \Twig\Template
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
        $context["favicon_path"] = ((($context["favicon_file"] ?? null)) ? ($this->getAttribute(twig_first($this->env, ($context["favicon_file"] ?? null)), "path", [])) : ("theme://images/favicon.png"));
        // line 2
        echo "<link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_mime_type')->getCallable(), [($context["favicon_path"] ?? null)]), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(($context["favicon_path"] ?? null)), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "partials/favicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set favicon_path = favicon_file ? (favicon_file|first).path : 'theme://images/favicon.png' %}
<link rel=\"icon\" type=\"{{ get_mime_type(favicon_path) }}\" href=\"{{ url(favicon_path) }}\"/>
", "partials/favicon.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\favicon.html.twig");
    }
}
