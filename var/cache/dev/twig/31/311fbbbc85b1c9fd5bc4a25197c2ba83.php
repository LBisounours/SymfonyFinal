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
class __TwigTemplate_d00c9de1da812032460944169b1940b9 extends Template
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

    // line 2
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

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section>
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">
                    <h1 class=\"display-2 text-black\">
                        <u>Mon Portfolio :</u>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=\"container\">
            <h1>Mes compétences :</h1>

            <div class=\"skill-container\">
                <p>HTML</p>
                <div class=\"skills html\">100%</div>

                <p>CSS</p>
                <div class=\"skills css\">80%</div>

                <p>Python</p>
                <div class=\"skills python\">70%</div>

                <p>Language C</p>
                <div class=\"skills c\">90%</div>

                <p>Administration système</p>
                <div class=\"skills admin\">75%</div>

                <p>Administration réseau</p>
                <div class=\"skills reseau\">60%</div>

                <p>Gestion de Projet</p>
                <div class=\"skills projet\">90%</div>

                <p>Anglais Technique</p>
                <div class=\"skills anglais\">80%</div>
            </div>
        </div>
    </section>

    <section>
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12\">
                    <a href=\"/\" class=\"btn btn-primary lift\">
                        Retourner à l'accueil
                        <i class=\"fe fe-arrow-right ms-3\"></i>
                    </a>
                    <a href=\"/cv\" class=\"btn btn-primary lift\">
                        Découvrir mon CV
                        <i class=\"fe fe-arrow-right ms-3\"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class=\"position-relative\">
        <div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
            <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path>
            </svg>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
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
        return "portfolio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 73,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mon Portfolio !{% endblock %}
{% block body %}
    <section>
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">
                    <h1 class=\"display-2 text-black\">
                        <u>Mon Portfolio :</u>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class=\"container\">
            <h1>Mes compétences :</h1>

            <div class=\"skill-container\">
                <p>HTML</p>
                <div class=\"skills html\">100%</div>

                <p>CSS</p>
                <div class=\"skills css\">80%</div>

                <p>Python</p>
                <div class=\"skills python\">70%</div>

                <p>Language C</p>
                <div class=\"skills c\">90%</div>

                <p>Administration système</p>
                <div class=\"skills admin\">75%</div>

                <p>Administration réseau</p>
                <div class=\"skills reseau\">60%</div>

                <p>Gestion de Projet</p>
                <div class=\"skills projet\">90%</div>

                <p>Anglais Technique</p>
                <div class=\"skills anglais\">80%</div>
            </div>
        </div>
    </section>

    <section>
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12\">
                    <a href=\"/\" class=\"btn btn-primary lift\">
                        Retourner à l'accueil
                        <i class=\"fe fe-arrow-right ms-3\"></i>
                    </a>
                    <a href=\"/cv\" class=\"btn btn-primary lift\">
                        Découvrir mon CV
                        <i class=\"fe fe-arrow-right ms-3\"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class=\"position-relative\">
        <div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
            <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path>
            </svg>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
{% endblock %}", "portfolio/index.html.twig", "C:\\Users\\kikiX\\Symfony\\SymfonyFinal\\templates\\portfolio\\index.html.twig");
    }
}
