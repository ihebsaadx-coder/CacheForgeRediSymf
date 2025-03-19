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

/* demand/indexOccasion.html.twig */
class __TwigTemplate_220407b5f78649d0f820caca8e74e639 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demand/indexOccasion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demand/indexOccasion.html.twig", 1);
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
\t\t\t Demande pour bénéficier du télétravail occasionnel </h4>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<div class=\"menu-user\">
\t\t\t\t<em class=\"fa fa-user\"></em>
\t\t\t\t<span class=\"menu-label\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "</span>
\t\t\t</div>
\t\t\t\t<input type=\"hidden\" id=\"userconnecetd\" value=\"";
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

\t\t     <div class=\"container-fluid\" style=\"margin: 15px;\">
        \t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", ["success"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            yield "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            yield "\t\t<div class=\"alert alert-danger\" style=\"width: 98%;\">
\t\t\t";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "        </div> 
\t</header>





<form\taction=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandOccasionnel");
        yield "\" method=\"post\">
 ";
        // line 81
        if ( !(isset($context["director"]) || array_key_exists("director", $context) ? $context["director"] : (function () { throw new RuntimeError('Variable "director" does not exist.', 81, $this->source); })())) {
            // line 82
            yield "                <div class=\"error-box\">
                Une erreur en raison du champ directeur qui est vide.
    </div>
 ";
        }
        // line 86
        yield "   ";
        if ( !(isset($context["rh"]) || array_key_exists("rh", $context) ? $context["rh"] : (function () { throw new RuntimeError('Variable "rh" does not exist.', 86, $this->source); })())) {
            // line 87
            yield "                <div class=\"error-box\">
                    Une erreur en raison du champ Responsable RH qui est vide.
                </div>
            ";
        }
        // line 91
        yield "<div class=\"col-md-12\" style=\"padding-left: 2%;padding-right: 2%;padding-top:2%\">
  <div class=\"col-md-12\" style=\"padding-left: 0;\">
    <div class=\"well\">
      <p style=\"margin-top: 10px;font-size: 16px;\"><strong>Avant de formuler une demande pour bénéficier du télétravail occasionnel (10 jours/an), nous vous invitons à consulter <a href=\"https://rh.comon/index.php?id=265\" target=\"_blank\">le guide</a> du télétravail précisant notamment les conditions d’éligibilité à ce mode d’organisation du travail.</strong></p><br>
      <table class=\"table table-bordered text-center\">
        <tbody>
          <tr>
            <td><strong>Attestations sur l'honneur nécessaires pour toute demande pour bénéficier du télétravail occasionnel (10 jours/an) :</strong></td>
          </tr>
          <tr>
            <td><input type=\"checkbox\" id=\"assurancehabitationOC\" required> 
            J’atteste sur l’honneur que mon assurance multirisque habitation couvre ma présence en situation de télétravail à mon domicile 
            et que je suis en mesure d’en fournir la preuve en cas de demande par la Direction.
            <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
                                                </td>
          </tr>
          <tr>
            <td><input type=\"checkbox\" id=\"conformiteelectriqueOC\" required> 
            J’atteste sur l’honneur que l’installation électrique du lieu de télétravail répond à l’ensemble des normes de sécurité 
            et aux normes en vigueur.
            <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
                                                </td>
          </tr>
          <tr>
            <td>
            <input type=\"checkbox\" id=\"detecteurfumeeOC\" required> J’atteste sur l’honneur que le lieu de télétravail est équipé
             d’un détecteur de fumée (marquage CE) en état de fonctionnement.
             <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
             </td>
          </tr>
          <tr>
            <td><input type=\"checkbox\" id=\"espacetravailOC\" required >
             J’atteste sur l’honneur disposer d’un espace de travail adapté offrant de bonnes conditions de travail notamment en 
             terme d’ergonomie (luminosité, siège adapté, table de travail, aération, bruit, etc.).
             <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
              </td>
          </tr>
          <tr>
            <td>
            <input type=\"checkbox\" id=\"connexioninternetOC\" required> 
            J’atteste sur l’honneur disposer d’une connexion Internet adaptée à mes besoins professionnels.
            <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
                                                </td>
          </tr>
        </tbody>
      </table>
      <div class=\"col-sm-12\">
        <br>
        <p style=\"font-size: 16px;\"><strong>Votre demande pour bénéficier du télétravail occasionnel (10 jours/an) sera étudiée par vos Manager et RRH respectifs et fera l'objet d'une réponse sous 1 mois.</strong></p>
      </div>
      <div class=\"clearfix\"></div>
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"clearfix\"></div>
</div>
<div class=\"col-md-12\" style=\"padding-left: 2%;padding-right: 2%;\">
  <div class=\"col-md-12\" style=\"padding-left: 0;\">
