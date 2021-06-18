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

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_a77b1adae35daa902c20aa19a81c51030e2a15a0894ee261f2226b1812c53975 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        if ( !($context["nextgenEditorOptions"] ?? null)) {
            // line 4
            $context["nextgenEditorOptions"] = twig_array_merge(["options" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "nextgen-editor", [], "array"), "options", [])], (($this->getAttribute(($context["field"] ?? null), "nextgen-editor", [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "nextgen-editor", [], "array"), [])) : ([])));
            // line 5
            $context["transformationsOptions"] = $this->getAttribute($this->getAttribute(($context["nextgenEditorOptions"] ?? null), "options", []), "transformations", []);
            // line 6
            $context["extraMediaProviders"] = $this->getAttribute($this->getAttribute(($context["nextgenEditorOptions"] ?? null), "options", []), "extraMediaProviders", []);
            // line 8
            $context["transformationGroups"] = [];
            // line 9
            if ($this->getAttribute(($context["transformationsOptions"] ?? null), "typography", [])) {
                // line 10
                $context["transformationGroups"] = twig_array_merge(($context["transformationGroups"] ?? null), [0 => "typography"]);
            }
            // line 12
            if ($this->getAttribute(($context["transformationsOptions"] ?? null), "quotes", [])) {
                // line 13
                $context["transformationGroups"] = twig_array_merge(($context["transformationGroups"] ?? null), [0 => "quotes"]);
            }
            // line 15
            if ($this->getAttribute(($context["transformationsOptions"] ?? null), "symbols", [])) {
                // line 16
                $context["transformationGroups"] = twig_array_merge(($context["transformationGroups"] ?? null), [0 => "symbols"]);
            }
            // line 18
            if ($this->getAttribute(($context["transformationsOptions"] ?? null), "mathematical", [])) {
                // line 19
                $context["transformationGroups"] = twig_array_merge(($context["transformationGroups"] ?? null), [0 => "mathematical"]);
            }
            // line 21
            $context["customTransformationGroups"] = [];
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["transformationsOptions"] ?? null), "custom", []));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 24
                $context["customTransformationGroups"] = twig_array_merge(($context["customTransformationGroups"] ?? null), [0 => ["from" => $context["key"], "to" => $context["value"]]]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            $context["transformations"] = ["typing" => ["transformations" => ["include" =>             // line 30
($context["transformationGroups"] ?? null), "extra" =>             // line 31
($context["customTransformationGroups"] ?? null)]]];
            // line 36
            $context["mediaProviders"] = [];
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extraMediaProviders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                // line 38
                $context["mediaProviders"] = twig_array_merge(($context["mediaProviders"] ?? null), [0 => $context["provider"]]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            $context["providers"] = ["mediaEmbed" => ["extraProviders" =>             // line 43
($context["mediaProviders"] ?? null)]];
            // line 47
            $context["nextgenEditorOptions"] = twig_array_merge(($context["nextgenEditorOptions"] ?? null), ["options" => twig_array_merge($this->getAttribute(($context["nextgenEditorOptions"] ?? null), "options", []), ["nextgenEditor" => twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute(($context["nextgenEditorOptions"] ?? null), "options", []), "nextgenEditor", []), ($context["transformations"] ?? null)), ($context["providers"] ?? null))])]);
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/markdown/markdown.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 50
    public function block_field($context, array $blocks = [])
    {
        // line 51
        echo "    <div class=\"form-field ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "classes", []), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"form-label";
        // line 52
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
            <label>
                ";
        // line 54
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 55
            echo "                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", []))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 57
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "
                ";
        }
        // line 59
        echo "                ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
            </label>
        </div>
        <div class=\"form-data nextgen-editor\">
            <div
                    class=\"nextgen-editor-form ";
        // line 64
        ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-textarea-wrapper")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo " loading\"
                    ";
        // line 65
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["nextgenEditorOptions"] ?? null), "options", []), "nextgenEditor", []), "height", [])) {
            echo "style=\"height: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["nextgenEditorOptions"] ?? null), "options", []), "nextgenEditor", []), "height", []), "html", null, true);
            echo "px\"";
        }
        // line 66
        echo "            >
                ";
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["nextgenEditorOptions"] ?? null), "options", []), "nextgenEditor", []), "height", [])) {
            // line 68
            echo "                    <style>.nextgen-editor-form .ck-editor__editable_inline {
                            height: ";
            // line 69
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["nextgenEditorOptions"] ?? null), "options", []), "nextgenEditor", []), "height", []) - 38), "html", null, true);
            echo "px
                        }</style>
                ";
        }
        // line 72
        echo "                ";
        // line 73
        echo "                <div class=\"spinner nextgen-editor-loader\">
                    <div class=\"double-bounce1\"></div>
                    <div class=\"double-bounce2\"></div>
                </div>
                <textarea
                ";
        // line 79
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
                data-nextgen-editor=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["nextgenEditorOptions"] ?? null)), "html_attr");
        echo "\"
                ";
        // line 82
        echo "                        ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 100
        echo "                >";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html");
        echo "</textarea>
            </div>
        </div>
    </div>

    ";
        // line 105
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "nextgen-editor", [], "array"), "loadedTemplate", [])) {
            // line 106
            echo "        ";
            $this->getAttribute(($context["config"] ?? null), "set", [0 => "plugins.nextgen-editor.loadedTemplate", 1 => true], "method");
            // line 107
            echo "        <div id=\"ck-media-picker\" data-page=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", []), "route", []), "html", null, true);
            echo "\">
            ";
            // line 108
            $this->loadTemplate("forms/fields/mediapicker/mediapicker.html.twig", "forms/fields/markdown/markdown.html.twig", 108)->display(twig_array_merge($context, ["value" => "", "route" => "", "pages" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "admin", [], "array"), "enablePages", [], "method"), "root", [], "method"), "field" => ["type" => "mediapicker", "name" => "ck-media-picker"]]));
            // line 109
            echo "        </div>
        <div id=\"page-picker-button-wrapper\" class=\"parents-wrapper\">
            <div id=\"page-picker-button\" data-parents=\"data[page-picker]\" data-remodal-target=\"page-picker\"></div>
            <input type=\"hidden\" name=\"data[page-picker]\" data-field-name=\"route\">
        </div>
        <div id=\"page-picker-modal\" class=\"remodal parents-container\" data-remodal-id=\"page-picker\"
             data-remodal-options=\"hashTracking: false, stack: true\">
            <h1>Page Picker</h1>
            <div class=\"grav-loading\">
                <div class=\"grav-loader\">Loading...</div>
            </div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i
                            class=\"fa fa-fw fa-close\"></i> ";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
            echo "</a>
                <a class=\"button\" data-parents-select href=\"#\" id=\"page-picker-modal-submit\"><i
                            class=\"fa fa-fw fa-check\"></i> ";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
            echo "</a>
            </div>
        </div>
    ";
        }
    }

    // line 82
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 83
        echo "                            class=\"";
        echo twig_escape_filter($this->env, ($context["form_field_textarea_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\"
                            ";
        // line 84
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 85
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 86
        echo "                            ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 87
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 88
        echo "                            ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 89
        echo "                            ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 90
        echo "                            ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 91
        echo "                            ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", []), [0 => "on", 1 => "off"])) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 92
        echo "                            ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 93
        echo "                            ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []), "html", null, true);
            echo "\"";
        }
        // line 94
        echo "                            ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            }
            echo "\"";
        }
        // line 95
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "rows", [], "any", true, true)) {
            echo "rows=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "rows", []), "html", null, true);
            echo "\"";
        }
        // line 96
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "cols", [], "any", true, true)) {
            echo "cols=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "cols", []), "html", null, true);
            echo "\"";
        }
        // line 97
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "minlength", [], "any", true, true)) {
            echo "minlength=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "minlength", []), "html", null, true);
            echo "\"";
        }
        // line 98
        echo "                            ";
        if ($this->getAttribute(($context["field"] ?? null), "maxlength", [], "any", true, true)) {
            echo "maxlength=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "maxlength", []), "html", null, true);
            echo "\"";
        }
        // line 99
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 99,  346 => 98,  339 => 97,  332 => 96,  325 => 95,  314 => 94,  307 => 93,  302 => 92,  295 => 91,  290 => 90,  285 => 89,  280 => 88,  273 => 87,  268 => 86,  261 => 85,  255 => 84,  248 => 83,  245 => 82,  236 => 125,  231 => 123,  215 => 109,  213 => 108,  208 => 107,  205 => 106,  203 => 105,  194 => 100,  191 => 82,  187 => 80,  182 => 79,  175 => 73,  173 => 72,  167 => 69,  164 => 68,  162 => 67,  159 => 66,  153 => 65,  145 => 64,  136 => 59,  130 => 57,  122 => 55,  120 => 54,  113 => 52,  108 => 51,  105 => 50,  100 => 1,  97 => 47,  95 => 43,  94 => 41,  88 => 38,  84 => 37,  82 => 36,  80 => 31,  79 => 30,  78 => 27,  72 => 24,  68 => 23,  66 => 21,  63 => 19,  61 => 18,  58 => 16,  56 => 15,  53 => 13,  51 => 12,  48 => 10,  46 => 9,  44 => 8,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
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

