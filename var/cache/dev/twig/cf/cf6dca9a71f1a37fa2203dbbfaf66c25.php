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
class __TwigTemplate_63dad70ea7322654e5d4c1e47c5aea80 extends Template
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
        echo "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-10 col-lg-8 text-center\">
            <h1 class=\"display-2 text-black\"><u>Mon CV :</u></h1>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-10 col-lg-8 text-center\">
            <h2>Jobs de mes rêves :</h2>
            <p class=\"lead text-white-75 mb-6\">Développeur dans le monde du jeux vidéo.</p>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-10 col-lg-8\">
            <h3>Compétences</h3>        
            <p>
                - Gestion/Création d'un réseau<br> 
                - Programmations en C, Python et Javascript<br> 
                - Création de site web<br> 
                - Accueil des clients<br> 
                - Parle anglais couramment<br>
                - Travail en équipe<br> 
            </p>

            <h3>Formations</h3>
            <p>
                Actuellement : BUT Réseaux et Télécommunication, IUT de Roanne<br> 
                2021-2022 : Bac STAV, Lycée Agricole de Roanne-Chervé<br> 
                2018-2019 : Brevet des collèges mention assez bien
            </p>

            <h3>Expérience professionnelle</h3>
            <p>
                - Exploitant agricole stagiaire, stage dans une ferme en production agricole<br> 
                - Stage vétérinaire<br>
            </p>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-10 col-lg-8\">
            <form id=\"fakeForm\">
                <div class=\"form-group\">
                    <label for=\"email\">Email:</label>
                    <input type=\"email\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe:</label>
                    <input type=\"password\" id=\"password\" name=\"password\" required>
                </div>
                <button type=\"button\" onclick=\"downloadPDF()\">Télécharger</button>
            </form>
        </div>
    </div>

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-12 col-md-10 col-lg-8 text-center\">
            <a href=\"/portfolio\" class=\"btn btn-primary lift\">Retourner au Portfolio<i class=\"fe fe-arrow-right ms-3\"></i></a>
            <a href=\"/contact\" class=\"btn btn-primary lift\">Comment Me Contacter ?<i class=\"fe fe-arrow-right ms-3\"></i></a>
        </div>
    </div>
</div>

<script>
    function downloadPDF() {
        var isValidForm = document.getElementById('email').value.includes('@');
        if (isValidForm) {
            var link = document.createElement('a');
            link.href = '/template/cv/CV Killian Loiset.pdf';
            link.download = 'Cv Killian Loiset.pdf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        } else {
            alert('Veuillez entrer une adresse email valide.');
        }
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
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
        return "cv/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 88,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon CV !{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-10 col-lg-8 text-center\">
            <h1 class=\"display-2 text-black\"><u>Mon CV :</u></h1>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-10 col-lg-8 text-center\">
            <h2>Jobs de mes rêves :</h2>
            <p class=\"lead text-white-75 mb-6\">Développeur dans le monde du jeux vidéo.</p>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-10 col-lg-8\">
            <h3>Compétences</h3>        
            <p>
                - Gestion/Création d'un réseau<br> 
                - Programmations en C, Python et Javascript<br> 
                - Création de site web<br> 
                - Accueil des clients<br> 
                - Parle anglais couramment<br>
                - Travail en équipe<br> 
            </p>

            <h3>Formations</h3>
            <p>
                Actuellement : BUT Réseaux et Télécommunication, IUT de Roanne<br> 
                2021-2022 : Bac STAV, Lycée Agricole de Roanne-Chervé<br> 
                2018-2019 : Brevet des collèges mention assez bien
            </p>

            <h3>Expérience professionnelle</h3>
            <p>
                - Exploitant agricole stagiaire, stage dans une ferme en production agricole<br> 
                - Stage vétérinaire<br>
            </p>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-10 col-lg-8\">
            <form id=\"fakeForm\">
                <div class=\"form-group\">
                    <label for=\"email\">Email:</label>
                    <input type=\"email\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe:</label>
                    <input type=\"password\" id=\"password\" name=\"password\" required>
                </div>
                <button type=\"button\" onclick=\"downloadPDF()\">Télécharger</button>
            </form>
        </div>
    </div>

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-12 col-md-10 col-lg-8 text-center\">
            <a href=\"/portfolio\" class=\"btn btn-primary lift\">Retourner au Portfolio<i class=\"fe fe-arrow-right ms-3\"></i></a>
            <a href=\"/contact\" class=\"btn btn-primary lift\">Comment Me Contacter ?<i class=\"fe fe-arrow-right ms-3\"></i></a>
        </div>
    </div>
</div>

<script>
    function downloadPDF() {
        var isValidForm = document.getElementById('email').value.includes('@');
        if (isValidForm) {
            var link = document.createElement('a');
            link.href = '/template/cv/CV Killian Loiset.pdf';
            link.download = 'Cv Killian Loiset.pdf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        } else {
            alert('Veuillez entrer une adresse email valide.');
        }
    }
</script>
{% endblock %}

{% block javascripts %}
{% endblock %}", "cv/index.html.twig", "C:\\Users\\kikiX\\Symfony\\SymfonyFinal\\templates\\cv\\index.html.twig");
    }
}
