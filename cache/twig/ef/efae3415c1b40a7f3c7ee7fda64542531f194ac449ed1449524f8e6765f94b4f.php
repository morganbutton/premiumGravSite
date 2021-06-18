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

/* partials/spinning-wheel.html.twig */
class __TwigTemplate_816180937f8999d6818357cc50d3f63e2e7552ddb5452c2960a78804fc15197b extends \Twig\Template
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
        echo "<div class=\"spinning-wheel\" style=\"display: none\">
\t";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOADING"));
        echo " <i class=\"fa fa-spinner fa-spin\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/spinning-wheel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"spinning-wheel\" style=\"display: none\">
\t{{ \"PLUGIN_ADMIN.LOADING\"|tu|e }} <i class=\"fa fa-spinner fa-spin\"></i>
</div>
", "partials/spinning-wheel.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\spinning-wheel.html.twig");
    }
}
