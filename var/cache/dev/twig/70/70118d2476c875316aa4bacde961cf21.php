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

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil !";
        
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
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Killian Loiset</u>
\t\t\t\t</h1>
\t\t\t\t<p class=\"lead text-white-75 mb-6\">
\t\t\t\t\tÉtudient 1ère année en BUT RT
\t\t\t\t</p>
\t\t\t\t<a href=\"/portfolio\" class=\"btn btn-primary lift\">
\t\t\t\t\tDécouvrir mon portfolio
\t\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
</section>
    <!-- ARTICLES -->
<section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\tInformations Personnelles :
\t\t\t\t</h2>
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t\tBonjour, je m'appelle Killian Loiset, j'ai 19 ans, est je suis en 1ère année de BUT R&T, à Roanne.
\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t\tLa Formation BUT R&T :
\t\t\t\t</h2>
<p> Le titulaire du BUT réseaux et télécommunications doit être capable de s'adapter
aux spécificités de son entreprise. Il peut constituer ou analyser un cahier des charges,
élaborer ou choisir des solutions techniques et des produits. Il peut aussi installer et
mettre au point des équipements (réseaux, environnements applicatifs, systèmes
d'exploitation) et assurer leur maintenance. Il peut s'agir de réseaux informatiques
classiques, à intégration de services, mobiles ou autres. Enfin, il peut représenter son
entreprise auprès des clients.
Les débouchés sont nombreux chez les constructeurs d'équipements réseaux,
opérateurs de télécommunications fournisseurs d'accès Internet, dans les entreprises
et les administrations gérant elles-mêmes leurs systèmes d'information et de
communication, chez les installateurs de téléphonie et dans les ESN.
Le diplômé peut évoluer vers l'encadrement de petites équipes. </p>
\t\t\t\t<h2 class=\"mb-0\">\t\t\t\t
\t\t\t\t</h2>
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-lg-4\">
\t\t<h1 class=\"fw-bold\">Loisirs :</h1>
                    </div>
\t\t\t\t <div class=\"row\">
                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"300\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://etudestech.com/wp-content/uploads/2021/11/langage-de-programmation-etudes-tech-1536x1024.jpg"), "html", null, true);
        echo "\" />
                    <h2 class=\"fw-bold\">Programmer :</h2>
                    <p class=\"text-start\">Durant mes temps libre, j'aime faire de la programmation, développer mon bot que j'ai créer en javascript, est en apprendre plus en informatiques.</p>
                </div>
                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"360\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.slate.fr/sites/default/files/styles/1060x523/public/helena-lopes-459331-unsplash_1_0.jpg"), "html", null, true);
        echo "\" />

                    <h2 class=\"fw-bold\">Mes amis</h2>
                    <p class=\"text-start\">J'aime aussi passez du temps avec mes amis, et prendre soin des personne qui me sont proche.</p>
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"320\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.dynamique-mag.com/wp-content/uploads/9d6e32508b16895db66315a3ae1b8a4f.jpg"), "html", null, true);
        echo "\" />
                    <h2 class=\"fw-bold\">Apprendre :</h2>
                    <p class=\"text-start\">J'aime apprendre de nouvelles choses, surtout dans tous ce qui concerne l'informatiques.</p>
                </div>
