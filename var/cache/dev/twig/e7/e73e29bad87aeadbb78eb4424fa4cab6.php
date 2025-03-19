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

/* base.html.twig */
class __TwigTemplate_7499ac581e01341657ff091b3e84cf0b extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 8
        yield "\t\t</title>
\t\t";
        // line 11
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "
\t\t<style>
\t\t\t* {
\t\t\t\tline-height: 20px;
\t\t\t}

\t\t\t.ui-helper-hidden-accessible {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t.ui-widget.ui-widget-content {
\t\t\t\tz-index: 9999999999999999;
\t\t\t}

\t\t\t#flasher-container-top-right {
\t\t\t\tleft: 50% !important;
\t\t\t\tposition: fixed !important;
\t\t\t\ttransform: translate(-50%, 50%) !important;
\t\t\t\tcolor: #fff !important;
\t\t\t\ttop: 20% !important;
\t\t\t}
\t\t\t.example-wrapper {
  margin: 1em auto;
  max-width: 100%;
  width: 95%;
  background: #ececec;
}

.example-wrapper code {
  background: #f5f5f5;
  padding: 2px 6px;
}

.jumbotron h1 {
  color: #555;
  font-size: 28px;
  font-weight: 400;
  float: none;
  text-shadow: 0 1px 0 #ccc;
  margin-left: 20px;
  position: relative;
  border-bottom: 2px solid #ccc;
  padding-bottom: 25px;
}

.jumbotron h4 {
  color: #555;
  float: none;
  border-bottom: 2px solid #ccc;
  padding-bottom: 5px;
  margin-top: 20px;
  margin-bottom: 26px;
}

.jumbotron {
  padding: 2rem 2rem;
  padding-bottom: 3rem;
}

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}

.well-lg {
  padding: 24px;
  border-radius: 6px;
}

.well-sm {
  padding: 9px;
  border-radius: 3px;
}

.card {
  width: 80%;
  margin: auto;
  border-radius: 10px !important;
  margin-top: 10px;
}

.example-spacer {
  flex: 1 1 auto;
}

.logo {
  color: #fff;
  margin-left: 10px;
}

.navbar-primary {
  height: 52px;
  background-color: #222221;
}

.navbar-secondary {

  background-color: #0080ff;
}

.fa {
  color: #fff;
}

.menu-label {
  color: #fff;
  font-weight: bold;
}

.menu-user {
  margin-right: 20px;
}

.form-group {
  margin-top: 10px;
}

select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

#btn {
  height: 23px;
  padding: 0px;
  width: 83px;
  font-size: 0.9rem;
}

.btna {
  font-size: 0.7rem !important;
}



#btni {
  background-color: #222221;
  border-color: #0b0b0b;
}


#searchbar {
  background-color: rgb(236, 236, 236);
  height: 47px;
  padding-top: 4px;
}

#example_filter>label {
  float: right;
}

.pagination {
  float: right;
}

#example2_filter>label {
  float: right;
}

.pagination2 {
  float: right;
}


#example3_filter>label {
  float: right;
}


#example4_filter>label {
  float: right;
}


table.table {
  table-layout: fixed;
}

table {
  border-collapse: collapse;
}

.table thead>tr>th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}

#example4_filter>label {
  float: right;
}

.modal-backdrop.fade {
  opacity: 0.5;
  filter: alpha(opacity=50);
}

.modal-backdrop.fade.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}

#rounded-pil {
  font-size: 14px;
}

.tooltip-color {
  color: red
}

.algolia-autocomplete {
  width: 100%;
}

.algolia-autocomplete .aa-input,
.algolia-autocomplete .aa-hint {
  width: 100%;
}

.algolia-autocomplete .aa-hint {
  color: #999;
}

.algolia-autocomplete .aa-dropdown-menu {
  width: 100%;
  background-color: #fff;
  border: 1px solid #999;
  border-top: none;
}

.algolia-autocomplete .aa-dropdown-menu .aa-suggestion {
  cursor: pointer;
  padding: 5px 4px;
}

.numDPI {
  /* margin-bottom: 2%; */
  /* margin-top: 2%; */
}

.titreInvention {
  /* margin-top: 2%; */
  /* margin-bottom: 2%; */
}

.commentDPI {
  /* margin-bottom: 2%; */
}

#flasher-container-top-right {
  left: 50% !important;
  position: fixed !important;
  transform: translate(-50%, 50%) !important;
  color: #fff !important;
  top: 20% !important;
}

