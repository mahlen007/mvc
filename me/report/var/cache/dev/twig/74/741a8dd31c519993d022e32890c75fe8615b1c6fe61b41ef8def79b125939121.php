<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* report/kmom01.markdown.twig */
class __TwigTemplate_ffecff5d6f343e0b2c361442163dd92c53e4e4489161313aeb68bb0eb985fbc6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/kmom01.markdown.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/kmom01.markdown.twig"));

        // line 1
        echo "kmom01
-------------------
Min första erfarenhet från objektorientering är en kurs som handlade om objektsorienterad Java, som jag läste
på distans vid Luleås tekniska högskola. Det var en krävande men verkligen givande kurs. Jag har även
varit inne en del i ämnet när jag undervisar gymnasieelever i programmering. Det ingår inte så mycket, men
vi håller på en del med egna klasser och javas klasser.

En klass är en egen datatyp. Det går att koppla medlemsvariabler och medlemsmetoder till den.
Medlemsvariablerna brukar oftast sättas till privata och nås enbart inom klassen.
Metoderna brukar vara publika och nås utanför klassen. Anledningen till att man gör så här
är för att skydda vilka värden som lagras.

Jag tycker att kodbasen, koden och strukturen känns igen väl från tidigare kurser.
Det här med router var väldigt likt databaskursen. Många delar påminde även om teknik från webtec-kursen.

Intressant från artikeln “PHP The Right Way” är skillnad när man programmerar objektsorienterat med hjälp av klasser och
när man inte använder sig av klasser. Särskilt intressant är vilka skillnader det blir.
Jag tyckte också det var intressant på vilket sätt man använder templates. Mycket användbart.

Min TIL för denna vecka är att det gäller att lägga sakerna i rätt kataloger. Jag lyckades lägga i rätt katalog,
men katalogen var på fel ställe i filstrukturen. Det tog ett tag att hitta felet. En annan TIL är att det krävs
ganska mycket arbeta för installera och komma igång med arbetet. Det är något jag behöver bli bättre på.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "report/kmom01.markdown.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("kmom01
-------------------
Min första erfarenhet från objektorientering är en kurs som handlade om objektsorienterad Java, som jag läste
på distans vid Luleås tekniska högskola. Det var en krävande men verkligen givande kurs. Jag har även
varit inne en del i ämnet när jag undervisar gymnasieelever i programmering. Det ingår inte så mycket, men
vi håller på en del med egna klasser och javas klasser.

En klass är en egen datatyp. Det går att koppla medlemsvariabler och medlemsmetoder till den.
Medlemsvariablerna brukar oftast sättas till privata och nås enbart inom klassen.
Metoderna brukar vara publika och nås utanför klassen. Anledningen till att man gör så här
är för att skydda vilka värden som lagras.

Jag tycker att kodbasen, koden och strukturen känns igen väl från tidigare kurser.
Det här med router var väldigt likt databaskursen. Många delar påminde även om teknik från webtec-kursen.

Intressant från artikeln “PHP The Right Way” är skillnad när man programmerar objektsorienterat med hjälp av klasser och
när man inte använder sig av klasser. Särskilt intressant är vilka skillnader det blir.
Jag tyckte också det var intressant på vilket sätt man använder templates. Mycket användbart.

Min TIL för denna vecka är att det gäller att lägga sakerna i rätt kataloger. Jag lyckades lägga i rätt katalog,
men katalogen var på fel ställe i filstrukturen. Det tog ett tag att hitta felet. En annan TIL är att det krävs
ganska mycket arbeta för installera och komma igång med arbetet. Det är något jag behöver bli bättre på.
", "report/kmom01.markdown.twig", "C:\\cygwin64\\home\\matahl01\\dbwebb-kurser\\mvc\\me\\report\\templates\\report\\kmom01.markdown.twig");
    }
}
