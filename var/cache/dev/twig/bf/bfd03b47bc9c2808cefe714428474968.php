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

/* contact/index.html.twig */
class __TwigTemplate_20d103f7becf8aec19712e1b169a0a5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Me contacter !";
        
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
        echo "    <section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">
                    <h1 class=\"display-2 text-black\">Me contacter :</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"mb-1\">Mon numéro de téléphone :</h2>
                    <p class=\"mb-5 text-muted\">06-15-07-25-55</p>
                    <h2 class=\"mb-2\">Mon adresse mail :</h2>
                    <p class=\"mb-5 text-muted\">loiset.killian@gmail.com</p>
\t\t\t\t\t<h2 class=\"mb-2\">Mon Discord :</h2>
                    <p class=\"mb-5 text-muted\">https://discord.gg/uv3vXfUETC/p>
                    <h2 class=\"mb-0\">&nbsp;</h2>
                    <p class=\"mb-5 text-muted\">&nbsp;</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <a href=\"/cv\" class=\"btn btn-primary lift\">
                        Retourner au CV
                        <i class=\"fe fe-arrow-right ms-3\"></i>
                    </a>
                    <a href=\"/\" class=\"btn btn-primary lift\">
                        Retourner à l'accueil
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

    // line 45
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
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 45,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Me contacter !{% endblock %}
{% block body %}
    <section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">
                    <h1 class=\"display-2 text-black\">Me contacter :</h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"mb-1\">Mon numéro de téléphone :</h2>
                    <p class=\"mb-5 text-muted\">06-15-07-25-55</p>
                    <h2 class=\"mb-2\">Mon adresse mail :</h2>
                    <p class=\"mb-5 text-muted\">loiset.killian@gmail.com</p>
\t\t\t\t\t<h2 class=\"mb-2\">Mon Discord :</h2>
                    <p class=\"mb-5 text-muted\">https://discord.gg/uv3vXfUETC/p>
                    <h2 class=\"mb-0\">&nbsp;</h2>
                    <p class=\"mb-5 text-muted\">&nbsp;</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <a href=\"/cv\" class=\"btn btn-primary lift\">
                        Retourner au CV
                        <i class=\"fe fe-arrow-right ms-3\"></i>
                    </a>
                    <a href=\"/\" class=\"btn btn-primary lift\">
                        Retourner à l'accueil
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
{% endblock %}
", "contact/index.html.twig", "C:\\Users\\kikiX\\Symfony\\SymfonyFinal\\templates\\contact\\index.html.twig");
    }
}