.algolia-autocomplete .aa-dropdown-menu .aa-suggestion.aa-cursor {
  background-color: #b2d7ff;
}

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}

.well-lg {
  padding: 24px;
  border-radius: 6px;
}

.well-sm {
  padding: 9px;
  border-radius: 3px;
}

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 70px;
  height: 70px;
  -webkit-animation: spin 2s linear infinite;
  /* Safari */
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

.algolia-autocomplete .aa-dropdown-menu .aa-suggestion em {
  font-weight: bold;
  font-style: normal;
}

#header {
  height: 62px;
  position: relative;
  width: 100%;
  /*z-index: -7;*/
  background: #000;
}

#header h1 a {
  color: #fff;
  text-decoration: none;
}

#header h1 {
  padding-left: 10px;
  line-height: 66px;
  overflow: hidden;
  position: relative;
  top: -2px;
  width: auto;
  margin-top: 0;
}

#user-nav {
  position: absolute;
  right: 0;
  top: 0;
  z-index: 11;
  margin: 0;
}

#user-nav>ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

#user-nav>ul>li {
  float: left;
  list-style-type: none;
  margin: 0;
  position: relative;
  /*padding: 5px 0;*/
  background: #000;
  border-left: 1px solid #363e48;
}

#user-nav>ul>li>a {
  cursor: pointer;
  padding: 15px 10px;
  display: block;
  font-size: 12px;
  text-decoration: none;
}

.navbar-inverse .brand,
.navbar-inverse .nav>li>a {
  color: #999;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

#user-nav>ul>li.open>a,
#user-nav>ul>li>a:hover {
  color: #fff;
  background: 0 0;
  text-decoration: none;
}

.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.col-md-4 {
  float: left;
}

.styleText {
  width: 100%;
  font-family: inherit;
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  font-weight: 500;
  box-shadow: 4px 4px 4px #ddd;
  padding-top: 5px;
  padding: 19px;
  font-size: 19px;
  background-color: #f5f5f587;
  text-shadow: 0 1px 0 #ccc;
  margin-left: 20px;
  border-bottom: 2px solid #ccc;
  padding-bottom: 25px;
}

.gris-dark {
  color: #222221;
}

.gris-ligth {
  color: #eee;
}

.name-formation {
  border: 1px solid #222221;
  background: #eee;
  color: #222221;
  display: block;
  text-transform: capitalize;
}

.bkg-gris {
  border: 1px solid #222221;
  background: #eee;
  padding: 5px 16px;
}

.border-formation,
.border-formation tr,
.border-formation tr th,
.border-formation tr td {
  border: 2px solid #222221 !important;
}

