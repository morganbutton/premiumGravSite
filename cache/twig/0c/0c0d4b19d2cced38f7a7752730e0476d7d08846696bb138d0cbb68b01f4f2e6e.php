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

/* partials/media-list-wrapper.html.twig */
class __TwigTemplate_c55d2e57d92dadddd1f6d515bb704fc7c7cbbd1666df7151941e82cb64cde1ca extends \Twig\Template
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
        echo "<div class=\"grid media-container ";
        if (($context["is_modal"] ?? null)) {
            echo "in-modal";
        }
        echo "\">
    ";
        // line 2
        $context["default_site_lang"] = twig_first($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "system", []), "languages", [])));
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["route"] ?? null)) {
            // line 5
            echo "        ";
            $this->loadTemplate("partials/media-list-wrapper__sidebar.html.twig", "partials/media-list-wrapper.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if (($context["is_modal"] ?? null)) {
            // line 9
            echo "        <div class=\"thumbs-list-container block size-3-4\">
            ";
            // line 10
            $this->loadTemplate("partials/media-list-wrapper__list__filters.html.twig", "partials/media-list-wrapper.html.twig", 10)->display($context);
            // line 11
            echo "            <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

            <div class=\"mediapicker-scroll\">
                ";
            // line 14
            $this->loadTemplate("partials/media-list-wrapper__list.html.twig", "partials/media-list-wrapper.html.twig", 14)->display(twig_array_merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
            // line 15
            echo "            </div>

            <input name=\"thumb-size\" class=\"media-range\" type=\"range\" min=\"50\" max=\"250\" value=\"100\" />
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"thumbs-list-container block ";
            if ( !($context["route"] ?? null)) {
                echo "size-2-3";
            }
            echo " \">
            ";
            // line 21
            if ( !($context["route"] ?? null)) {
                // line 22
                echo "                ";
                $this->loadTemplate("partials/media-list-wrapper__list__filters.html.twig", "partials/media-list-wrapper.html.twig", 22)->display($context);
                // line 23
                echo "                <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

                ";
                // line 25
                $this->loadTemplate("partials/media-list-wrapper__list.html.twig", "partials/media-list-wrapper.html.twig", 25)->display(twig_array_merge($context, ["is_modal" => ($context["is_modal"] ?? null)]));
                // line 26
                echo "
            ";
            } else {
                // line 28
                echo "                ";
                $this->loadTemplate("partials/media-list-wrapper__details.html.twig", "partials/media-list-wrapper.html.twig", 28)->display($context);
                // line 29
                echo "            ";
            }
            // line 30
            echo "        </div>
    ";
        }
        // line 32
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  102 => 30,  99 => 29,  96 => 28,  92 => 26,  90 => 25,  86 => 23,  83 => 22,  81 => 21,  74 => 20,  67 => 15,  65 => 14,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  42 => 4,  39 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"grid media-container {% if is_modal %}in-modal{% endif %}\">
    {% set default_site_lang = grav.config.system.languages|first|first %}

    {% if not route %}
        {% include 'partials/media-list-wrapper__sidebar.html.twig' %}
    {% endif %}

    {% if is_modal %}
        <div class=\"thumbs-list-container block size-3-4\">
            {% include 'partials/media-list-wrapper__list__filters.html.twig' %}
            <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

            <div class=\"mediapicker-scroll\">
                {% include 'partials/media-list-wrapper__list.html.twig' with { is_modal: is_modal } %}
            </div>

            <input name=\"thumb-size\" class=\"media-range\" type=\"range\" min=\"50\" max=\"250\" value=\"100\" />
        </div>
    {% else %}
        <div class=\"thumbs-list-container block {% if not route %}size-2-3{% endif %} \">
            {% if not route %}
                {% include 'partials/media-list-wrapper__list__filters.html.twig' %}
                <h5 class=\"media-list-title\"><span class=\"page-indicator\">All Pages</span> <a class=\"hidden js__reset-pages-filter\" href=\"#\"><i class=\"fa fa-fw fa-times\"></i></a></h5>

                {% include 'partials/media-list-wrapper__list.html.twig' with { is_modal: is_modal } %}

            {% else %}
                {% include 'partials/media-list-wrapper__details.html.twig' %}
            {% endif %}
        </div>
    {% endif %}
</div>", "partials/media-list-wrapper.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\media-list-wrapper.html.twig");
    }
}