<div class=\"well\">

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col\">
    <ul class=\"list-group list-group-flush\">
      <li class=\"list-group-item \" style=\"min-height: 120px;border-radius: 15px;border: double #ddd;\">
        <h1 style=\"font-size: 16px;padding: 0;padding-bottom: 6px;margin-left: 0;margin-top: 5px;\">Directeur</h1>
        <span style=\"font-size: 13px;\" id=\"difr\">";
        // line 167
        if ((isset($context["director"]) || array_key_exists("director", $context) ? $context["director"] : (function () { throw new RuntimeError('Variable "director" does not exist.', 167, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["director"]) || array_key_exists("director", $context) ? $context["director"] : (function () { throw new RuntimeError('Variable "director" does not exist.', 167, $this->source); })()), "fullname", [], "any", false, false, false, 167) . "(") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["director"]) || array_key_exists("director", $context) ? $context["director"] : (function () { throw new RuntimeError('Variable "director" does not exist.', 167, $this->source); })()), "matricule", [], "any", false, false, false, 167)) . ")"), "html", null, true);
        }
        yield "</span>
      </li>
    </ul>
                               ";
        // line 170
        if ((isset($context["director"]) || array_key_exists("director", $context) ? $context["director"] : (function () { throw new RuntimeError('Variable "director" does not exist.', 170, $this->source); })())) {
            yield " <input type=\"hidden\" name=\"directeur\" id=\"directedur\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["director"]) || array_key_exists("director", $context) ? $context["director"] : (function () { throw new RuntimeError('Variable "director" does not exist.', 170, $this->source); })()), "fullname", [], "any", false, false, false, 170) . "(") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["director"]) || array_key_exists("director", $context) ? $context["director"] : (function () { throw new RuntimeError('Variable "director" does not exist.', 170, $this->source); })()), "matricule", [], "any", false, false, false, 170)) . ")"), "html", null, true);
            yield "\"/>";
        }
        // line 171
        yield "
    </div>
       <div class=\"col\">
     <svg height=\"auto\" width=\"100%\" style=\"float: left;position: relative;top: 65px;\">
                                     <line x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\" style=\"stroke:#ddd;stroke-width : 4\" />

    </div>
    <div class=\"col\">
    <ul class=\"list-group list-group-flush\" style=\"position: relative;\">
      <li class=\"list-group-item \" style=\"min-height: 120px;border-radius: 15px;border: double #ddd;\">
        <h1 style=\"font-size: 16px;padding: 0;padding-bottom: 6px;margin-left: 0;margin-top: 5px;\">Responsable RH</h1>
       ";
        // line 182
        if ((isset($context["rh"]) || array_key_exists("rh", $context) ? $context["rh"] : (function () { throw new RuntimeError('Variable "rh" does not exist.', 182, $this->source); })())) {
            yield " <span style=\"font-size: 13px;\" id=\"rhd\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["rh"]) || array_key_exists("rh", $context) ? $context["rh"] : (function () { throw new RuntimeError('Variable "rh" does not exist.', 182, $this->source); })()), "fullname", [], "any", false, false, false, 182) . "(") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["rh"]) || array_key_exists("rh", $context) ? $context["rh"] : (function () { throw new RuntimeError('Variable "rh" does not exist.', 182, $this->source); })()), "matricule", [], "any", false, false, false, 182)) . ")"), "html", null, true);
            yield "</span>";
        }
        // line 183
        yield "      </li>
    </ul>
        ";
        // line 185
        if ((isset($context["rh"]) || array_key_exists("rh", $context) ? $context["rh"] : (function () { throw new RuntimeError('Variable "rh" does not exist.', 185, $this->source); })())) {
            yield "  <input type=\"hidden\" name=\"rh1\" id=\"rh1d\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["rh"]) || array_key_exists("rh", $context) ? $context["rh"] : (function () { throw new RuntimeError('Variable "rh" does not exist.', 185, $this->source); })()), "fullname", [], "any", false, false, false, 185) . "(") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["rh"]) || array_key_exists("rh", $context) ? $context["rh"] : (function () { throw new RuntimeError('Variable "rh" does not exist.', 185, $this->source); })()), "matricule", [], "any", false, false, false, 185)) . ")"), "html", null, true);
            yield "\"/>";
        }
        // line 186
        yield "    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