\t\t\t\t\t\t<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t</div>
</section>
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

    // line 100
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
        return array (  201 => 100,  172 => 81,  163 => 75,  155 => 70,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil !{% endblock %}

{% block body %}
<body data-aos-easing=\"ease-out-quad\" data-aos-duration=\"700\" data-aos-delay=\"0\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-12 col-md-10 col-lg-8 text-center\">
\t\t\t\t<h1 class=\"display-2 text-black\">
\t\t\t\t\t<u>Killian Loiset</u>
\t\t\t\t</h1>
\t\t\t\t<p class=\"lead text-white-75 mb-6\">
\t\t\t\t\tÉtudient 1ère année en BUT RT
\t\t\t\t</p>
\t\t\t\t<a href=\"/portfolio\" class=\"btn btn-primary lift\">
\t\t\t\t\tDécouvrir mon portfolio
\t\t\t\t\t<i class=\"fe fe-arrow-right ms-3\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
</section>
    <!-- ARTICLES -->
<section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\tInformations Personnelles :
\t\t\t\t</h2>
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t\tBonjour, je m'appelle Killian Loiset, j'ai 19 ans, est je suis en 1ère année de BUT R&T, à Roanne.
\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t\tLa Formation BUT R&T :
\t\t\t\t</h2>
<p> Le titulaire du BUT réseaux et télécommunications doit être capable de s'adapter
aux spécificités de son entreprise. Il peut constituer ou analyser un cahier des charges,
élaborer ou choisir des solutions techniques et des produits. Il peut aussi installer et
mettre au point des équipements (réseaux, environnements applicatifs, systèmes
d'exploitation) et assurer leur maintenance. Il peut s'agir de réseaux informatiques
classiques, à intégration de services, mobiles ou autres. Enfin, il peut représenter son
entreprise auprès des clients.
Les débouchés sont nombreux chez les constructeurs d'équipements réseaux,
opérateurs de télécommunications fournisseurs d'accès Internet, dans les entreprises
et les administrations gérant elles-mêmes leurs systèmes d'information et de
communication, chez les installateurs de téléphonie et dans les ESN.
Le diplômé peut évoluer vers l'encadrement de petites équipes. </p>
\t\t\t\t<h2 class=\"mb-0\">\t\t\t\t
\t\t\t\t</h2>
\t\t\t\t<p class=\"mb-5 text-muted\">
\t\t\t\t</p>
\t\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
                <h2 class=\"mb-0\">
\t\t\t\t</h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-lg-4\">
\t\t<h1 class=\"fw-bold\">Loisirs :</h1>
                    </div>
\t\t\t\t <div class=\"row\">
                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"300\" src=\"{{ asset('https://etudestech.com/wp-content/uploads/2021/11/langage-de-programmation-etudes-tech-1536x1024.jpg') }}\" />
                    <h2 class=\"fw-bold\">Programmer :</h2>
                    <p class=\"text-start\">Durant mes temps libre, j'aime faire de la programmation, développer mon bot que j'ai créer en javascript, est en apprendre plus en informatiques.</p>
                </div>
                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"360\" src=\"{{ asset('https://www.slate.fr/sites/default/files/styles/1060x523/public/helena-lopes-459331-unsplash_1_0.jpg') }}\" />

                    <h2 class=\"fw-bold\">Mes amis</h2>
                    <p class=\"text-start\">J'aime aussi passez du temps avec mes amis, et prendre soin des personne qui me sont proche.</p>
                </div><!-- /.col-lg-4 -->
                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"320\" src=\"{{ asset('https://www.dynamique-mag.com/wp-content/uploads/9d6e32508b16895db66315a3ae1b8a4f.jpg') }}\" />
                    <h2 class=\"fw-bold\">Apprendre :</h2>
                    <p class=\"text-start\">J'aime apprendre de nouvelles choses, surtout dans tous ce qui concerne l'informatiques.</p>
                </div>
\t\t\t\t\t\t<a class=\"card-meta\" href=\"/actualites/lancement-du-site-internet\">
\t\t\t\t\t\t\t<hr class=\"card-meta-divider\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t</div>
</section>
<div class=\"position-relative\">
\t<div class=\"shape shape-bottom shape-fluid-x svg-shim text-dark\">
\t\t<svg viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z\" fill=\"currentColor\"></path></svg>
\t</div>
</div>
</body>
{% endblock %}
{% block javascripts %}
{% endblock %}", "home/index.html.twig", "C:\\Users\\kikiX\\Symfony\\SymfonyFinal\\templates\\home\\index.html.twig");
    }
}
