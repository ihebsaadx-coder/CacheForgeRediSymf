<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @JMSSerializer/Collector/panel.html.twig */
class __TwigTemplate_98be149304923e415a2344d4e72db1a1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/panel.html.twig"));

        // line 2
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@JMSSerializer/Collector/panel.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 6
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@JMSSerializer/icon.svg");
            yield "
        <span class=\"sf-toolbar-label\">S:</span>
        <span class=\"sf-toolbar-value\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "runs", [1], "method", false, false, false, 8)), "html", null, true);
            yield "</span>
        <span class=\"sf-toolbar-label\">D:</span>
        <span class=\"sf-toolbar-value\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "runs", [2], "method", false, false, false, 10)), "html", null, true);
            yield "</span>
        ";
            // line 11
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "instance", [], "any", false, false, false, 11) != "default")) {
                // line 12
                yield "            <span class=\"sf-toolbar-label\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "instance", [], "any", false, false, false, 12), "html", null, true);
                yield "</span>
        ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "<div class=\"sf-toolbar-info-piece\">
            <b>Serializations</b>
            <span class=\"sf-toolbar-status\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 19, $this->source); })()), "runs", [1], "method", false, false, false, 19)), "html", null, true);
            yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Deserializations</b>
            <span class=\"sf-toolbar-status\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "runs", [2], "method", false, false, false, 23)), "html", null, true);
            yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Listeners</b>
            <span class=\"sf-toolbar-status\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "getNumListeners", ["called"], "method", false, false, false, 27), "html", null, true);
            yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Handlers</b>
            <span class=\"sf-toolbar-status\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "getNumHandlers", ["called"], "method", false, false, false, 31), "html", null, true);
            yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Metadata</b>
            <span class=\"sf-toolbar-status ";
            // line 35
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 35)) > 0)) ? ("sf-toolbar-status-none") : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 35)), "html", null, true);
            yield "</span>
        </div>";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        yield from $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@JMSSerializer/Collector/panel.html.twig", 39)->unwrap()->yield(CoreExtension::merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 39, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 43
        yield "<style>
        ";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@JMSSerializer/Collector/style/jms.css.twig");
        yield "
    </style>
    <style>
        .margin-left {
            margin-left: 10px;
        }

        .margin-top {
            margin-top: 10px;
        }

        .margin-bottom {
            margin-bottom: 10px;
        }
    </style>
    <script type=\"text/javascript\">
        ";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@JMSSerializer/Collector/script/jms.js.twig");
        yield "
    </script>
    ";
        // line 62
        yield from $this->yieldParentBlock("head", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 67
        yield "    ";
        $context["total"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "runs", [1], "method", false, false, false, 67)) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "runs", [2], "method", false, false, false, 67)));
        // line 68
        yield "    <span class=\"label ";
        yield ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })()) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">
            ";
        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@JMSSerializer/icon.svg");
        yield "
        </span>
        <strong>
            JMS Serializer
            ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "instance", [], "any", false, false, false, 74) != "default")) {
            // line 75
            yield "                <small><br>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "instance", [], "any", false, false, false, 75), "html", null, true);
            yield ")</small>
            ";
        }
        // line 77
        yield "        </strong>

        <span class=\"count\">
            <span>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "runs", [1], "method", false, false, false, 80)), "html", null, true);
        yield " + ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "runs", [2], "method", false, false, false, 80)), "html", null, true);
        yield "</span>
        </span>

    </span>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 87
        yield "<h2>
        JMS Serializer
        ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "instance", [], "any", false, false, false, 89) != "default")) {
            // line 90
            yield "            (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "instance", [], "any", false, false, false, 90), "html", null, true);
            yield ")
        ";
        }
        // line 92
        yield "    </h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 96, $this->source); })()), "runs", [1], "method", false, false, false, 96)), "html", null, true);
        yield "</span>
            <span class=\"label\">Serializations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "runs", [2], "method", false, false, false, 100)), "html", null, true);
        yield "</span>
            <span class=\"label\">Deserializations</span>
        </div>
        <div class=\"metric-divider\"></div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "triggeredEvents", [], "any", false, false, false, 105), "count", [], "any", false, false, false, 105), "html", null, true);
        yield "</span>
            <span class=\"label\">Triggered event listeners</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 109, $this->source); })()), "triggeredEvents", [], "any", false, false, false, 109), "duration", [], "any", false, false, false, 109), 2), "html", null, true);
        yield " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Triggered event listeners (time)</span>
        </div>
    </div>

    ";
        // line 114
        yield $macros["helper"]->getTemplateForMacro("macro_render_table_runs", $context, 114, $this->getSourceContext())->macro_render_table_runs(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 114, $this->source); })()), "runs", [1], "method", false, false, false, 114), "Serializations"]);
        yield "
    ";
        // line 115
        yield $macros["helper"]->getTemplateForMacro("macro_render_table_runs", $context, 115, $this->getSourceContext())->macro_render_table_runs(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 115, $this->source); })()), "runs", [2], "method", false, false, false, 115), "Deserializations"]);
        yield "

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-events\">
                Events
                <span class=\"badge\">
                    ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "triggeredListeners", [], "any", false, false, false, 122)), "html", null, true);
        yield "
                    (";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 123, $this->source); })()), "getNumListeners", ["called"], "method", false, false, false, 123), "html", null, true);
        yield " listeners)
                </span>


            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event listeners</p>

                <div id=\"jms-events\">";
        // line 133
        yield from $this->loadTemplate("@JMSSerializer/Collector/events.html.twig", "@JMSSerializer/Collector/panel.html.twig", 133)->unwrap()->yield($context);
        // line 134
        yield "</div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-handlers\">
                Handlers
                <span class=\"badge\">
                    ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "triggeredHandlers", [], "any", false, false, false, 142)), "html", null, true);
        yield "
                    (";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 143, $this->source); })()), "getNumHandlers", ["called"], "method", false, false, false, 143), "html", null, true);
        yield " types)
                </span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event handlers</p>

                <div id=\"jms-handlers\">";
        // line 151
        yield from $this->loadTemplate("@JMSSerializer/Collector/handlers.html.twig", "@JMSSerializer/Collector/panel.html.twig", 151)->unwrap()->yield($context);
        // line 152
        yield "</div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Metadata
                <span class=\"badge ";
        // line 159
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 159)) > 0)) ? ("status-info") : (""));
        yield "\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 160, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 160)), "html", null, true);
        // line 161
        yield "</span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Loaded metadata</p>

                <div id=\"jms-metadata\">";
        // line 168
        yield from $this->loadTemplate("@JMSSerializer/Collector/metadata.html.twig", "@JMSSerializer/Collector/panel.html.twig", 168)->unwrap()->yield($context);
        // line 169
        yield "</div>
            </div>
        </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 175
    public function macro_render_table_runs($runs = null, $mode = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "runs" => $runs,
            "mode" => $mode,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table_runs"));

            // line 177
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 177, $this->source); })())) > 0)) {
                // line 178
                yield "<h3>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 178, $this->source); })()), "html", null, true);
                yield "</h3>
        <table>
            <thead>
            <tr>
                <th>Type</th>
            </tr>
            </thead>";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 185, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                    // line 186
                    yield "<tr>
                    <th class=\"colored font-normal\">";
                    // line 187
                    yield Twig\Extension\DebugExtension::dump($this->env, $context, ...[CoreExtension::getAttribute($this->env, $this->source, $context["run"], "type", [], "any", false, false, false, 187)]);
                    yield "</th>
                </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['run'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                yield "</table>";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@JMSSerializer/Collector/panel.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  441 => 190,  433 => 187,  430 => 186,  426 => 185,  416 => 178,  414 => 177,  398 => 175,  387 => 169,  385 => 168,  377 => 161,  375 => 160,  372 => 159,  363 => 152,  361 => 151,  351 => 143,  347 => 142,  337 => 134,  335 => 133,  323 => 123,  319 => 122,  309 => 115,  305 => 114,  297 => 109,  290 => 105,  282 => 100,  275 => 96,  269 => 92,  263 => 90,  261 => 89,  257 => 87,  247 => 86,  233 => 80,  228 => 77,  222 => 75,  220 => 74,  213 => 70,  207 => 68,  204 => 67,  194 => 65,  186 => 62,  181 => 60,  162 => 44,  159 => 43,  149 => 42,  141 => 39,  133 => 35,  126 => 31,  119 => 27,  112 => 23,  105 => 19,  101 => 17,  99 => 16,  91 => 12,  89 => 11,  85 => 10,  80 => 8,  75 => 6,  73 => 5,  63 => 3,  55 => 1,  53 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%- extends '@WebProfiler/Profiler/layout.html.twig' -%}
{%- import _self as helper -%}
{%- block toolbar -%}

    {%- set icon -%}
        {{- include('@JMSSerializer/icon.svg') }}
        <span class=\"sf-toolbar-label\">S:</span>
        <span class=\"sf-toolbar-value\">{{- collector.runs(1)|length }}</span>
        <span class=\"sf-toolbar-label\">D:</span>
        <span class=\"sf-toolbar-value\">{{- collector.runs(2)|length }}</span>
        {% if collector.instance != 'default' %}
            <span class=\"sf-toolbar-label\">{{- collector.instance -}}</span>
        {% endif %}
    {%- endset -%}

    {%- set text -%}
        <div class=\"sf-toolbar-info-piece\">
            <b>Serializations</b>
            <span class=\"sf-toolbar-status\">{{ collector.runs(1)|length }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Deserializations</b>
            <span class=\"sf-toolbar-status\">{{ collector.runs(2)|length }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Listeners</b>
            <span class=\"sf-toolbar-status\">{{ collector.getNumListeners('called') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Handlers</b>
            <span class=\"sf-toolbar-status\">{{ collector.getNumHandlers('called') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Metadata</b>
            <span class=\"sf-toolbar-status {{ collector.loadedMetadata|length > 0 ? 'sf-toolbar-status-none' : '' }}\">{{ collector.loadedMetadata|length }}</span>
        </div>
    {%- endset -%}

    {%- include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } -%}
{%- endblock -%}