<div class=\"form-group pull-right\">
 ";
        // line 191
        if (((isset($context["director"]) || array_key_exists("director", $context) ? $context["director"] : (function () { throw new RuntimeError('Variable "director" does not exist.', 191, $this->source); })()) && (isset($context["rh"]) || array_key_exists("rh", $context) ? $context["rh"] : (function () { throw new RuntimeError('Variable "rh" does not exist.', 191, $this->source); })()))) {
            // line 192
            yield "  <button type=\"submit\"class=\"btn btn-primary btn-sm\" id=\"btnform\">Soumettre</button>
 ";
        } else {
            // line 194
            yield "  <button type=\"submit\"class=\"btn btn-primary btn-sm\" id=\"btnform\" disabled>Soumettre</button>
 ";
        }
        // line 196
        yield "</div>
</form>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
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
        return "demand/indexOccasion.html.twig";
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
        return array (  383 => 198,  373 => 197,  364 => 196,  360 => 194,  356 => 192,  354 => 191,  347 => 186,  341 => 185,  337 => 183,  331 => 182,  318 => 171,  312 => 170,  304 => 167,  226 => 91,  220 => 87,  217 => 86,  211 => 82,  209 => 81,  205 => 80,  196 => 73,  187 => 70,  184 => 69,  179 => 68,  170 => 65,  167 => 64,  163 => 63,  156 => 58,  147 => 51,  143 => 49,  139 => 47,  137 => 46,  127 => 39,  114 => 29,  109 => 27,  87 => 7,  77 => 6,  59 => 3,  42 => 1,);
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
\t\t\t Demande pour bénéficier du télétravail occasionnel </h4>
\t\t\t<span class=\"example-spacer\"></span>
\t\t\t<div class=\"menu-user\">
\t\t\t\t<em class=\"fa fa-user\"></em>
\t\t\t\t<span class=\"menu-label\">{{username}}</span>
\t\t\t</div>
\t\t\t\t<input type=\"hidden\" id=\"userconnecetd\" value=\"{{matricule}}\">

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

\t\t     <div class=\"container-fluid\" style=\"margin: 15px;\">
        \t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
\t{% for message in app.flashes('warning') %}
\t\t<div class=\"alert alert-danger\" style=\"width: 98%;\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}
        </div> 
\t</header>





<form\taction=\"{{ path(\"app_demandOccasionnel\") }}\" method=\"post\">
 {% if not director %}
                <div class=\"error-box\">
                Une erreur en raison du champ directeur qui est vide.
    </div>
 {% endif %}
   {% if not rh %}
                <div class=\"error-box\">
                    Une erreur en raison du champ Responsable RH qui est vide.
                </div>
            {% endif %}
