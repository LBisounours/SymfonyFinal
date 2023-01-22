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

/* base.html.twig */
class __TwigTemplate_2e28938bc97b201051005636635acfba extends Template
{
    private $source;
    private $macros = [];

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel= \"stylesheet\" href=\"https://bootswatch.com/5/flatly/bootstrap.min.css\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    </head>
        <head>
    <style type=\"text/css\">
    table, caption, th, td {

    border: 2px solid skyblue;
    border-collapse: collapse;

    }
    caption, th, td {

    padding: 8px;

    }

    th {

    background-color: gray;

    }

    </style>
    </head>
    <body>


    
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img loading=\"lazy\" width=\"35\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://media.discordapp.net/attachments/968955109155418132/1066347353130410045/588a666dd06f6719692a2d18.png"), "html", null, true);
        echo "\" />
\t\t</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">

\t\t<!-- Brand -->

\t\t<!-- Toggler -->
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<!-- Collapse -->
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">

\t\t\t<!-- Toggler -->
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<i class=\"fe fe-x\"></i>
\t\t\t</button>

\t\t\t<!-- Navigation -->
\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a href=\"/portfolio\" class=\"nav-link\">Portfolio</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a href=\"/cv\" class=\"nav-link\">CV</a>
\t\t\t</ul>

\t\t\t<!-- Button -->
\t\t\t<a class=\"navbar-btn btn btn-sm btn-primary lift ms-auto\" href=\"/contact\">
\t\t\t\tMe contacter
\t\t\t</a>

\t\t</div>

\t</div>
</nav>

        <div class=\"container\">
        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "        
        </div>
        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "        
    </body>
\t\t
    <!-- FOOTER -->
<footer class=\"py-8 py-md-11 bg-dark\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-4 col-lg-3\">
            

\t\t\t\t<!-- Brand -->
\t\t\t\t<img loading=\"lazy\" width=\"30\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://media.discordapp.net/attachments/968955109155418132/1066360696494895135/1200px-Copyright.svg.png?width=639&height=639"), "html", null, true);
        echo "\" />

\t\t\t\t<!-- Text -->
\t\t\t\t<p class=\"text-gray-700 mb-2\">
\t\t\t\t</p>
\t\t\t</div>
            

\t\t\t<div class=\"col-12 col-md-4 col-lg-2\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<h6 class=\"fw-bold text-uppercase text-gray\">
\t\t\t\t\tMenu
\t\t\t\t</h6>

\t\t\t\t<!-- List -->
\t\t\t\t<ul class=\"list-unstyled text-black mb-6 mb-md-8 mb-lg-0\">
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"/portfolio\" class=\"text-reset\">
\t\t\t\t\t\t\tMon Portfolio
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"/cv\" class=\"text-reset\">
\t\t\t\t\t\t\tMon CV
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/contact\" class=\"text-reset\">
\t\t\t\t\t\t\tMe contacter
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->
</footer>
    
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bisounours";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 80,  245 => 77,  226 => 7,  207 => 5,  155 => 92,  142 => 81,  140 => 80,  136 => 78,  134 => 77,  92 => 38,  60 => 8,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Bisounours{% endblock %}</title>
        <link rel= \"stylesheet\" href=\"https://bootswatch.com/5/flatly/bootstrap.min.css\">
        {% block stylesheets %} {% endblock %}
    </head>
        <head>
    <style type=\"text/css\">
    table, caption, th, td {

    border: 2px solid skyblue;
    border-collapse: collapse;

    }
    caption, th, td {

    padding: 8px;

    }

    th {

    background-color: gray;

    }

    </style>
    </head>
    <body>


    
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img loading=\"lazy\" width=\"35\" src=\"{{ asset('https://media.discordapp.net/attachments/968955109155418132/1066347353130410045/588a666dd06f6719692a2d18.png') }}\" />
\t\t</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">

\t\t<!-- Brand -->

\t\t<!-- Toggler -->
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<!-- Collapse -->
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">

\t\t\t<!-- Toggler -->
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<i class=\"fe fe-x\"></i>
\t\t\t</button>

\t\t\t<!-- Navigation -->
\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a href=\"/portfolio\" class=\"nav-link\">Portfolio</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a href=\"/cv\" class=\"nav-link\">CV</a>
\t\t\t</ul>

\t\t\t<!-- Button -->
\t\t\t<a class=\"navbar-btn btn btn-sm btn-primary lift ms-auto\" href=\"/contact\">
\t\t\t\tMe contacter
\t\t\t</a>

\t\t</div>

\t</div>
</nav>

        <div class=\"container\">
        {% block body %}{% endblock %}
        
        </div>
        {% block javascripts %}{% endblock %}
        
    </body>
\t\t
    <!-- FOOTER -->
<footer class=\"py-8 py-md-11 bg-dark\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 col-md-4 col-lg-3\">
            

\t\t\t\t<!-- Brand -->
\t\t\t\t<img loading=\"lazy\" width=\"30\" src=\"{{ asset('https://media.discordapp.net/attachments/968955109155418132/1066360696494895135/1200px-Copyright.svg.png?width=639&height=639') }}\" />

\t\t\t\t<!-- Text -->
\t\t\t\t<p class=\"text-gray-700 mb-2\">
\t\t\t\t</p>
\t\t\t</div>
            

\t\t\t<div class=\"col-12 col-md-4 col-lg-2\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<h6 class=\"fw-bold text-uppercase text-gray\">
\t\t\t\t\tMenu
\t\t\t\t</h6>

\t\t\t\t<!-- List -->
\t\t\t\t<ul class=\"list-unstyled text-black mb-6 mb-md-8 mb-lg-0\">
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"/portfolio\" class=\"text-reset\">
\t\t\t\t\t\t\tMon Portfolio
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"/cv\" class=\"text-reset\">
\t\t\t\t\t\t\tMon CV
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/contact\" class=\"text-reset\">
\t\t\t\t\t\t\tMe contacter
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t<!-- / .row -->
\t</div>
\t<!-- / .container -->
</footer>
    
</html>
", "base.html.twig", "C:\\Users\\Utilisateur\\Symfony\\blog2\\SymfonyFinal\\templates\\base.html.twig");
    }
}
