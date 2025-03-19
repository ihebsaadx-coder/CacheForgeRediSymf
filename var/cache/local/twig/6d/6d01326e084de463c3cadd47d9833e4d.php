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

/* emails/allplanifications.html.twig */
class __TwigTemplate_fce7117c6167dcd3eee48e953a2842e9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/allplanifications.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Planification</title>
</head>
<body>
<p>Bonjour,</p>
<p>Ci-joint le rapport de la liste des demandes qui ont été faites sur l’outil «planification du mode d’organisation du travail à Rueil » depuis l’origine.</p>
<p>Bien cordialement.</p>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/allplanifications.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Planification</title>
</head>
<body>
<p>Bonjour,</p>
<p>Ci-joint le rapport de la liste des demandes qui ont été faites sur l’outil «planification du mode d’organisation du travail à Rueil » depuis l’origine.</p>
<p>Bien cordialement.</p>
</body>
</html>
", "emails/allplanifications.html.twig", "/home/g701091/teletravailjunk/templates/emails/allplanifications.html.twig");
    }
}