<div class=\"col-md-12\" style=\"padding-left: 2%;padding-right: 2%;padding-top:2%\">
  <div class=\"col-md-12\" style=\"padding-left: 0;\">
    <div class=\"well\">
      <p style=\"margin-top: 10px;font-size: 16px;\"><strong>Avant de formuler une demande pour bénéficier du télétravail occasionnel (10 jours/an), nous vous invitons à consulter <a href=\"https://rh.comon/index.php?id=265\" target=\"_blank\">le guide</a> du télétravail précisant notamment les conditions d’éligibilité à ce mode d’organisation du travail.</strong></p><br>
      <table class=\"table table-bordered text-center\">
        <tbody>
          <tr>
            <td><strong>Attestations sur l'honneur nécessaires pour toute demande pour bénéficier du télétravail occasionnel (10 jours/an) :</strong></td>
          </tr>
          <tr>
            <td><input type=\"checkbox\" id=\"assurancehabitationOC\" required> 
            J’atteste sur l’honneur que mon assurance multirisque habitation couvre ma présence en situation de télétravail à mon domicile 
            et que je suis en mesure d’en fournir la preuve en cas de demande par la Direction.
            <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
                                                </td>
          </tr>
          <tr>
            <td><input type=\"checkbox\" id=\"conformiteelectriqueOC\" required> 
            J’atteste sur l’honneur que l’installation électrique du lieu de télétravail répond à l’ensemble des normes de sécurité 
            et aux normes en vigueur.
            <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
                                                </td>
          </tr>
          <tr>
            <td>
            <input type=\"checkbox\" id=\"detecteurfumeeOC\" required> J’atteste sur l’honneur que le lieu de télétravail est équipé
             d’un détecteur de fumée (marquage CE) en état de fonctionnement.
             <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
             </td>
          </tr>
          <tr>
            <td><input type=\"checkbox\" id=\"espacetravailOC\" required >
             J’atteste sur l’honneur disposer d’un espace de travail adapté offrant de bonnes conditions de travail notamment en 
             terme d’ergonomie (luminosité, siège adapté, table de travail, aération, bruit, etc.).
             <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
              </td>
          </tr>
          <tr>
            <td>
            <input type=\"checkbox\" id=\"connexioninternetOC\" required> 
            J’atteste sur l’honneur disposer d’une connexion Internet adaptée à mes besoins professionnels.
            <p class=\"alert alert-danger\" style=\"padding: 8px;margin-top: 5px;display:none;\">
                                                Veuillez cocher cette case si vous souhaitez continuer.
                                                </p>
                                                </td>
          </tr>
        </tbody>
      </table>
      <div class=\"col-sm-12\">
        <br>
        <p style=\"font-size: 16px;\"><strong>Votre demande pour bénéficier du télétravail occasionnel (10 jours/an) sera étudiée par vos Manager et RRH respectifs et fera l'objet d'une réponse sous 1 mois.</strong></p>
      </div>
      <div class=\"clearfix\"></div>
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"clearfix\"></div>
</div>
<div class=\"col-md-12\" style=\"padding-left: 2%;padding-right: 2%;\">
  <div class=\"col-md-12\" style=\"padding-left: 0;\">
<div class=\"well\">

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col\">
    <ul class=\"list-group list-group-flush\">
      <li class=\"list-group-item \" style=\"min-height: 120px;border-radius: 15px;border: double #ddd;\">
        <h1 style=\"font-size: 16px;padding: 0;padding-bottom: 6px;margin-left: 0;margin-top: 5px;\">Directeur</h1>
        <span style=\"font-size: 13px;\" id=\"difr\">{% if director %}{{ director.fullname ~ '(' ~ director.matricule ~ ')' }}{% endif %}</span>
      </li>
    </ul>
                               {% if director %} <input type=\"hidden\" name=\"directeur\" id=\"directedur\" value=\"{{ director.fullname ~ '(' ~ director.matricule ~ ')' }}\"/>{% endif %}

    </div>
       <div class=\"col\">
     <svg height=\"auto\" width=\"100%\" style=\"float: left;position: relative;top: 65px;\">
                                     <line x1=\"0\" y1=\"0\" x2=\"900\" y2=\"0\" style=\"stroke:#ddd;stroke-width : 4\" />

    </div>
    <div class=\"col\">
    <ul class=\"list-group list-group-flush\" style=\"position: relative;\">
      <li class=\"list-group-item \" style=\"min-height: 120px;border-radius: 15px;border: double #ddd;\">
        <h1 style=\"font-size: 16px;padding: 0;padding-bottom: 6px;margin-left: 0;margin-top: 5px;\">Responsable RH</h1>
       {% if rh %} <span style=\"font-size: 13px;\" id=\"rhd\">{{ rh.fullname ~ '(' ~ rh.matricule ~ ')' }}</span>{% endif %}
      </li>
    </ul>
        {% if rh %}  <input type=\"hidden\" name=\"rh1\" id=\"rh1d\" value=\"{{ rh.fullname ~ '(' ~ rh.matricule ~ ')' }}\"/>{% endif %}
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
<div class=\"form-group pull-right\">
 {% if director and rh %}
  <button type=\"submit\"class=\"btn btn-primary btn-sm\" id=\"btnform\">Soumettre</button>
 {% else %}
  <button type=\"submit\"class=\"btn btn-primary btn-sm\" id=\"btnform\" disabled>Soumettre</button>
 {% endif %}
</div>
</form>{% endblock %}{% block javascripts %}
{{ parent() }}<script>
\tif (window.history.replaceState) {
window.history.replaceState(null, null, window.location.href);
}
</script>{% endblock %}
", "demand/indexOccasion.html.twig", "/home/g701091/teletravailjunk/templates/demand/indexOccasion.html.twig");
    }
}
