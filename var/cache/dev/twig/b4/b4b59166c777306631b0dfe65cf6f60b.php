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

/* infopersonnel/index.html.twig */
class __TwigTemplate_772ebcd2f63cbe0412785330d8532669 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "infopersonnel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "infopersonnel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "infopersonnel/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <main>

        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"overlay-image\" style=\"background-image: url('images/slide.jpg');\"></div>
                <div class=\"carousel-item active\">
                    <div class=\"container\">
                        <div class=\"carousel-caption text-start\">
                            <h1>Le meilleur raccourcisseur d'URL.</h1>
                            <p>Un raccourcisseur d'URL conçu avec des outils puissants pour vous aider à développer et à protéger votre marque.</p>

                            ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_ANONYMOUS")) {
            // line 18
            echo "                                <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Inscription</a></p>
                            ";
        }
        // line 20
        echo "
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"container marketing\">

            <!-- Three columns of text below the carousel -->
            <div class=\"row\">

                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.discordapp.com/attachments/877272463615098951/1051190139814170777/IMG_8815.jpg"), "html", null, true);
        echo "\" />
                    <h2 class=\"fw-bold\">Inspirer la confiance</h2>
                    <p class=\"text-start\">Sa c'est l'attaque des titants culture toi un peu.</p>
                </div>

                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"220\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.discordapp.com/attachments/877272463615098951/1053305164238430288/220719905_402016354628126_6088006844794674580_n.jpg"), "html", null, true);
        echo "\" />

                    <h2 class=\"fw-bold\">Le_Bisounours_</h2>
                    <p class=\"text-start\">Streameur sur Twitch, venez me suivre.</p>

                </div><!-- /.col-lg-4 -->

                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"220\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.discordapp.com/attachments/877272463615098951/1053305164485886032/ae13e4caab0d49485aab722c5493412e.png"), "html", null, true);
        echo "\" />
                    <h2 class=\"fw-bold\">The Stars</h2>
                    <p class=\"text-start\">The Stars est un ex Serveur Discord de 600 membres.</p>

                </div>

            </div><!-- /.row -->


            <hr class=\"featurette-divider\">
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("home"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "infopersonnel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 62,  166 => 61,  144 => 48,  133 => 40,  124 => 34,  108 => 20,  104 => 18,  102 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <main>

        <div id=\"myCarousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"overlay-image\" style=\"background-image: url('images/slide.jpg');\"></div>
                <div class=\"carousel-item active\">
                    <div class=\"container\">
                        <div class=\"carousel-caption text-start\">
                            <h1>Le meilleur raccourcisseur d'URL.</h1>
                            <p>Un raccourcisseur d'URL conçu avec des outils puissants pour vous aider à développer et à protéger votre marque.</p>

                            {% if is_granted('IS_ANONYMOUS') %}
                                <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Inscription</a></p>
                            {% endif %}

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"container marketing\">

            <!-- Three columns of text below the carousel -->
            <div class=\"row\">

                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"320\" height=\"180\" src=\"{{ asset('https://cdn.discordapp.com/attachments/877272463615098951/1051190139814170777/IMG_8815.jpg') }}\" />
                    <h2 class=\"fw-bold\">Inspirer la confiance</h2>
                    <p class=\"text-start\">Sa c'est l'attaque des titants culture toi un peu.</p>
                </div>

                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"220\" src=\"{{ asset('https://cdn.discordapp.com/attachments/877272463615098951/1053305164238430288/220719905_402016354628126_6088006844794674580_n.jpg') }}\" />

                    <h2 class=\"fw-bold\">Le_Bisounours_</h2>
                    <p class=\"text-start\">Streameur sur Twitch, venez me suivre.</p>

                </div><!-- /.col-lg-4 -->

                <div class=\"col-lg-4\">
                    <img loading=\"lazy\" width=\"220\" src=\"{{ asset('https://cdn.discordapp.com/attachments/877272463615098951/1053305164485886032/ae13e4caab0d49485aab722c5493412e.png') }}\" />
                    <h2 class=\"fw-bold\">The Stars</h2>
                    <p class=\"text-start\">The Stars est un ex Serveur Discord de 600 membres.</p>

                </div>

            </div><!-- /.row -->


            <hr class=\"featurette-divider\">
    </main>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('home') }}
{% endblock %}
", "infopersonnel/index.html.twig", "C:\\Users\\Utilisateur\\Symfony\\blog\\templates\\infopersonnel\\index.html.twig");
    }
}
