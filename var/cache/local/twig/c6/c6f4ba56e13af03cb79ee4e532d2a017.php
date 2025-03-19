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

/* demand/index.html.twig */
class __TwigTemplate_283b805a630e339793ab4d8aa23fffd8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demand/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demand/index.html.twig", 1);
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
        yield "\t<style></style>
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Flasher\Symfony\Twig\FlasherTwigExtension']->render(), "html", null, true);
        yield "
\t<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-primary\">
\t\t\t<h4 class=\"logo\">
\t\t\t\tTélétravail France</h4>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<div class=\"menu-user\">
\t\t\t\t<em class=\"fa fa-user\"></em>
\t\t\t\t<span class=\"menu-label\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "</span>
\t\t\t</div>
\t\t\t<input type=\"hidden\" id=\"userconnecetd\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["matricule"]) || array_key_exists("matricule", $context) ? $context["matricule"] : (function () { throw new RuntimeError('Variable "matricule" does not exist.', 28, $this->source); })()), "html", null, true);
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
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["linkCockpit"]) || array_key_exists("linkCockpit", $context) ? $context["linkCockpit"] : (function () { throw new RuntimeError('Variable "linkCockpit" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"fa fa-mail-forward\"></i>
\t\t\t\t\t\tMon Cockpit</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<ul class=\"nav navbar-nav nav-right\">
\t\t\t\t";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 46
            yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<form
\t\t\t\t\t\t\taction=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("synchroTeletravailValidors");
            yield "\" method=\"post\">
\t\t\t\t\t\t\t";
            // line 50
            yield "\t\t\t\t\t\t\t<button type=\"submit\" style=\"background:transparent;border: none;color: #fff;font-weight: 700;cursor: pointer;font-size: 15px;\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tSynchroniser
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 57
        yield "\t\t\t</ul>

\t\t</nav>
\t</header>
\t<div>
\t\t<div class=\"example-wrapper\" id=\"formDemand\" style=\"padding-top: 9px;\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start');
        yield "

\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fa fa-th-list\" aria-hidden=\"true\" style=\"color:#0080ff !important\"></i>
\t\t\t\t\t\tInformations générales
\t\t\t\t\t</h5>
\t\t\t\t\t<div class=\"card-text\">
\t\t\t\t\t\t<div class=\"my-custom-class-for-errors\">
\t\t\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'errors');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "fileinputRedis", [], "any", false, false, false, 75), 'row');
        yield "

\t\t\t\t\t\t<div class=\"wrap\">

\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" style=\"margin-top: 21px; margin-bottom: 20px; width: 187px; float: right;\">
\t\t\t\t\t\t\t\tEnvoyer
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button id=\"consumeUpdates\" type=\"button\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\tConsume File Updates
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button id=\"ConsumerName\" type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\tConsume Names Details
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "dropdownFast", [], "any", false, false, false, 88), 'row');
        yield "
\t\t\t\t\t\t\t";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "ingenieurautocomplete", [], "any", false, false, false, 89), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 94
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        yield "
\t\t</div>
\t</div>

\t<div class=\"dropdown\">
\t\t<button class=\"btn btn-primary lg dropdown-toggle\" type=\"button\" style=\"width: 419px;
\t\t\tmargin-top: 17%;\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t<em class=\"fa fa-list\"></em>
\t\t\tChoisir un formulaire
\t\t</button>


\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandRegulier");
        yield "\">Demande d'éligibilité au télétravail régulier</a>
\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandResidence");
        yield "\">Déclaration d’une seconde résidence pour le télétravail</a>
\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandOccasionnel");
        yield "\">Demande pour bénéficier du télétravail occasionnel</a>
\t\t</div>
\t</div>
</center>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        yield "<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
";
        // line 117
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
";
        // line 118
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("bootstrapjs");
        yield "
";
        // line 119
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("font-css");
        yield "
<script src=\"https://code.jquery.com/jquery-1.9.1.js\"></script>
";
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
        return "demand/index.html.twig";
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
        return array (  301 => 121,  296 => 119,  292 => 118,  288 => 117,  282 => 113,  272 => 112,  260 => 109,  256 => 108,  252 => 107,  236 => 94,  228 => 89,  224 => 88,  208 => 75,  203 => 73,  192 => 65,  182 => 57,  173 => 50,  169 => 48,  165 => 46,  163 => 45,  153 => 38,  140 => 28,  135 => 26,  123 => 18,  114 => 15,  111 => 14,  106 => 13,  97 => 10,  94 => 9,  90 => 8,  87 => 7,  77 => 6,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Télétravail France  !
{% endblock %}

{% block body %}
\t<style></style>
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
\t{% for message in app.flashes('warning') %}
\t\t<div class=\"alert alert-danger\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
\t{{ flasher_render() }}
\t<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-primary\">
\t\t\t<h4 class=\"logo\">
\t\t\t\tTélétravail France</h4>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<div class=\"menu-user\">
\t\t\t\t<em class=\"fa fa-user\"></em>
\t\t\t\t<span class=\"menu-label\">{{username}}</span>
\t\t\t</div>
\t\t\t<input type=\"hidden\" id=\"userconnecetd\" value=\"{{matricule}}\">

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
\t</header>
\t<div>
\t\t<div class=\"example-wrapper\" id=\"formDemand\" style=\"padding-top: 9px;\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t{{ form_start(form) }}

\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t<i class=\"fa fa-th-list\" aria-hidden=\"true\" style=\"color:#0080ff !important\"></i>
\t\t\t\t\t\tInformations générales
\t\t\t\t\t</h5>
\t\t\t\t\t<div class=\"card-text\">
\t\t\t\t\t\t<div class=\"my-custom-class-for-errors\">
\t\t\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_row(form.fileinputRedis) }}

\t\t\t\t\t\t<div class=\"wrap\">

\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" style=\"margin-top: 21px; margin-bottom: 20px; width: 187px; float: right;\">
\t\t\t\t\t\t\t\tEnvoyer
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button id=\"consumeUpdates\" type=\"button\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\tConsume File Updates
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button id=\"ConsumerName\" type=\"button\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\tConsume Names Details
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t{{form_row(form.dropdownFast)}}
\t\t\t\t\t\t\t{{form_row(form.ingenieurautocomplete)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>

\t<div class=\"dropdown\">
\t\t<button class=\"btn btn-primary lg dropdown-toggle\" type=\"button\" style=\"width: 419px;
\t\t\tmargin-top: 17%;\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t<em class=\"fa fa-list\"></em>
\t\t\tChoisir un formulaire
\t\t</button>


\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_demandRegulier')}}\">Demande d'éligibilité au télétravail régulier</a>
\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_demandResidence')}}\">Déclaration d’une seconde résidence pour le télétravail</a>
\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_demandOccasionnel')}}\">Demande pour bénéficier du télétravail occasionnel</a>
\t\t</div>
\t</div>
</center>{% endblock %}{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
{{ encore_entry_script_tags('app') }}
{{ encore_entry_script_tags('bootstrapjs') }}
{{ encore_entry_link_tags('font-css')}}
<script src=\"https://code.jquery.com/jquery-1.9.1.js\"></script>
{{ parent() }}<script>
\tif (window.history.replaceState) {
window.history.replaceState(null, null, window.location.href);
}
</script>{% endblock %}

", "demand/index.html.twig", "/home/g701091/teletravailjunk/templates/demand/index.html.twig");
    }
}