{% if not nextgenEditorOptions %}
    {% set nextgenEditorOptions = {options: config.plugins['nextgen-editor'].options}|merge(field['nextgen-editor']|default({})) %}
    {% set transformationsOptions = nextgenEditorOptions.options.transformations %}
    {% set extraMediaProviders = nextgenEditorOptions.options.extraMediaProviders %}

    {% set transformationGroups = [] %}
    {% if transformationsOptions.typography %}
        {% set transformationGroups = transformationGroups|merge(['typography']) %}
    {% endif %}
    {% if transformationsOptions.quotes %}
        {% set transformationGroups = transformationGroups|merge(['quotes']) %}
    {% endif %}
    {% if transformationsOptions.symbols %}
        {% set transformationGroups = transformationGroups|merge(['symbols']) %}
    {% endif %}
    {% if transformationsOptions.mathematical %}
        {% set transformationGroups = transformationGroups|merge(['mathematical']) %}
    {% endif %}
    {% set customTransformationGroups = [] %}

    {% for key, value in transformationsOptions.custom %}
        {% set customTransformationGroups = customTransformationGroups|merge([{ from: key, to: value }]) %}
    {% endfor %}

    {% set transformations = {
        typing: {
            transformations: {
                include: transformationGroups,
                extra: customTransformationGroups
            }
        }
    } %}

    {% set mediaProviders = [] %}
    {% for provider in extraMediaProviders %}
        {% set mediaProviders = mediaProviders|merge([provider]) %}
    {% endfor %}

    {% set providers = {
        mediaEmbed: {
            extraProviders: mediaProviders
        }
    } %}

    {% set nextgenEditorOptions = nextgenEditorOptions|merge({ options: nextgenEditorOptions.options|merge({ nextgenEditor: nextgenEditorOptions.options.nextgenEditor|merge(transformations)|merge(providers) }) }) %}
{% endif %}

