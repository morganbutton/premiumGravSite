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

/* macros/macros.html.twig */
class __TwigTemplate_27f91119e42f506c6cb8fd24b7c7fcd24637005a5092f9b49a6e8a07ee1fae93 extends \Twig\Template
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
    }

    // line 1
    public function getnav_loop($__links__ = null, $__classes_config__ = null, $__alpine__ = null, $__svg__ = ["open" => "", "closed" => ""], ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "classes_config" => $__classes_config__,
            "alpine" => $__alpine__,
            "svg" => $__svg__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["macros"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 4
                echo "
    ";
                // line 5
                $context["default"] = $this->getAttribute(($context["classes_config"] ?? null), "default", []);
                // line 6
                echo "    ";
                $context["classes"] = (($this->getAttribute(($context["classes_config"] ?? null), ("level_" . $this->getAttribute($context["l"], "level", [])))) ? ($this->getAttribute(($context["classes_config"] ?? null), ("level_" . $this->getAttribute($context["l"], "level", [])))) : (($context["default"] ?? null)));
                // line 7
                echo "
    ";
                // line 8
                $context["a_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["classes"] ?? null), "a", []), $this->getAttribute(($context["default"] ?? null), "a", []));
                // line 9
                echo "    ";
                $context["ul_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["classes"] ?? null), "ul_classes", []), $this->getAttribute(($context["default"] ?? null), "ul", []));
                // line 10
                echo "    ";
                $context["icon_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute(($context["classes"] ?? null), "icon", []), $this->getAttribute(($context["default"] ?? null), "icon", []));
                // line 11
                echo "
    ";
                // line 12
                $context["li_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["classes"] ?? null), "li", []), "base", []), $this->getAttribute($this->getAttribute(($context["default"] ?? null), "li", []), "base", []));
                // line 13
                echo "    ";
                $context["li_active"] = call_user_func_array($this->env->getFunction('is_active_item')->getCallable(), [$context["l"]]);
                // line 14
                echo "    ";
                $context["li_highlight"] = ((($context["li_active"] ?? null)) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["classes"] ?? null), "li", []), "active", []), $this->getAttribute($this->getAttribute(($context["default"] ?? null), "li", []), "active", []))) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["classes"] ?? null), "li", []), "inactive", []), $this->getAttribute(($context["default"] ?? null), "inactive", []))));
                // line 15
                echo "    ";
                $context["has_children"] = ($this->getAttribute($context["l"], "links", []) > 0);
                // line 16
                echo "
    <li ";
                // line 17
                echo twig_replace_filter($this->getAttribute(($context["alpine"] ?? null), "parent", []), ["MENU_STATE" => ((($context["li_active"] ?? null)) ? ("true") : ("false"))]);
                echo "
            class=\"";
                // line 18
                echo twig_escape_filter($this->env, ($context["li_classes"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["li_highlight"] ?? null), "html", null, true);
                echo " ";
                echo ((($context["has_children"] ?? null)) ? ("has-submenu") : (""));
                echo "\">
      <div class=\"flex w-full h-full\">
        ";
                // line 20
                if ($this->getAttribute($context["l"], "routable", [])) {
                    // line 21
                    echo "          <a class=\"w-full ";
                    echo twig_escape_filter($this->env, ($context["a_classes"] ?? null), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "href", []), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["l"], "external", [])) {
                        echo "target=\"_blank\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "text", []));
                    echo "</a>
        ";
                } else {
                    // line 23
                    echo "          <span class=\"w-full ";
                    echo twig_escape_filter($this->env, ($context["a_classes"] ?? null), "html", null, true);
                    echo " cursor-pointer\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "text", []));
                    echo "</span>
        ";
                }
                // line 25
                if (($context["has_children"] ?? null)) {
                    // line 26
                    echo "<button ";
                    echo $this->getAttribute(($context["alpine"] ?? null), "button", []);
                    echo " class=\"focus:outline-none\" aria-label=\"Expand / collapse menu\">
            ";
                    // line 27
                    if (($this->getAttribute(($context["svg"] ?? null), "open", []) && $this->getAttribute(($context["svg"] ?? null), "closed", []))) {
                        // line 28
                        echo "              <div ";
                        echo $this->getAttribute(($context["alpine"] ?? null), "svg_open", []);
                        echo ">";
                        echo $this->getAttribute(($context["svg"] ?? null), "open", []);
                        echo "</div>
              <div ";
                        // line 29
                        echo $this->getAttribute(($context["alpine"] ?? null), "svg_closed", []);
                        echo ">";
                        echo $this->getAttribute(($context["svg"] ?? null), "closed", []);
                        echo "</div>
            ";
                    } elseif (twig_test_iterable(                    // line 30
($context["svg"] ?? null))) {
                        // line 31
                        echo "              <div ";
                        echo $this->getAttribute(($context["alpine"] ?? null), "svg_open", []);
                        echo ">-</div>
              <div ";
                        // line 32
                        echo $this->getAttribute(($context["alpine"] ?? null), "svg_closed", []);
                        echo ">+</div>
            ";
                    } elseif (                    // line 33
($context["svg"] ?? null)) {
                        // line 34
                        echo "              ";
                        echo ($context["svg"] ?? null);
                        echo "
            ";
                    } else {
                        // line 36
                        echo "              ";
                        echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/chevron-down.svg", ($context["icon_classes"] ?? null)]);
                        echo "
            ";
                    }
                    // line 38
                    echo "          </button>
        ";
                }
                // line 40
                echo "      </div>";
                // line 41
                if (($context["has_children"] ?? null)) {
                    // line 42
                    echo "<ul ";
                    echo $this->getAttribute(($context["alpine"] ?? null), "child", []);
                    echo " class=\"";
                    echo twig_escape_filter($this->env, ("level_" . $this->getAttribute($context["l"], "level", [])), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["ul_classes"] ?? null), "html", null, true);
                    echo "\">
          ";
                    // line 43
                    echo $context["macros"]->getnav_loop($this->getAttribute($context["l"], "links", []), ($context["classes_config"] ?? null), ($context["alpine"] ?? null), ($context["svg"] ?? null));
                    echo "
        </ul>
      ";
                }
                // line 46
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
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
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 46,  192 => 43,  183 => 42,  181 => 41,  179 => 40,  175 => 38,  169 => 36,  163 => 34,  161 => 33,  157 => 32,  152 => 31,  150 => 30,  144 => 29,  137 => 28,  135 => 27,  130 => 26,  128 => 25,  120 => 23,  106 => 21,  104 => 20,  95 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  66 => 8,  63 => 7,  60 => 6,  58 => 5,  55 => 4,  50 => 3,  47 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(links, classes_config, alpine, svg = {open: '', closed: ''}) %}
  {% import _self as macros %}
  {% for l in links %}

    {% set default = classes_config.default %}
    {% set classes = attribute(classes_config, 'level_' ~ l.level) ?: default %}

    {% set a_classes = classes.a|defined(default.a) %}
    {% set ul_classes = classes.ul_classes|defined(default.ul) %}
    {% set icon_classes = classes.icon|defined(default.icon) %}

    {% set li_classes = classes.li.base|defined(default.li.base) %}
    {% set li_active = is_active_item(l) %}
    {% set li_highlight = li_active ? classes.li.active|defined(default.li.active) : classes.li.inactive|defined(default.inactive) %}
    {% set has_children = l.links > 0 %}

    <li {{ alpine.parent|replace({'MENU_STATE': li_active ? 'true':'false'})|raw }}
            class=\"{{ li_classes }} {{ li_highlight }} {{ has_children ? 'has-submenu' }}\">
      <div class=\"flex w-full h-full\">
        {% if l.routable %}
          <a class=\"w-full {{ a_classes }}\" href=\"{{ l.href }}\" {% if l.external %}target=\"_blank\"{% endif %}>{{- l.text|e -}}</a>
        {% else %}
          <span class=\"w-full {{ a_classes }} cursor-pointer\">{{- l.text|e -}}</span>
        {% endif %}
        {%- if has_children -%}
          <button {{ alpine.button|raw }} class=\"focus:outline-none\" aria-label=\"Expand / collapse menu\">
            {% if svg.open and svg.closed %}
              <div {{ alpine.svg_open|raw }}>{{ svg.open|raw }}</div>
              <div {{ alpine.svg_closed|raw }}>{{ svg.closed|raw }}</div>
            {% elseif svg is iterable %}
              <div {{ alpine.svg_open|raw }}>-</div>
              <div {{ alpine.svg_closed|raw }}>+</div>
            {% elseif svg %}
              {{ svg|raw }}
            {% else %}
              {{ svg_icon('tabler/chevron-down.svg', icon_classes)|raw }}
            {% endif %}
          </button>
        {% endif %}
      </div>
      {%- if has_children -%}
        <ul {{ alpine.child|raw }} class=\"{{ 'level_' ~ l.level }} {{ ul_classes }}\">
          {{ macros.nav_loop(l.links, classes_config, alpine, svg) }}
        </ul>
      {% endif %}
    </li>
  {% endfor %}
{% endmacro %}
", "macros/macros.html.twig", "C:\\wamp64\\www\\gravPremium\\user\\themes\\typhoon\\templates\\macros\\macros.html.twig");
    }
}
