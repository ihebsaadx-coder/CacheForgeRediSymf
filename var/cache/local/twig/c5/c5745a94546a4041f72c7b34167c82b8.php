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

/* demand/indexRegulier.html.twig */
class __TwigTemplate_8cfb49c2e83f90f36d320c689021d499 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demand/indexRegulier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demand/indexRegulier.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Télétravail France  !
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<style>.text-center {
    text-align: left !important;
\t}
 .error-box {
            color: red;
            border: 1px solid red;
            padding: 10px;
            margin: 10px 0;
            background-color: #fdd;
        }
</style>

<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-primary\">
\t\t\t<h4 class=\"logo\">
\t\tDemande d'éligibilité au télétravail régulier </h4>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<div class=\"menu-user\">
\t\t\t\t<em class=\"fa fa-user\"></em>
\t\t\t\t<span class=\"menu-label\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "</span>

\t\t\t</div>
            <input type=\"hidden\" id=\"userconnecetd\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matricule"]) || array_key_exists("matricule", $context) ? $context["matricule"] : (function () { throw new RuntimeError('Variable "matricule" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\"> 

\t\t\t<div class=\"menu-user\">
\t\t\t\t<em class=\"fa fa-sign-out \"></em>
\t\t\t\t<span class=\"menu-label\">Déconnexion</span>
\t\t\t</div>
\t\t</nav>
\t\t<nav class=\"navbar navbar-expand-lg navbar-secondary\">
\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;font-weight: 700;cursor: pointer;font-size: 15px;\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["linkCockpit"]) || array_key_exists("linkCockpit", $context) ? $context["linkCockpit"] : (function () { throw new RuntimeError('Variable "linkCockpit" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"fa fa-mail-forward\"></i>
\t\t\t\t\t\tMon Cockpit</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<ul class=\"nav navbar-nav nav-right\">
\t\t\t\t";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 47
            yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<form
\t\t\t\t\t\t\taction=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("synchroTeletravailValidors");
            yield "\" method=\"post\">
\t\t\t\t\t\t\t";
            // line 51
            yield "\t\t\t\t\t\t\t<button type=\"submit\" style=\"background:transparent;border: none;color: #fff;font-weight: 700;cursor: pointer;font-size: 15px;\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tSynchroniser
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 58
        yield "\t\t\t</ul>

\t\t</nav>
        <div class=\"container-fluid\" style=\"margin: 15px;\">
        \t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "flashes", ["success"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 63
            yield "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            yield "\t\t<div class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;\" style=\"width: 98%;\">
\t\t\t";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "        </div>       
\t</header>
     <form\taction=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandRegulier");
        yield "\" method=\"post\">

 \t

<div class=\"col-md-12\" style=\"padding-left: 2%;padding-right: 2%;\">
  <div class=\"col-md-12\" style=\"padding-left: 0;\">
<div class=\"well\">

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col\">
    <ul class=\"list-group list-group-flush\">
      <li class=\"list-group-item \" style=\"min-height: 120px;border-radius: 15px;border: double #ddd;\">
        <h1 style=\"font-size: 16px;padding: 0;padding-bottom: 6px;margin-left: 0;margin-top: 5px;\">Directeur</h1><span style=\"font-size: 13px;\" id=\"didr\"></span>
      </li>
    </ul>
    </div>
       <div class=\"col\">
     <svg height=\"auto\" width=\"100%\" style=\"float: left;position: relative;top: 65px;\">
                                     <line x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\" style=\"stroke:#ddd;stroke-width : 4\" />

    </div>
    <div class=\"col\">
    <ul class=\"list-group list-group-flush\" style=\"position: relative;\">
      <li class=\"list-group-item \" style=\"min-height: 120px;border-radius: 15px;border: double #ddd;\">
        <h1 style=\"font-size: 16px;padding: 0;padding-bottom: 6px;margin-left: 0;margin-top: 5px;\">Responsable RH</h1><span style=\"font-size: 13px;\" id=\"rh1\"></span>
      </li>
    </ul>
                                                         

    </div>
  </div>
</div>
                        <div class=\"clearfix\"></div>
                    </div>
<div class=\"form-group pull-right\">


  <button type=\"submit\"class=\"btn btn-primary btn-sm\" id=\"btnform\" disabled>Soumettre</button>



</div>
  </div>
</div>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "<script>
\tif (window.history.replaceState) {
window.history.replaceState(null, null, window.location.href);
}
</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "demand/indexRegulier.html.twig";
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
        return array (  264 => 121,  254 => 120,  199 => 74,  195 => 72,  186 => 69,  183 => 68,  178 => 67,  169 => 64,  166 => 63,  162 => 62,  156 => 58,  147 => 51,  143 => 49,  139 => 47,  137 => 46,  127 => 39,  114 => 29,  108 => 26,  87 => 7,  77 => 6,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Télétravail France  !
{% endblock %}

{% block body %}
\t<style>.text-center {
    text-align: left !important;
\t}
 .error-box {
            color: red;
            border: 1px solid red;
            padding: 10px;
            margin: 10px 0;
            background-color: #fdd;
        }
</style>

<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-primary\">
\t\t\t<h4 class=\"logo\">
\t\tDemande d'éligibilité au télétravail régulier </h4>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<div class=\"menu-user\">
\t\t\t\t<em class=\"fa fa-user\"></em>
\t\t\t\t<span class=\"menu-label\">{{username}}</span>

\t\t\t</div>
            <input type=\"hidden\" id=\"userconnecetd\" value=\"{{matricule}}\"> 

\t\t\t<div class=\"menu-user\">
\t\t\t\t<em class=\"fa fa-sign-out \"></em>
\t\t\t\t<span class=\"menu-label\">Déconnexion</span>
\t\t\t</div>
\t\t</nav>
\t\t<nav class=\"navbar navbar-expand-lg navbar-secondary\">
\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"nav-link\" style=\"color: #fff;font-weight: 700;cursor: pointer;font-size: 15px;\" href=\"{{ linkCockpit }}\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"fa fa-mail-forward\"></i>
\t\t\t\t\t\tMon Cockpit</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<ul class=\"nav navbar-nav nav-right\">
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<form
\t\t\t\t\t\t\taction=\"{{ path(\"synchroTeletravailValidors\") }}\" method=\"post\">
\t\t\t\t\t\t\t{#<form action=\"\" method=\"post\">#}
\t\t\t\t\t\t\t<button type=\"submit\" style=\"background:transparent;border: none;color: #fff;font-weight: 700;cursor: pointer;font-size: 15px;\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tSynchroniser
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>

\t\t</nav>
        <div class=\"container-fluid\" style=\"margin: 15px;\">
        \t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
\t{% for message in app.flashes('warning') %}
\t\t<div class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;\" style=\"width: 98%;\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
        </div>       
\t</header>
     <form\taction=\"{{ path(\"app_demandRegulier\") }}\" method=\"post\">

 \t

<div class=\"col-md-12\" style=\"padding-left: 2%;padding-right: 2%;\">
  <div class=\"col-md-12\" style=\"padding-left: 0;\">
<div class=\"well\">

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col\">
    <ul class=\"list-group list-group-flush\">
      <li class=\"list-group-item \" style=\"min-height: 120px;border-radius: 15px;border: double #ddd;\">
        <h1 style=\"font-size: 16px;padding: 0;padding-bottom: 6px;margin-left: 0;margin-top: 5px;\">Directeur</h1><span style=\"font-size: 13px;\" id=\"didr\"></span>
      </li>
    </ul>
    </div>
       <div class=\"col\">
     <svg height=\"auto\" width=\"100%\" style=\"float: left;position: relative;top: 65px;\">
                                     <line x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\" style=\"stroke:#ddd;stroke-width : 4\" />

    </div>
    <div class=\"col\">
    <ul class=\"list-group list-group-flush\" style=\"position: relative;\">
      <li class=\"list-group-item \" style=\"min-height: 120px;border-radius: 15px;border: double #ddd;\">
        <h1 style=\"font-size: 16px;padding: 0;padding-bottom: 6px;margin-left: 0;margin-top: 5px;\">Responsable RH</h1><span style=\"font-size: 13px;\" id=\"rh1\"></span>
      </li>
    </ul>
                                                         

    </div>
  </div>
</div>
                        <div class=\"clearfix\"></div>
                    </div>
<div class=\"form-group pull-right\">


  <button type=\"submit\"class=\"btn btn-primary btn-sm\" id=\"btnform\" disabled>Soumettre</button>



</div>
  </div>
</div>
</form>
{% endblock %}{% block javascripts %}
{{ parent() }}<script>
\tif (window.history.replaceState) {
window.history.replaceState(null, null, window.location.href);
}
</script>{% endblock %}
", "demand/indexRegulier.html.twig", "/home/g701091/teletravailjunk/templates/demand/indexRegulier.html.twig");
    }
}