.btn-custom {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

.btn-custom:hover {
  color: #0056b3;
  text-decoration: underline;
}

.jumbotron h1 {
  color: #555;
  font-size: 28px;
  font-weight: 400;
  float: none;
  text-shadow: 0 1px 0 #ccc;
  margin-left: 20px;
  position: relative;
  border-bottom: 2px solid #ccc;
  padding-bottom: 25px;
}

.jumbotron h4 {
  color: #555;
  float: none;
  border-bottom: 2px solid #ccc;
  padding-bottom: 5px;
  margin-top: 20px;
  margin-bottom: 26px;
}

.jumbotron {
  padding: 2rem 2rem;
  padding-bottom: 3rem;
}

.widthStatus {
  width: 80px;
}

td.details-control {
  background: url(\"https://datatables.net/examples/resources/details_open.png\") no-repeat center center;
  cursor: pointer;
}

tr.shown td.details-control {
  background: url(https://datatables.net/examples/resources/details_close.png) no-repeat center center;
}}
\t\t</style>
\t</head>
\t
\t<body>
\t\t";
        // line 534
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 535
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 540
        yield "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "\t\t\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("appcss");
        yield "
\t\t\t";
        // line 13
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("bootstrap");
        yield "
\t\t\t";
        // line 14
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("font-css");
        yield "
\t\t";
        // line 16
        yield "\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 534
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 535
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 536
        yield "\t\t\t";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
\t\t\t";
        // line 537
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("bootstrapjs");
        yield "
      ";
        // line 538
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("autocomplete");
        yield "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  709 => 538,  705 => 537,  700 => 536,  687 => 535,  665 => 534,  653 => 16,  649 => 14,  645 => 13,  640 => 12,  627 => 11,  603 => 6,  590 => 540,  587 => 535,  585 => 534,  67 => 18,  64 => 11,  61 => 8,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t{# Run `composer require symfony/webpack-encore-bundle`
\t\t\t\tand uncomment the following Encore helpers to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('appcss') }}
\t\t\t{{ encore_entry_link_tags('bootstrap') }}
\t\t\t{{ encore_entry_link_tags('font-css')}}
\t\t{# //\t{{ encore_entry_link_tags('select2css')}} #}
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css\">
\t\t{% endblock %}

\t\t<style>
\t\t\t* {
\t\t\t\tline-height: 20px;
\t\t\t}

\t\t\t.ui-helper-hidden-accessible {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t.ui-widget.ui-widget-content {
\t\t\t\tz-index: 9999999999999999;
\t\t\t}

\t\t\t#flasher-container-top-right {
\t\t\t\tleft: 50% !important;
\t\t\t\tposition: fixed !important;
\t\t\t\ttransform: translate(-50%, 50%) !important;
\t\t\t\tcolor: #fff !important;
\t\t\t\ttop: 20% !important;
\t\t\t}
\t\t\t.example-wrapper {
  margin: 1em auto;
  max-width: 100%;
  width: 95%;
  background: #ececec;
}

.example-wrapper code {
  background: #f5f5f5;
  padding: 2px 6px;
}

.jumbotron h1 {
  color: #555;
  font-size: 28px;
  font-weight: 400;
  float: none;
  text-shadow: 0 1px 0 #ccc;
  margin-left: 20px;
  position: relative;
  border-bottom: 2px solid #ccc;
  padding-bottom: 25px;
}

.jumbotron h4 {
  color: #555;
  float: none;
  border-bottom: 2px solid #ccc;
  padding-bottom: 5px;
  margin-top: 20px;
  margin-bottom: 26px;
}

.jumbotron {
  padding: 2rem 2rem;
  padding-bottom: 3rem;
}

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}

.well-lg {
  padding: 24px;
  border-radius: 6px;
}

.well-sm {
  padding: 9px;
  border-radius: 3px;
}

.card {
  width: 80%;
  margin: auto;
  border-radius: 10px !important;
  margin-top: 10px;
}

.example-spacer {
  flex: 1 1 auto;
}

.logo {
  color: #fff;
  margin-left: 10px;
}

.navbar-primary {
  height: 52px;
  background-color: #222221;
}

.navbar-secondary {

  background-color: #0080ff;
}

.fa {
  color: #fff;
}

.menu-label {
  color: #fff;
  font-weight: bold;
}

.menu-user {
  margin-right: 20px;
}

.form-group {
  margin-top: 10px;
}

select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

#btn {
  height: 23px;
  padding: 0px;
  width: 83px;
  font-size: 0.9rem;
}

.btna {
  font-size: 0.7rem !important;
}



#btni {
  background-color: #222221;
  border-color: #0b0b0b;
}


#searchbar {
  background-color: rgb(236, 236, 236);
  height: 47px;
  padding-top: 4px;
}

#example_filter>label {
  float: right;
}

.pagination {
  float: right;
}

#example2_filter>label {
  float: right;
}

.pagination2 {
  float: right;
}


#example3_filter>label {
  float: right;
}


#example4_filter>label {
  float: right;
}


table.table {
  table-layout: fixed;
}

table {
  border-collapse: collapse;
}

.table thead>tr>th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}

#example4_filter>label {
  float: right;
}

.modal-backdrop.fade {
  opacity: 0.5;
  filter: alpha(opacity=50);
}

.modal-backdrop.fade.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}

#rounded-pil {
  font-size: 14px;
}

.tooltip-color {
  color: red
}

.algolia-autocomplete {
  width: 100%;
}

.algolia-autocomplete .aa-input,
.algolia-autocomplete .aa-hint {
  width: 100%;
}

.algolia-autocomplete .aa-hint {
  color: #999;
}

.algolia-autocomplete .aa-dropdown-menu {
  width: 100%;
  background-color: #fff;
  border: 1px solid #999;
  border-top: none;
}

.algolia-autocomplete .aa-dropdown-menu .aa-suggestion {
  cursor: pointer;
  padding: 5px 4px;
}

.numDPI {
  /* margin-bottom: 2%; */
  /* margin-top: 2%; */
}