{%- block head -%}
    <style>
        {{ include('@JMSSerializer/Collector/style/jms.css.twig') }}
    </style>
    <style>
        .margin-left {
            margin-left: 10px;
        }

        .margin-top {
            margin-top: 10px;
        }

        .margin-bottom {
            margin-bottom: 10px;
        }
    </style>
    <script type=\"text/javascript\">
        {{ include('@JMSSerializer/Collector/script/jms.js.twig') }}
    </script>
    {{ parent() }}
{%- endblock -%}

{%- block menu -%}
    {# This left-hand menu appears when using the full-screen profiler. #}
    {% set total = (collector.runs(1)|length) + (collector.runs(2)|length) %}
    <span class=\"label {{ total == 0 ? 'disabled' : '' }}\">
        <span class=\"icon\">
            {{ include('@JMSSerializer/icon.svg') }}
        </span>
        <strong>
            JMS Serializer
            {% if collector.instance != 'default' %}
                <small><br>({{- collector.instance -}})</small>
            {% endif %}
        </strong>

        <span class=\"count\">
            <span>{{ (collector.runs(1)|length) }} + {{ (collector.runs(2)|length) }}</span>
        </span>

    </span>
{%- endblock -%}

{%- block panel -%}
    <h2>
        JMS Serializer
        {% if collector.instance != 'default' %}
            ({{- collector.instance -}})
        {% endif %}
    </h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{- collector.runs(1)|length }}</span>
            <span class=\"label\">Serializations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{- collector.runs(2)|length }}</span>
            <span class=\"label\">Deserializations</span>
        </div>
        <div class=\"metric-divider\"></div>
        <div class=\"metric\">
            <span class=\"value\">{{- collector.triggeredEvents.count }}</span>
            <span class=\"label\">Triggered event listeners</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{- collector.triggeredEvents.duration|round(2) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Triggered event listeners (time)</span>
        </div>
    </div>

    {{ helper.render_table_runs(collector.runs(1), 'Serializations') }}
    {{ helper.render_table_runs(collector.runs(2), 'Deserializations') }}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-events\">
                Events
                <span class=\"badge\">
                    {{ collector.triggeredListeners|length }}
                    ({{ collector.getNumListeners('called') }} listeners)
                </span>


            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event listeners</p>

                <div id=\"jms-events\">
                    {%- include '@JMSSerializer/Collector/events.html.twig' -%}
                </div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title jms-toggle\" data-toggle=\"#jms-handlers\">
                Handlers
                <span class=\"badge\">
                    {{ collector.triggeredHandlers|length }}
                    ({{ collector.getNumHandlers('called') }} types)
                </span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Triggered event handlers</p>

                <div id=\"jms-handlers\">
                    {%- include '@JMSSerializer/Collector/handlers.html.twig' -%}
                </div>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Metadata
                <span class=\"badge {{ collector.loadedMetadata|length > 0 ? 'status-info' : '' }}\">
                    {{- collector.loadedMetadata|length -}}
                </span>
            </h3>

            <div class=\"tab-content\">
                <p class=\"help\">Loaded metadata</p>

                <div id=\"jms-metadata\">
                    {%- include '@JMSSerializer/Collector/metadata.html.twig' -%}
                </div>
            </div>
        </div>
    </div>
{%- endblock -%}

{%- macro render_table_runs(runs, mode) -%}

    {%- if (runs|length)>0 -%}
        <h3>{{ mode }}</h3>
        <table>
            <thead>
            <tr>
                <th>Type</th>
            </tr>
            </thead>
            {%- for run in runs -%}
                <tr>
                    <th class=\"colored font-normal\">{{ dump(run.type) }}</th>
                </tr>
            {%- endfor -%}
        </table>
    {%- endif -%}
{%- endmacro -%}
", "@JMSSerializer/Collector/panel.html.twig", "/home/g701091/teletravailjunk/vendor/jms/serializer-bundle/Resources/views/Collector/panel.html.twig");
    }
}
