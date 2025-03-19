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

/* @JMSSerializer/Collector/metadata.html.twig */
class __TwigTemplate_e793fdbf90244043d804dd1c82b6eb25 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/metadata.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/metadata.html.twig"));

        // line 1
        yield "<h2>Loaded metadata</h2>";
        // line 3
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 3, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 3))) {
            // line 4
            yield "<div class=\"empty\">
        <p>No metadata have been loaded.</p>
    </div>";
        } else {
            // line 9
            yield "<table>
        <thead>
        <tr>
            <th>Class</th>
            <th>File</th>
        </tr>
        </thead>";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "loadedMetadata", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["class"] => $context["files"]) {
                // line 17
                yield "<tr>
                <td>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                yield "</td>
                <td nowrap=\"nowrap\">";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["files"]);
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["file"], "html", null, true);
                    yield "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['class'], $context['files'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "</table>";
        }
        // line 30
        yield "<h3>Attempted files</h3>";
        // line 31
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "metadataFiles", [], "any", false, false, false, 31))) {
            // line 32
            yield "<div class=\"empty\">
        <p>No metadata files attempted (if this list is empty, probably all the data are cached as expected)</p>
    </div>";
        } else {
            // line 36
            yield "<table>
        <thead>
        <tr>
            <th>Class</th>
            <th>Files</th>
        </tr>
        </thead>";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "metadataFiles", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["class"] => $context["files"]) {
                // line 44
                yield "<tr>
                <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                yield "</td>
                <td nowrap=\"nowrap\">";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["files"]);
                foreach ($context['_seq'] as $context["file"] => $context["found"]) {
                    // line 48
                    yield "<span style=\"color: ";
                    yield (($context["found"]) ? ("green") : ("red"));
                    yield "\">
                        ";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["file"], "html", null, true);
                    yield " (";
                    yield (($context["found"]) ? ("found") : ("not found"));
                    yield ")<br/>
                        </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['file'], $context['found'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['class'], $context['files'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "</table>";
        }
        // line 58
        yield "<h3>Configured metadata directories</h3>
<table>
    <thead>
    <tr>
        <th>Prefix</th>
        <th>Path</th>
    </tr>
    </thead>";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "loadedDirs", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["prefix"] => $context["path"]) {
            // line 67
            yield "<tr>
            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["prefix"], "html", null, true);
            yield "</td>
            <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["path"], "html", null, true);
            yield "</td>
        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['prefix'], $context['path'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@JMSSerializer/Collector/metadata.html.twig";
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
        return array (  184 => 72,  176 => 69,  172 => 68,  169 => 67,  165 => 66,  156 => 58,  153 => 55,  146 => 52,  135 => 49,  130 => 48,  126 => 47,  122 => 45,  119 => 44,  115 => 43,  107 => 36,  102 => 32,  100 => 31,  98 => 30,  95 => 26,  88 => 23,  80 => 21,  76 => 20,  72 => 18,  69 => 17,  65 => 16,  57 => 9,  52 => 4,  50 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>Loaded metadata</h2>

{%- if collector.loadedMetadata is empty -%}
    <div class=\"empty\">
        <p>No metadata have been loaded.</p>
    </div>
{%- else -%}

    <table>
        <thead>
        <tr>
            <th>Class</th>
            <th>File</th>
        </tr>
        </thead>
        {%- for class, files in collector.loadedMetadata -%}
            <tr>
                <td>{{ class }}</td>
                <td nowrap=\"nowrap\">
                    {%- for file in files -%}
                        {{ file }}<br/>
                    {% endfor %}
                </td>
            </tr>
        {%- endfor -%}
    </table>
{%- endif -%}


<h3>Attempted files</h3>
{%- if collector.metadataFiles is empty -%}
    <div class=\"empty\">
        <p>No metadata files attempted (if this list is empty, probably all the data are cached as expected)</p>
    </div>
{%- else -%}
    <table>
        <thead>
        <tr>
            <th>Class</th>
            <th>Files</th>
        </tr>
        </thead>
        {%- for class, files in collector.metadataFiles -%}
            <tr>
                <td>{{ class }}</td>
                <td nowrap=\"nowrap\">
                    {%- for file, found in files -%}
                        <span style=\"color: {{ found ? 'green': 'red' }}\">
                        {{ file }} ({{ found ? 'found': 'not found' }})<br/>
                        </span>
                    {% endfor %}
                </td>
            </tr>
        {%- endfor -%}
    </table>
{%- endif -%}

<h3>Configured metadata directories</h3>
<table>
    <thead>
    <tr>
        <th>Prefix</th>
        <th>Path</th>
    </tr>
    </thead>
    {%- for prefix, path in collector.loadedDirs -%}
        <tr>
            <td>{{ prefix }}</td>
            <td>{{ path }}</td>
        </tr>
    {%- endfor -%}
</table>
", "@JMSSerializer/Collector/metadata.html.twig", "/var/www/teletravailjunk/vendor/jms/serializer-bundle/Resources/views/Collector/metadata.html.twig");
    }
}
