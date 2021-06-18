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

/* partials/media-list-wrapper__sidebar.html.twig */
class __TwigTemplate_c136dc6c4b25bfc45de5d32ee61e3261404ec07a701aef548b048c0fd6048650 extends \Twig\Template
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
        // line 26
        echo "
";
        // line 27
        $context["macro"] = $this;
        // line 28
        echo "
<div class=\"pages-list-container clear block size-1-4\">
    <h5>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES"));
        echo "</h5>
    <div class=\"mediapicker-scroll\">
        <ul class=\"pages-list depth-0\">
            ";
        // line 33
        echo $context["macro"]->getloop(($context["pages"] ?? null), 0, $context);
        echo "
        </ul>
    </div>
</div>
";
    }

    // line 1
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 5
                echo "        <li class=\"page-item\" data-nav-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\">
            <div class=\"row\">
                <span ";
                // line 7
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 8
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", [0 => 0], "method"), "count", []) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "isModule", [])) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", [])) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", [])) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", [])) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>

                <span data-hint=\"";
                // line 11
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "routes", []), "default", [])) : ($this->getAttribute($context["p"], "route", []))), "html", null, true);
                echo "\" class=\"hint--bottom\">
                    <a data-page=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", []), "html", null, true);
                echo "\" class=\"js__page-link page-link\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
                echo "</a>
                </span>

                <span class=\"page-home\">";
                // line 15
                echo (($this->getAttribute($context["p"], "home", [])) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
            </div>
            ";
                // line 17
                if (($this->getAttribute($this->getAttribute($context["p"], "children", [], "method"), "count", []) > 0)) {
                    // line 18
                    echo "
                <ul class=\"depth-";
                    // line 19
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 20
                    echo $context["self"]->getloop($context["p"], (($context["depth"] ?? null) + 1), ($context["twig_vars"] ?? null));
                    echo "
                </ul>
            ";
                }
                // line 23
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper__sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 23,  122 => 20,  118 => 19,  115 => 18,  113 => 17,  108 => 15,  100 => 12,  96 => 11,  88 => 8,  84 => 7,  78 => 5,  74 => 4,  71 => 3,  68 => 2,  54 => 1,  45 => 33,  39 => 30,  35 => 28,  33 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page, depth, twig_vars) %}
    {% import _self as self %}

    {% for p in page.children() %}
        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row\">
                <span {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}} class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.isModule ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>

                <span data-hint=\"{{ p.header.routes.default ?: p.route }}\" class=\"hint--bottom\">
                    <a data-page=\"{{ p.route }}\" class=\"js__page-link page-link\" href=\"#\">{{ p.title }}</a>
                </span>

                <span class=\"page-home\">{{ p.home ? '<i class=\"fa fa-home\"></i>' }}</span>
            </div>
            {% if p.children().count > 0 %}

                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as macro %}

<div class=\"pages-list-container clear block size-1-4\">
    <h5>{{ \"PLUGIN_ADMIN.PAGES\"|tu|e }}</h5>
    <div class=\"mediapicker-scroll\">
        <ul class=\"pages-list depth-0\">
            {{ macro.loop(pages, 0, _context) }}
        </ul>
    </div>
</div>
", "partials/media-list-wrapper__sidebar.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\media-list-wrapper__sidebar.html.twig");
    }
}
