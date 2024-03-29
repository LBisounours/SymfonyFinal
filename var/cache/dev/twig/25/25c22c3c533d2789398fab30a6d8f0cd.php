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
class __TwigTemplate_adcda24a79a5fcd016b118f65a23bb5d extends Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
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

.html {width: 100%; background-color: #04AA6D;}
.css {width: 80%; background-color: #2196F3;}
.python {width: 70%; background-color: #04AA6D;}
.c {width: 90%; background-color: #808080;}
.admin {width: 75%; background-color: #e64d19;}
.reseau {width: 60%; background-color: #04AA6D;}
.projet {width: 90%; background-color: #00ff1e;}
.anglais {width: 80%; background-color: #00ff1e;}

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

.form-container {
    padding: 20px;
    border-radius: 8px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type=\"email\"], input[type=\"password\"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    padding: 10px 15px;
    margin-bottom: 15px;
    border: yes;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
}

</style>
<body>
    <div id=\"wrapper\">
        <!-- Navbar ajoutée ici -->
        <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"/\">Menu
                <span class=\"visually-hidden\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/portfolio\">Portfolio</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/cv\">CV</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/contact\">Me Contacter</a>
            </li>
          </ul>
          <form class=\"d-flex\">
            <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
          </form>
        </div>
      </div>
    </nav>
        <div class=\"main-content\">
            ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "        </div>

        <footer>
            <p>© 2024 Killian Loiset</p>
        </footer>
    </div>

    ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
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

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/vapor/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stylett.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 124
        echo "                <!-- Le contenu spécifique de chaque page sera inséré ici -->
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
        echo "        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  273 => 134,  263 => 133,  252 => 124,  242 => 123,  230 => 9,  227 => 8,  217 => 7,  198 => 6,  187 => 138,  185 => 133,  176 => 126,  174 => 123,  60 => 11,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Bisounours{% endblock %}</title>
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/vapor/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('stylett.css') }}\">
    {% endblock %}
</head>
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

.html {width: 100%; background-color: #04AA6D;}
.css {width: 80%; background-color: #2196F3;}
.python {width: 70%; background-color: #04AA6D;}
.c {width: 90%; background-color: #808080;}
.admin {width: 75%; background-color: #e64d19;}
.reseau {width: 60%; background-color: #04AA6D;}
.projet {width: 90%; background-color: #00ff1e;}
.anglais {width: 80%; background-color: #00ff1e;}

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

.form-container {
    padding: 20px;
    border-radius: 8px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type=\"email\"], input[type=\"password\"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    padding: 10px 15px;
    margin-bottom: 15px;
    border: yes;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
}

</style>
<body>
    <div id=\"wrapper\">
        <!-- Navbar ajoutée ici -->
        <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"/\">Menu
                <span class=\"visually-hidden\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/portfolio\">Portfolio</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/cv\">CV</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/contact\">Me Contacter</a>
            </li>
          </ul>
          <form class=\"d-flex\">
            <input class=\"form-control me-sm-2\" type=\"search\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
          </form>
        </div>
      </div>
    </nav>
        <div class=\"main-content\">
            {% block body %}
                <!-- Le contenu spécifique de chaque page sera inséré ici -->
            {% endblock %}
        </div>

        <footer>
            <p>© 2024 Killian Loiset</p>
        </footer>
    </div>

    {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js\"></script>
    {% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\kikiX\\Symfony\\SymfonyFinal\\templates\\base.html.twig");
    }
}
