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

/* home.html.twig */
class __TwigTemplate_972efdf5468147bc88de354c1ecad7c9632e425db7119ed48018e048820c7656 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Home</h1>


<p class=\"important\">
Välkommen till en sida om mig.
<img src=\"img/me2.jpg\" width=\"200px\" alt=\"Me\">
</p>
<p><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl("img/me2.jpg"), "html", null, true);
        echo "\">View the image</a></p>
<p>Mitt namn är Mattias Ahlén. Jag är uppvuxen i Skövde, men bor sedan många i Stockholmstrakten. Jag bor och arbetar i Nacka. Här bor jag med mina 2 pojkar Jakob och David och min fru.</p>



<p>Programmering har alltid intresserat mig. Jag började bli intresserad av datorer och programmering vid mycket tidig ålder. </p>


<p>Jag började med webbprogrammering i mitten på 90-talet. Jag har undervisat i det i många år också.
    Utvecklingen har dock gått rasade snabbt de senaste 20 åren, så det passade bra att gå en kurs. Jag senaste åren lagt ner mer tid på programmering.
 Jag gick 2 kurser i javaprogrammering. Sedan en pythonkurs. Efter det tyckte jag det vore bra att bli bättre på webbprogrammering.
 Jag anmälde mig till kurserna på BTH. På distans och halvfart. Hittills har jag klarat av 15 hp här. Jag tycker att det har varit väldigt roligt och intressant.
</p>

<p>Nästan all min fritid går åt till mina barn, vilket givetvis är väldigt roligt. Förutom det har jag också lyckats börja den här halvtidskursen på BTH ihop med ett heltidsjobb.</p>

<p>Vi syns och hörs i Discord!</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Home{% endblock %}

{% block content %}
<h1>Home</h1>


<p class=\"important\">
Välkommen till en sida om mig.
<img src=\"img/me2.jpg\" width=\"200px\" alt=\"Me\">
</p>
<p><a href=\"{{ absolute_url(\"img/me2.jpg\") }}\">View the image</a></p>
<p>Mitt namn är Mattias Ahlén. Jag är uppvuxen i Skövde, men bor sedan många i Stockholmstrakten. Jag bor och arbetar i Nacka. Här bor jag med mina 2 pojkar Jakob och David och min fru.</p>



<p>Programmering har alltid intresserat mig. Jag började bli intresserad av datorer och programmering vid mycket tidig ålder. </p>


<p>Jag började med webbprogrammering i mitten på 90-talet. Jag har undervisat i det i många år också.
    Utvecklingen har dock gått rasade snabbt de senaste 20 åren, så det passade bra att gå en kurs. Jag senaste åren lagt ner mer tid på programmering.
 Jag gick 2 kurser i javaprogrammering. Sedan en pythonkurs. Efter det tyckte jag det vore bra att bli bättre på webbprogrammering.
 Jag anmälde mig till kurserna på BTH. På distans och halvfart. Hittills har jag klarat av 15 hp här. Jag tycker att det har varit väldigt roligt och intressant.
</p>

<p>Nästan all min fritid går åt till mina barn, vilket givetvis är väldigt roligt. Förutom det har jag också lyckats börja den här halvtidskursen på BTH ihop med ett heltidsjobb.</p>

<p>Vi syns och hörs i Discord!</p>

{% endblock %}
", "home.html.twig", "C:\\cygwin64\\home\\matahl01\\dbwebb-kurser\\mvc\\me\\report\\templates\\home.html.twig");
    }
}
