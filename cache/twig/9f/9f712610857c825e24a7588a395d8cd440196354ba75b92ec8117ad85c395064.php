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

/* partials/notices.html.twig */
class __TwigTemplate_2d13671b34db2f295467f28fb7aa4ea950688ae700f493c30003cac622f88686 extends \Twig\Template
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
        $context["colors"] = ["alert" => [0 => "bg-blue-700", 1 => "text-white"], "critical" => [0 => "bg-red-700", 1 => "text-white"], "note" => [0 => "bg-orange-300", 1 => "text-gray-900"], "success" => [0 => "bg-green-700", 1 => "text-white"]];
        // line 7
        echo "
";
        // line 8
        $context["is_homepage"] = ($this->getAttribute(($context["page"] ?? null), "route", []) == "/");
        // line 9
        $context["notices"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["theme_config"] ?? null), "notices_page_route", [])], "method"), "header", []), "notices", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["theme_config"] ?? null), "notices_page_route", [])], "method"), "header", []), "notices", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "notices", [])));
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 12
            echo "  ";
            if (($this->getAttribute($context["notice"], "enabled", []) &&  !($this->getAttribute($context["notice"], "only_homepage", []) &&  !($context["is_homepage"] ?? null)))) {
                // line 13
                echo "    <div class=\"relative ";
                echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["colors"] ?? null), $this->getAttribute($context["notice"], "type", []), [], "array")), "html", null, true);
                echo "\">
      <div class=\"max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8\">
        <div class=\"pr-16 sm:text-center sm:px-16\">
          <p class=\"font-medium ";
                // line 16
                echo twig_escape_filter($this->env, twig_last($this->env, $this->getAttribute(($context["colors"] ?? null), $this->getAttribute($context["notice"], "type", []), [], "array")), "html", null, true);
                echo "\">
            ";
                // line 17
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["notice"], "content", []), false);
                echo "
            ";
                // line 18
                if ($this->getAttribute($context["notice"], "learn_more_link", [])) {
                    // line 19
                    echo "              <span class=\"block sm:ml-2 sm:inline-block\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($context["notice"], "learn_more_link", [])), "html", null, true);
                    echo "\"
                                                             class=\"";
                    // line 20
                    echo twig_escape_filter($this->env, twig_last($this->env, $this->getAttribute(($context["colors"] ?? null), $this->getAttribute($context["notice"], "type", []), [], "array")), "html", null, true);
                    echo " font-bold underline\">Learn more →</a></span>
            ";
                }
                // line 22
                echo "          </p>
        </div>
      </div>
    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/notices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  71 => 20,  66 => 19,  64 => 18,  60 => 17,  56 => 16,  49 => 13,  46 => 12,  42 => 11,  39 => 10,  37 => 9,  35 => 8,  32 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set colors = {
  'alert': ['bg-blue-700', 'text-white'],
  'critical': ['bg-red-700', 'text-white'],
  'note': ['bg-orange-300', 'text-gray-900'],
  'success': ['bg-green-700', 'text-white'],
} %}

{% set is_homepage = page.route == '/' %}
{% set notices = page.find(theme_config.notices_page_route).header.notices ?: theme_config.notices %}

{% for notice in notices %}
  {% if notice.enabled and not (notice.only_homepage and not is_homepage) %}
    <div class=\"relative {{ colors[notice.type]|first }}\">
      <div class=\"max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8\">
        <div class=\"pr-16 sm:text-center sm:px-16\">
          <p class=\"font-medium {{ colors[notice.type]|last }}\">
            {{ notice.content|markdown(false) }}
            {% if notice.learn_more_link %}
              <span class=\"block sm:ml-2 sm:inline-block\"><a href=\"{{ url(notice.learn_more_link) }}\"
                                                             class=\"{{ colors[notice.type]|last }} font-bold underline\">Learn more →</a></span>
            {% endif %}
          </p>
        </div>
      </div>
    </div>
  {% endif %}
{% endfor %}", "partials/notices.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\partials\\notices.html.twig");
    }
}
