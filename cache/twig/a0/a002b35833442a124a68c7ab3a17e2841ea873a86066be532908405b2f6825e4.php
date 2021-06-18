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

/* license-manager.html.twig */
class __TwigTemplate_cb1e16e1fa12d408d07c27f725f62890e3335a25b6fec5668ac3832e18522375 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'titlebar' => [$this, 'block_titlebar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["slug"] = $this->getAttribute(($context["uri"] ?? null), "basename", []);
        // line 4
        $context["base_route"] = ($context["location"] ?? null);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "license-manager.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 7
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  ";
        // line 8
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => "[data-grav-array-name=\"data[licenses]\"] [name^=\"data[licenses]\"] { font-family: monospace; font-size: 1.1rem; }"], "method");
    }

    // line 11
    public function block_titlebar($context, array $blocks = [])
    {
        // line 12
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"importLicenses\" form=\"blueprints\"><i class=\"fa fa-upload\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_LICENSE_MANAGER.IMPORT"), "html", null, true);
        echo "</button>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"exportLicenses\" form=\"blueprints\"><i class=\"fa fa-download\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_LICENSE_MANAGER.EXPORT"), "html", null, true);
        echo "</button>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"saveLicenses\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "</button>
    </div>
    <h1><i class=\"fa fa-fw fa-key\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_LICENSE_MANAGER.TITLE"), "html", null, true);
        echo "</h1>
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "license-manager.html.twig", 22)->display(twig_array_merge($context, ["data" => ($context["license_data"] ?? null), "blueprints" => $this->getAttribute($this->getAttribute(($context["license_data"] ?? null), "blueprints", []), "init", [], "method")]));
        // line 23
        echo "
    <h1>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_LICENSE_MANAGER.IMPORT_TITLE"), "html", null, true);
        echo "</h1>

    <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "/license-manager/task:importLicenses\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-section\">
            <div class=\"form-field grid\">
                <input type=\"file\" class=\"medium\" name=\"uploaded_file\" id=\"uploaded_file\" required accept=\"application/x-yaml,text/yaml,.yaml\">
                <input type=\"submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_LICENSE_MANAGER.IMPORT"), "html", null, true);
        echo "\" name=\"submit\" class=\"button\">
                <input type=\"hidden\" name=\"task\" value=\"importLicenses\" />

                ";
        // line 33
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
            </div>
        </div>

    </form>

    <h1>Products Installation State</h1>

    <style>
        .status-row {
          margin: 0 1.5rem;
          padding: 0.5rem;
          display: flex;
          align-items: center;
        }

        a.status-row {
          font-weight: bold;
        }

        .icon {
          font-size: 150%;
          margin-right: 0.5rem;
        }

        .row__success {
          color: #27AE60;
        }

        .row__info {
          color: #2980B9;
        }

        .row__warning {
          color: #F39C12 !important;
        }

        .row__error {
          color: #C0392B;
        }
    </style>

    <div class=\"block\">
        ";
        // line 76
        $context["plugins"] = ["remote" => $this->getAttribute(($context["admin"] ?? null), "plugins", [0 => false], "method"), "local" => $this->getAttribute(($context["admin"] ?? null), "plugins", [0 => true], "method")];
        // line 77
        echo "        ";
        $context["themes"] = ["remote" => $this->getAttribute(($context["admin"] ?? null), "themes", [0 => false], "method"), "local" => $this->getAttribute(($context["admin"] ?? null), "themes", [0 => true], "method")];
        // line 78
        echo "
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["license_data"] ?? null), "toArray", []), "licenses", []));
        foreach ($context['_seq'] as $context["slug"] => $context["license"]) {
            // line 80
            echo "            ";
            $context["isTheme"] = ($this->getAttribute($this->getAttribute(($context["themes"] ?? null), "remote", []), $context["slug"]) || $this->getAttribute($this->getAttribute(($context["themes"] ?? null), "local", []), $context["slug"]));
            // line 81
            echo "            ";
            $context["isPlugin"] = ($this->getAttribute($this->getAttribute(($context["plugins"] ?? null), "remote", []), $context["slug"]) || $this->getAttribute($this->getAttribute(($context["plugins"] ?? null), "local", []), $context["slug"]));
            // line 82
            echo "            ";
            $context["label"] = ((($context["isTheme"] ?? null)) ? ("theme") : ("plugin"));
            // line 83
            echo "
            ";
            // line 84
            $context["data"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", [0 => (((($context["isTheme"] ?? null)) ? ("themes/") : ("plugins/")) . $context["slug"])], "method"), "toArray", []);
            // line 85
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->dump($this->env, $context, ($context["data"] ?? null)), "html", null, true);
            echo "



            ";
            // line 89
            if ((($context["data"] ?? null) == null)) {
                // line 90
                echo "                <a class=\"status-row row__info\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\" data-";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "-action=\"start-package-installation\">
                    <i class=\"icon  fa fa-plus\"></i> ";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                </a>
            ";
            } elseif (($this->getAttribute(            // line 93
($context["data"] ?? null), "enabled", []) == true)) {
                // line 94
                echo "                <div class=\"status-row row__success\">
                    <i class=\"icon  fa fa-check\"></i> ";
                // line 95
                echo twig_escape_filter($this->env, ucwords(($context["label"] ?? null)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo " is installed and enabled
                </div>
            ";
            } elseif (($this->getAttribute(            // line 97
($context["data"] ?? null), "enabled", []) == false)) {
                // line 98
                echo "                <div class=\"status-row row__warning\">
                    <i class=\"icon  fa fa-close\"></i> ";
                // line 99
                echo twig_escape_filter($this->env, ucwords(($context["label"] ?? null)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo " is installed but not enabled
                </div>
            ";
            } else {
                // line 102
                echo "                <div class=\"status-row row__error\">
                    <i class=\"icon  fa fa-error\"></i> ";
                // line 103
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo " not found in GPM or GPM is out-of-date.
                </div>
            ";
            }
            // line 106
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "    </div>
    ";
        // line 109
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "license-manager.html.twig", 109)->display($context);
        // line 110
        echo "  ";
        $this->loadTemplate("partials/modal-add-package.html.twig", "license-manager.html.twig", 110)->display(twig_array_merge($context, ["type" => "plugin"]));
    }

    public function getTemplateName()
    {
        return "license-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 110,  258 => 109,  255 => 108,  248 => 106,  242 => 103,  239 => 102,  231 => 99,  228 => 98,  226 => 97,  219 => 95,  216 => 94,  214 => 93,  205 => 91,  198 => 90,  196 => 89,  188 => 85,  186 => 84,  183 => 83,  180 => 82,  177 => 81,  174 => 80,  170 => 79,  167 => 78,  164 => 77,  162 => 76,  116 => 33,  110 => 30,  103 => 26,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  83 => 18,  78 => 16,  74 => 15,  70 => 14,  64 => 13,  61 => 12,  58 => 11,  54 => 8,  49 => 7,  46 => 6,  41 => 1,  39 => 4,  37 => 3,  31 => 1,);
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

{% set slug = uri.basename %}
{% set base_route = location %}

{% block stylesheets %}
  {{ parent() }}
  {% do assets.addInlineCss('[data-grav-array-name=\"data[licenses]\"] [name^=\"data[licenses]\"] { font-family: monospace; font-size: 1.1rem; }') %}
{% endblock %}

{% block titlebar %}
    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"importLicenses\" form=\"blueprints\"><i class=\"fa fa-upload\"></i> {{ \"PLUGIN_LICENSE_MANAGER.IMPORT\"|tu }}</button>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"exportLicenses\" form=\"blueprints\"><i class=\"fa fa-download\"></i> {{ \"PLUGIN_LICENSE_MANAGER.EXPORT\"|tu }}</button>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"saveLicenses\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
    </div>
    <h1><i class=\"fa fa-fw fa-key\"></i> {{ \"PLUGIN_LICENSE_MANAGER.TITLE\"|tu }}</h1>
{% endblock %}

{% block content %}
    {% include 'partials/blueprints.html.twig' with { data: license_data, blueprints: license_data.blueprints.init() } %}

    <h1>{{ \"PLUGIN_LICENSE_MANAGER.IMPORT_TITLE\"|tu }}</h1>

    <form action=\"{{ base_url_relative }}/license-manager/task:importLicenses\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-section\">
            <div class=\"form-field grid\">
                <input type=\"file\" class=\"medium\" name=\"uploaded_file\" id=\"uploaded_file\" required accept=\"application/x-yaml,text/yaml,.yaml\">
                <input type=\"submit\" value=\"{{ \"PLUGIN_LICENSE_MANAGER.IMPORT\"|tu }}\" name=\"submit\" class=\"button\">
                <input type=\"hidden\" name=\"task\" value=\"importLicenses\" />

                {{ nonce_field('admin-form', 'admin-nonce')|raw }}
            </div>
        </div>

    </form>

    <h1>Products Installation State</h1>

    <style>
        .status-row {
          margin: 0 1.5rem;
          padding: 0.5rem;
          display: flex;
          align-items: center;
        }

        a.status-row {
          font-weight: bold;
        }

        .icon {
          font-size: 150%;
          margin-right: 0.5rem;
        }

        .row__success {
          color: #27AE60;
        }

        .row__info {
          color: #2980B9;
        }

        .row__warning {
          color: #F39C12 !important;
        }

        .row__error {
          color: #C0392B;
        }
    </style>

    <div class=\"block\">
        {% set plugins = { remote: admin.plugins(false), local: admin.plugins(true) } %}
        {% set themes = { remote: admin.themes(false), local: admin.themes(true) } %}

        {% for slug, license in license_data.toArray.licenses %}
            {% set isTheme = attribute(themes.remote, slug) or attribute(themes.local, slug) %}
            {% set isPlugin = attribute(plugins.remote, slug) or attribute(plugins.local, slug) %}
            {% set label = isTheme ? 'theme' : 'plugin' %}

            {% set data = admin.data((isTheme ? 'themes/' : 'plugins/') ~ slug).toArray %}
            {{ dump(data) }}



            {% if data == null %}
                <a class=\"status-row row__info\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ slug }}\" data-{{ label }}-action=\"start-package-installation\">
                    <i class=\"icon  fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL\"|tu }} {{ slug }} {{ label }}
                </a>
            {% elseif data.enabled == true %}
                <div class=\"status-row row__success\">
                    <i class=\"icon  fa fa-check\"></i> {{ label|ucwords }} {{ slug }} is installed and enabled
                </div>
            {% elseif data.enabled == false %}
                <div class=\"status-row row__warning\">
                    <i class=\"icon  fa fa-close\"></i> {{ label|ucwords }} {{ slug }} is installed but not enabled
                </div>
            {% else %}
                <div class=\"status-row row__error\">
                    <i class=\"icon  fa fa-error\"></i> {{ slug }} not found in GPM or GPM is out-of-date.
                </div>
            {% endif %}

        {% endfor %}
    </div>
    {% include 'partials/modal-changes-detected.html.twig' %}
  {% include 'partials/modal-add-package.html.twig' with { type: 'plugin' } %}
{% endblock %}
", "license-manager.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\license-manager\\admin\\templates\\license-manager.html.twig");
    }
}