{% block field %}
    <div class=\"form-field {{ field.classes|default('') }}\">
        <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
            <label>
                {% if field.help %}
                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
                {% else %}
                    {{ field.label|tu }}
                {% endif %}
                {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
            </label>
        </div>
        <div class=\"form-data nextgen-editor\">
            <div
                    class=\"nextgen-editor-form {{ form_field_wrapper_classes ?: 'form-textarea-wrapper' }} {{ field.size }} {{ field.wrapper_classes }} loading\"
                    {% if nextgenEditorOptions.options.nextgenEditor.height %}style=\"height: {{ nextgenEditorOptions.options.nextgenEditor.height }}px\"{% endif %}
            >
                {% if nextgenEditorOptions.options.nextgenEditor.height %}
                    <style>.nextgen-editor-form .ck-editor__editable_inline {
                            height: {{ nextgenEditorOptions.options.nextgenEditor.height - 38 }}px
                        }</style>
                {% endif %}
                {# <img class=\"nextgen-editor-loader\" src=\"{{ url('plugin://nextgen-editor/admin/assets/loader.png', true) }}\"> #}
                <div class=\"spinner nextgen-editor-loader\">
                    <div class=\"double-bounce1\"></div>
                    <div class=\"double-bounce2\"></div>
                </div>
                <textarea
                {# required attribute structures #}
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                data-nextgen-editor=\"{{ nextgenEditorOptions | json_encode|e('html_attr') }}\"
                {# input attribute structures #}
                        {% block input_attributes %}
                            class=\"{{ form_field_textarea_classes }} {{ field.classes }}\"
                            {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                            {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                            {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                            {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                            {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                            {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                            {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                            {% if required %}required=\"required\"{% endif %}
                            {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                            {% if field.validate.message %}title=\"{% if grav.twig.twig.filters['tu'] is defined %}{{ field.validate.message|tu|e }}{% else %}{{ field.validate.message|t|e }}{% endif %}\"{% endif %}
                            {% if field.rows is defined %}rows=\"{{ field.rows }}\"{% endif %}
                            {% if field.cols is defined %}cols=\"{{ field.cols }}\"{% endif %}
                            {% if field.minlength is defined %}minlength=\"{{ field.minlength }}\"{% endif %}
                            {% if field.maxlength is defined %}maxlength=\"{{ field.maxlength }}\"{% endif %}
                        {% endblock %}
                >{{ value|e('html') }}</textarea>
            </div>
        </div>
    </div>

    {% if not config.plugins['nextgen-editor'].loadedTemplate %}
        {% do config.set('plugins.nextgen-editor.loadedTemplate', true) %}
        <div id=\"ck-media-picker\" data-page=\"{{ admin.page.route }}\">
            {% include \"forms/fields/mediapicker/mediapicker.html.twig\" with { value: '', route: '', pages: grav['admin'].enablePages().root(), field: { type: 'mediapicker', name: 'ck-media-picker' } } %}
        </div>
        <div id=\"page-picker-button-wrapper\" class=\"parents-wrapper\">
            <div id=\"page-picker-button\" data-parents=\"data[page-picker]\" data-remodal-target=\"page-picker\"></div>
            <input type=\"hidden\" name=\"data[page-picker]\" data-field-name=\"route\">
        </div>
        <div id=\"page-picker-modal\" class=\"remodal parents-container\" data-remodal-id=\"page-picker\"
             data-remodal-options=\"hashTracking: false, stack: true\">
            <h1>Page Picker</h1>
            <div class=\"grav-loading\">
                <div class=\"grav-loader\">Loading...</div>
            </div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i
                            class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-parents-select href=\"#\" id=\"page-picker-modal-submit\"><i
                            class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "forms/fields/markdown/markdown.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\plugins\\nextgen-editor\\admin\\templates\\forms\\fields\\markdown\\markdown.html.twig");
    }
}