.titreInvention {
  /* margin-top: 2%; */
  /* margin-bottom: 2%; */
}

.commentDPI {
  /* margin-bottom: 2%; */
}

#flasher-container-top-right {
  left: 50% !important;
  position: fixed !important;
  transform: translate(-50%, 50%) !important;
  color: #fff !important;
  top: 20% !important;
}

.algolia-autocomplete .aa-dropdown-menu .aa-suggestion.aa-cursor {
  background-color: #b2d7ff;
}

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}

.well-lg {
  padding: 24px;
  border-radius: 6px;
}

.well-sm {
  padding: 9px;
  border-radius: 3px;
}

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 70px;
  height: 70px;
  -webkit-animation: spin 2s linear infinite;
  /* Safari */
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

.algolia-autocomplete .aa-dropdown-menu .aa-suggestion em {
  font-weight: bold;
  font-style: normal;
}

#header {
  height: 62px;
  position: relative;
  width: 100%;
  /*z-index: -7;*/
  background: #000;
}

#header h1 a {
  color: #fff;
  text-decoration: none;
}

#header h1 {
  padding-left: 10px;
  line-height: 66px;
  overflow: hidden;
  position: relative;
  top: -2px;
  width: auto;
  margin-top: 0;
}

#user-nav {
  position: absolute;
  right: 0;
  top: 0;
  z-index: 11;
  margin: 0;
}

#user-nav>ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

#user-nav>ul>li {
  float: left;
  list-style-type: none;
  margin: 0;
  position: relative;
  /*padding: 5px 0;*/
  background: #000;
  border-left: 1px solid #363e48;
}

#user-nav>ul>li>a {
  cursor: pointer;
  padding: 15px 10px;
  display: block;
  font-size: 12px;
  text-decoration: none;
}

.navbar-inverse .brand,
.navbar-inverse .nav>li>a {
  color: #999;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

#user-nav>ul>li.open>a,
#user-nav>ul>li>a:hover {
  color: #fff;
  background: 0 0;
  text-decoration: none;
}

.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.col-md-4 {
  float: left;
}

.styleText {
  width: 100%;
  font-family: inherit;
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  font-weight: 500;
  box-shadow: 4px 4px 4px #ddd;
  padding-top: 5px;
  padding: 19px;
  font-size: 19px;
  background-color: #f5f5f587;
  text-shadow: 0 1px 0 #ccc;
  margin-left: 20px;
  border-bottom: 2px solid #ccc;
  padding-bottom: 25px;
}

.gris-dark {
  color: #222221;
}

.gris-ligth {
  color: #eee;
}

.name-formation {
  border: 1px solid #222221;
  background: #eee;
  color: #222221;
  display: block;
  text-transform: capitalize;
}

.bkg-gris {
  border: 1px solid #222221;
  background: #eee;
  padding: 5px 16px;
}

.border-formation,
.border-formation tr,
.border-formation tr th,
.border-formation tr td {
  border: 2px solid #222221 !important;
}

.btn-custom {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

.btn-custom:hover {
  color: #0056b3;
  text-decoration: underline;
}

.jumbotron h1 {
  color: #555;
  font-size: 28px;
  font-weight: 400;
  float: none;
  text-shadow: 0 1px 0 #ccc;
  margin-left: 20px;
  position: relative;
  border-bottom: 2px solid #ccc;
  padding-bottom: 25px;
}

.jumbotron h4 {
  color: #555;
  float: none;
  border-bottom: 2px solid #ccc;
  padding-bottom: 5px;
  margin-top: 20px;
  margin-bottom: 26px;
}

.jumbotron {
  padding: 2rem 2rem;
  padding-bottom: 3rem;
}

.widthStatus {
  width: 80px;
}

td.details-control {
  background: url(\"https://datatables.net/examples/resources/details_open.png\") no-repeat center center;
  cursor: pointer;
}

tr.shown td.details-control {
  background: url(https://datatables.net/examples/resources/details_close.png) no-repeat center center;
}}
\t\t</style>
\t</head>
\t
\t<body>
\t\t{% block body %}{% endblock %}
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t{{ encore_entry_script_tags('bootstrapjs') }}
      {{ encore_entry_script_tags('autocomplete') }}
\t\t{% endblock %}
\t</body>
</html>
", "base.html.twig", "/var/www/teletravailjunk/templates/base.html.twig");
    }
}
