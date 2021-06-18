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

/* partials/media-list-wrapper__list.html.twig */
class __TwigTemplate_a394221243ee841d31dfaf7c79094c04e4483f6ca9a22e6e6445fbc144a5f452 extends \Twig\Template
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
        echo "<div id=\"admin-media\" class=\"files js__files card-row grid fixed-blocks pure-g\">
    ";
        // line 2
        if ( !($context["is_modal"] ?? null)) {
            // line 3
            echo "        ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("partials/media-list-wrapper__list__dropzone.html.twig", "partials/media-list-wrapper__list.html.twig", 3);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if (twig_test_empty($this->getAttribute(($context["admin"] ?? null), "files", []))) {
            // line 7
            echo "        <div class=\"empty-state\">
            ";
            // line 8
            if (($this->getAttribute(($context["uri"] ?? null), "param", [0 => "type"], "method") || $this->getAttribute(($context["uri"] ?? null), "param", [0 => "date"], "method"))) {
                // line 9
                echo "                <h2>Filtering by ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "param", [0 => "type"], "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "param", [0 => "date"], "method"), "html", null, true);
                echo "</h2>
            ";
            }
            // line 11
            echo "
            <h2>No media files found</h2>

            <p>You need to add media to a page in order to display it here.</p>
        </div>
    ";
        } else {
            // line 17
            echo "        ";
            $this->loadTemplate("media-list-content.html.twig", "partials/media-list-wrapper__list.html.twig", 17)->display(twig_array_merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
            echo " ";
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
</div>

";
        // line 23
        $this->loadTemplate("partials/spinning-wheel.html.twig", "partials/media-list-wrapper__list.html.twig", 23)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper__list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  67 => 11,  59 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  46 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"admin-media\" class=\"files js__files card-row grid fixed-blocks pure-g\">
    {% if not is_modal %}
        {% include 'partials/media-list-wrapper__list__dropzone.html.twig' ignore missing %}
    {% endif %}

    {% if admin.files is empty %}
        <div class=\"empty-state\">
            {% if (uri.param('type') or uri.param('date')) %}
                <h2>Filtering by {{ uri.param('type') }} {{ uri.param('date') }}</h2>
            {% endif %}

            <h2>No media files found</h2>

            <p>You need to add media to a page in order to display it here.</p>
        </div>
    {% else %}
        {% include 'media-list-content.html.twig' with { is_modal: is_modal } %} {# not a partial as used by AJAX #}
    {% endif %}

    {{ nonce_field('admin-form', 'admin-nonce')|raw }}
</div>

{% include 'partials/spinning-wheel.html.twig' %}
", "partials/media-list-wrapper__list.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\media-list-wrapper__list.html.twig");
    }
}
