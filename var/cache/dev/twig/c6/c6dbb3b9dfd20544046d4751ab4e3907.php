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

/* portfolio/index.html.twig */
class __TwigTemplate_9eb71c64ca7c75514fbf0fdd8e4fd675 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/index.html.twig", 1);
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

        echo "Mon Portfolio !";
        
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
\t\t\t\t\t<u>Mon Portfolio :</u>
\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>



<style>


.container {
  width: 100%;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: black;
}

.html {width: 80%; background-color: #04AA6D;}
.css {width: 80%; background-color: #2196F3;}
.python {width: 20%; background-color: #04AA6D;}
.c {width: 90%; background-color: #808080;}
.admin {width: 75%; background-color: #e64d19;}
.reseau {width: 75%; background-color: #04AA6D;}
.projet {width: 90%; background-color: #00ff1e;}
.anglais {width: 80%; background-color: #00ff1e;}



</style>
<body>

<h1>Mes compétences :</h1>

<p>HTML</p>
<div class=\"container\">
  <div class=\"skills html\">80%</div>
</div>

<p>CSS</p>
<div class=\"container\">
  <div class=\"skills css\">80%</div>
</div>

<p>Python</p>
<div class=\"container\">
  <div class=\"skills python\">20%</div>
</div>

<p>Language C</p>
<div class=\"container\">
  <div class=\"skills c\">90%</div>
</div>

<p>Administration système</p>
<div class=\"container\">
  <div class=\"skills admin\">75%</div>
</div>

<p>Administration réseau</p>
<div class=\"container\">
  <div class=\"skills reseau\">75%</div>
</div>

<p>Gestion de Projet</p>
<div class=\"container\">
  <div class=\"skills projet\">90%</div>
</div>


<p>Anglais Technique</p>
<div class=\"container\">
  <div class=\"skills anglais\">80%</div>
</div>
<p> </p>
<p> </p>
<div class=\"container\">
</div>
<p> </p>



  <!-- Meta -->
\t\t\t\t\t\t<a class=\"card-meta\" href=\"\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t</a>

</body>
<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t<!-- / .row -->
        
\t</div>
\t<!-- / .container -->
</section>
        <!-- SHAPE -->
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>
</div>

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
        return "portfolio/index.html.twig";
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

{% block title %}Mon Portfolio !{% endblock %}

{% block body %}
<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
                        <!-- WELCOME -->
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Mon Portfolio :</u>
\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>



<style>


.container {
  width: 100%;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: black;
}

.html {width: 80%; background-color: #04AA6D;}
.css {width: 80%; background-color: #2196F3;}
.python {width: 20%; background-color: #04AA6D;}
.c {width: 90%; background-color: #808080;}
.admin {width: 75%; background-color: #e64d19;}
.reseau {width: 75%; background-color: #04AA6D;}
.projet {width: 90%; background-color: #00ff1e;}
.anglais {width: 80%; background-color: #00ff1e;}



</style>
<body>

<h1>Mes compétences :</h1>

<p>HTML</p>
<div class=\"container\">
  <div class=\"skills html\">80%</div>
</div>

<p>CSS</p>
<div class=\"container\">
  <div class=\"skills css\">80%</div>
</div>

<p>Python</p>
<div class=\"container\">
  <div class=\"skills python\">20%</div>
</div>

<p>Language C</p>
<div class=\"container\">
  <div class=\"skills c\">90%</div>
</div>

<p>Administration système</p>
<div class=\"container\">
  <div class=\"skills admin\">75%</div>
</div>

<p>Administration réseau</p>
<div class=\"container\">
  <div class=\"skills reseau\">75%</div>
</div>

<p>Gestion de Projet</p>
<div class=\"container\">
  <div class=\"skills projet\">90%</div>
</div>


<p>Anglais Technique</p>
<div class=\"container\">
  <div class=\"skills anglais\">80%</div>
</div>
<p> </p>
<p> </p>
<div class=\"container\">
</div>
<p> </p>



  <!-- Meta -->
\t\t\t\t\t\t<a class=\"card-meta\" href=\"\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t</a>

</body>
<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t<!-- / .row -->
        
\t</div>
\t<!-- / .container -->
</section>
        <!-- SHAPE -->
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>
</div>

</body>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('home') }}
{% endblock %}
", "portfolio/index.html.twig", "C:\\Users\\Utilisateur\\Symfony\\blog2\\SymfonyFinal\\templates\\portfolio\\index.html.twig");
    }
}
