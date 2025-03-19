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

/* emails/planification.html.twig */
class __TwigTemplate_e1f4f3e1639a74721cf775a44d2ef728 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/planification.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Planification organisation du travail</title>
</head>
<body>
<p>Bonjour,</p>

<p>Malheureusement, nous constatons que vous n’avez pas satisfait à notre demande impérative de renseigner le workflow «
    Planification du mode d’organisation du travail (Campus Rueil) ».</p>

<p>Comme vous le savez <strong>cette planification individuelle est indispensable</strong> pour répondre au besoin de
    visibilité sur les effectifs présents
    chaque jour afin de garantir le respect de la jauge précédemment établie pour le Campus ainsi que les services
    nécessaires à chacun (restauration, navettes, masques ...)
    dans le cadre des mesures prises face à la crise Covid-19.</p>

<p>En conséquence, il vous appartient, et ce sans délai, de communiquer à titre correctif, par mail, auprès de
    l’assistante RH concernée (copie votre RRH) les informations attendues.</p>

<p>A l’avenir, nous comptons sur votre diligence pour renseigner le workflow suivant le process décrit dans les
    différentes notes d’information interne qui vous ont été adressées.</p>
<br>
<p>Bien cordialement.</p>

<p>La Direction des Ressources Humaines.</p>

<p>Nb : Bien entendu si vous êtes en situation d’arrêt de travail ou en congé durant toute la période de saisie
    possible, vous ne tiendrez pas compte de ce rappel.</p>

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
        return "emails/planification.html.twig";
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
    <title>Planification organisation du travail</title>
</head>
<body>
<p>Bonjour,</p>

<p>Malheureusement, nous constatons que vous n’avez pas satisfait à notre demande impérative de renseigner le workflow «
    Planification du mode d’organisation du travail (Campus Rueil) ».</p>

<p>Comme vous le savez <strong>cette planification individuelle est indispensable</strong> pour répondre au besoin de
    visibilité sur les effectifs présents
    chaque jour afin de garantir le respect de la jauge précédemment établie pour le Campus ainsi que les services
    nécessaires à chacun (restauration, navettes, masques ...)
    dans le cadre des mesures prises face à la crise Covid-19.</p>

<p>En conséquence, il vous appartient, et ce sans délai, de communiquer à titre correctif, par mail, auprès de
    l’assistante RH concernée (copie votre RRH) les informations attendues.</p>

<p>A l’avenir, nous comptons sur votre diligence pour renseigner le workflow suivant le process décrit dans les
    différentes notes d’information interne qui vous ont été adressées.</p>
<br>
<p>Bien cordialement.</p>

<p>La Direction des Ressources Humaines.</p>

<p>Nb : Bien entendu si vous êtes en situation d’arrêt de travail ou en congé durant toute la période de saisie
    possible, vous ne tiendrez pas compte de ce rappel.</p>

</body>
</html>
", "emails/planification.html.twig", "/home/g701091/teletravailjunk/templates/emails/planification.html.twig");
    }
}
