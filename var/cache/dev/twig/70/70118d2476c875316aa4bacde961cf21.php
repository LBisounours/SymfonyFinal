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

/* home/index.html.twig */
class __TwigTemplate_0445a9c2d48d28c4fe44f53f6a172e2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Home!";
        
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
                    <h1 class=\"display-2 text-black\">
                        <u>Killian Loiset</u>
                    </h1>
                    <p class=\"lead text-white-75 mb-6\">
                        1st-year student in Bachelor's in Network and Telecommunications
                    </p>
                    <a href=\"/portfolio\" class=\"btn btn-primary lift\">
                        Explore my portfolio
                        <i class=\"fe fe-arrow-right ms-3\"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"mb-0\">Personal Information:</h2>
                    <p class=\"mb-5 text-muted\">
                        Hello, my name is Killian Loiset, I am 19 years old, and I am a 1st-year student in the Bachelor's in Network and Telecommunications program in Roanne.
                    </p>
                    <h2 class=\"mb-0\">BUT R&T Program:</h2>
                    <p>
                        The holder of the Bachelor's in Network and Telecommunications must be able to adapt to the specificities of their company. They can create or analyze a specification, develop or choose technical solutions and products. They can also install and set up equipment (networks, application environments, operating systems) and ensure their maintenance. This may involve traditional computer networks, service-integrated networks, mobile networks, and others. Finally, they can represent their company to clients. The graduate can evolve towards leading small teams.
                    </p>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4\">
                    <h2 class=\"fw-bold\">Interests:</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <img loading=\"lazy\" width=\"300\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://etudestech.com/wp-content/uploads/2021/11/langage-de-programmation-etudes-tech-1536x1024.jpg"), "html", null, true);
        echo "\" />
                        <h2 class=\"fw-bold\">Programming:</h2>
                        <p class=\"text-start\">During my free time, I enjoy programming, developing my bot created in JavaScript, and learning more about computers.</p>
                    </div>
                    <div class=\"col-lg-4\">
                        <img loading=\"lazy\" width=\"360\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.slate.fr/sites/default/files/styles/1060x523/public/helena-lopes-459331-unsplash_1_0.jpg"), "html", null, true);
        echo "\" />
                        <h2 class=\"fw-bold\">Friends:</h2>
                        <p class=\"text-start\">I also like spending time with my friends and taking care of the people close to me.</p>
                    </div>
                    <div class=\"col-lg-4\">
                        <img loading=\"lazy\" width=\"320\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.dynamique-mag.com/wp-content/uploads/9d6e32508b16895db66315a3ae1b8a4f.jpg"), "html", null, true);
        echo "\" />
                        <h2 class=\"fw-bold\">Learning:</h2>
                        <p class=\"text-start\">I enjoy learning new things, especially in the field of computers.</p>
                    </div>
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

    // line 71
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  147 => 54,  139 => 49,  131 => 44,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Home!{% endblock %}
{% block body %}
    <section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-8 text-center\">
                    <h1 class=\"display-2 text-black\">
                        <u>Killian Loiset</u>
                    </h1>
                    <p class=\"lead text-white-75 mb-6\">
                        1st-year student in Bachelor's in Network and Telecommunications
                    </p>
                    <a href=\"/portfolio\" class=\"btn btn-primary lift\">
                        Explore my portfolio
                        <i class=\"fe fe-arrow-right ms-3\"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"mb-0\">Personal Information:</h2>
                    <p class=\"mb-5 text-muted\">
                        Hello, my name is Killian Loiset, I am 19 years old, and I am a 1st-year student in the Bachelor's in Network and Telecommunications program in Roanne.
                    </p>
                    <h2 class=\"mb-0\">BUT R&T Program:</h2>
                    <p>
                        The holder of the Bachelor's in Network and Telecommunications must be able to adapt to the specificities of their company. They can create or analyze a specification, develop or choose technical solutions and products. They can also install and set up equipment (networks, application environments, operating systems) and ensure their maintenance. This may involve traditional computer networks, service-integrated networks, mobile networks, and others. Finally, they can represent their company to clients. The graduate can evolve towards leading small teams.
                    </p>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4\">
                    <h2 class=\"fw-bold\">Interests:</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <img loading=\"lazy\" width=\"300\" src=\"{{ asset('https://etudestech.com/wp-content/uploads/2021/11/langage-de-programmation-etudes-tech-1536x1024.jpg') }}\" />
                        <h2 class=\"fw-bold\">Programming:</h2>
                        <p class=\"text-start\">During my free time, I enjoy programming, developing my bot created in JavaScript, and learning more about computers.</p>
                    </div>
                    <div class=\"col-lg-4\">
                        <img loading=\"lazy\" width=\"360\" src=\"{{ asset('https://www.slate.fr/sites/default/files/styles/1060x523/public/helena-lopes-459331-unsplash_1_0.jpg') }}\" />
                        <h2 class=\"fw-bold\">Friends:</h2>
                        <p class=\"text-start\">I also like spending time with my friends and taking care of the people close to me.</p>
                    </div>
                    <div class=\"col-lg-4\">
                        <img loading=\"lazy\" width=\"320\" src=\"{{ asset('https://www.dynamique-mag.com/wp-content/uploads/9d6e32508b16895db66315a3ae1b8a4f.jpg') }}\" />
                        <h2 class=\"fw-bold\">Learning:</h2>
                        <p class=\"text-start\">I enjoy learning new things, especially in the field of computers.</p>
                    </div>
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
{% endblock %}", "home/index.html.twig", "C:\\Users\\kikiX\\Symfony\\SymfonyFinal\\templates\\home\\index.html.twig");
    }
}
