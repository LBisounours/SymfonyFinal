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

/* cv/index.html.twig */
class __TwigTemplate_f6ee2b5e53c56644a571b6365f4827bc extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cv/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon CV !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
            <!-- WELCOME -->
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Mon CV :</u>
\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>
\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->

\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->
</section>
    <!-- ARTICLES -->
<section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">

\t\t\t</div>
\t\t</div>


\t\t<!-- Heading -->
\t\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">
\t\t\t\t<h2>
\t\t\t\t\tJobs de mes rêves :
\t\t<!-- Text -->
\t\t\t\t<p class=\"lead text-white-75 mb-6\">
\t\t\t\t\tDéveloppeur dans le monde du jeux vidéo.
\t\t\t\t</p>
\t\t\t\t</h2>


</div>
    <section>
 <div class=\"contener\"> 
    <h4><h4>
        <div class=\"contener\"> 
            <h3> Formations <h3>
            <p>-Annee 2022-2023 : Bachelor Universitaire Technologique Reseaux et Telecommunication<br> 
            -Annee 2021-2022 : Baccalaureat STAV production animal </p>

        </div>


    <div class=\"contener\">

        <h3>Experience professionnel <h3>
       
        <p>-2019 Stage chez un vétérinaire pendant 2 semaines.<br> 
\t\t-2021 Stage dans une ferme pendant 3 semaines.<br> 
\t\t-2022 Stage dans une ferme pendant 3 semaines.</p>

    </div>

    <div class=\"contener\"> 
 
        <h3>Competences<h3>
        
        <p>-Bonne matrise du langage C <br>-Installation d'un poste client</p>
 
    </div>

</div>
    </section>
<style> 
.cas{
width: 7px;
margin: auto;
font-family: 'calibri',sans-serif;
font-size: 2px;
border: 4px solid black;
border-radius: 1px;
padding:24px;
}
.contener{
    margin-buttom: 1px;
    text-align: center;
}
 
 h4 , h3 {
    font-size: 25px;
    border-bottom: 4px solid skyblue;
 }
body{
background-repeat: no-repeat;
background-size: 10vw 10vh;
} 
</style>
\t</div>
\t<!-- / .container -->
</section>



<!-- Meta -->
\t\t\t\t\t\t<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t<!-- / .row -->
        <!-- SHAPE -->
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("home"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cv/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 134,  224 => 133,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon CV !{% endblock %}

{% block body %}
<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
            <!-- WELCOME -->
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Mon CV :</u>
\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>
\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->

\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->
</section>
    <!-- ARTICLES -->
<section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">

\t\t\t</div>
\t\t</div>


\t\t<!-- Heading -->
\t\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">
\t\t\t\t<h2>
\t\t\t\t\tJobs de mes rêves :
\t\t<!-- Text -->
\t\t\t\t<p class=\"lead text-white-75 mb-6\">
\t\t\t\t\tDéveloppeur dans le monde du jeux vidéo.
\t\t\t\t</p>
\t\t\t\t</h2>


</div>
    <section>
 <div class=\"contener\"> 
    <h4><h4>
        <div class=\"contener\"> 
            <h3> Formations <h3>
            <p>-Annee 2022-2023 : Bachelor Universitaire Technologique Reseaux et Telecommunication<br> 
            -Annee 2021-2022 : Baccalaureat STAV production animal </p>

        </div>


    <div class=\"contener\">

        <h3>Experience professionnel <h3>
       
        <p>-2019 Stage chez un vétérinaire pendant 2 semaines.<br> 
\t\t-2021 Stage dans une ferme pendant 3 semaines.<br> 
\t\t-2022 Stage dans une ferme pendant 3 semaines.</p>

    </div>

    <div class=\"contener\"> 
 
        <h3>Competences<h3>
        
        <p>-Bonne matrise du langage C <br>-Installation d'un poste client</p>
 
    </div>

</div>
    </section>
<style> 
.cas{
width: 7px;
margin: auto;
font-family: 'calibri',sans-serif;
font-size: 2px;
border: 4px solid black;
border-radius: 1px;
padding:24px;
}
.contener{
    margin-buttom: 1px;
    text-align: center;
}
 
 h4 , h3 {
    font-size: 25px;
    border-bottom: 4px solid skyblue;
 }
body{
background-repeat: no-repeat;
background-size: 10vw 10vh;
} 
</style>
\t</div>
\t<!-- / .container -->
</section>



<!-- Meta -->
\t\t\t\t\t\t<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t<!-- / .row -->
        <!-- SHAPE -->
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>
</body>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('home') }}
{% endblock %}
", "cv/index.html.twig", "C:\\Users\\Utilisateur\\Symfony\\blog2\\SymfonyFinal\\templates\\cv\\index.html.twig");
    }
}
