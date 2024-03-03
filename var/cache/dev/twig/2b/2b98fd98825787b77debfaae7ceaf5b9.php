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
class __TwigTemplate_6c6f3a9c5b7fdc21caefbbea73171b7a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'tache' => [$this, 'block_tache'],
            'body' => [$this, 'block_body'],
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
<html lang=\"\">
<head>
    <meta charset=\"UTF-8\">
    <title>
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    </title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    <!-- slider stylesheet -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <!-- bootstrap core css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/bootstrap.css"), "html", null, true);
        echo "\">
    <!-- fonts style -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- responsive style -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"hero_area\">
    <header class=\"header_section\">
        <div class=\"container-fluid\">
            <!-- Intégration de la barre de navigation -->
            <nav class=\"navbar navbar-expand-lg custom_nav-container\">
                <a class=\"navbar-brand\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">
                        <span>
\t\t\t\t\t\t\tNutrifit
\t\t\t\t\t\t</span>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <!-- Les éléments de la barre de navigation -->
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Coaches</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Nutritionists</a>
                        </li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/planning/crud/viewPlanning\">vos planning</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Complaint</a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                        <!-- Les éléments spécifiques aux utilisateurs -->
                        ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 60
                echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 61
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\">Administration</a>
                                </li>
                            ";
            }
            // line 64
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) {
                // line 65
                echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\">Coach dashboard</a>
                                </li>
                            ";
            }
            // line 69
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_NUTRITIONIST")) {
                // line 70
                echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\">Nutritionist dashboard</a>
                                </li>
                            ";
            }
            // line 74
            echo "
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 76
            echo "{ path('profile_index') }}\">My profile</a>
                            </li>
                            <li class=\"nav-item\">
                            <a href=\"/planning/crud/viewPlanning\">Planning</a>
                            </li>
                        ";
        } else {
            // line 82
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 83
            echo "{ path('app_register') }}\">Sign up</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 86
            echo "{ path('app_login') }}\">Sign in</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Contact Us</a>
                            </li>
                        ";
        }
        // line 92
        echo "                    </ul>
                </div>
            </nav>
        </div>
    </header>
        ";
        // line 97
        $this->displayBlock('tache', $context, $blocks);
        // line 102
        echo "
    ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "</div>

<!-- footer section -->
<footer class=\"container-fluid footer_section\">
    <p>
        &copy; 2024 All Rights Reserved.
    </p>
</footer>
<!-- footer section -->
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
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

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 98
        echo "


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 104
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  329 => 104,  319 => 103,  306 => 98,  296 => 97,  283 => 11,  273 => 10,  255 => 9,  236 => 6,  221 => 116,  217 => 115,  205 => 105,  203 => 103,  200 => 102,  198 => 97,  191 => 92,  183 => 86,  178 => 83,  175 => 82,  167 => 76,  163 => 74,  157 => 70,  154 => 69,  148 => 65,  145 => 64,  139 => 61,  136 => 60,  133 => 59,  131 => 58,  112 => 42,  97 => 30,  86 => 22,  81 => 20,  74 => 16,  69 => 14,  66 => 13,  63 => 10,  61 => 9,  57 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"\">
<head>
    <meta charset=\"UTF-8\">
    <title>
        {% block title %}Welcome!{% endblock %}
    </title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
    {% block stylesheets %}{% endblock %}
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
    <!-- slider stylesheet -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('./FrontOffice/css/owl.carousel.min.css') }}\">
    <!-- bootstrap core css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('./FrontOffice/css/bootstrap.css') }}\">
    <!-- fonts style -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('./FrontOffice/css/style.css') }}\" rel=\"stylesheet\"/>
    <!-- responsive style -->
    <link href=\"{{ asset('./FrontOffice/css/responsive.css') }}\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"hero_area\">
    <header class=\"header_section\">
        <div class=\"container-fluid\">
            <!-- Intégration de la barre de navigation -->
            <nav class=\"navbar navbar-expand-lg custom_nav-container\">
                <a class=\"navbar-brand\" href=\"{{ path('main') }}\">
                        <span>
\t\t\t\t\t\t\tNutrifit
\t\t\t\t\t\t</span>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <!-- Les éléments de la barre de navigation -->
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('main') }}\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Coaches</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Nutritionists</a>
                        </li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/planning/crud/viewPlanning\">vos planning</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Complaint</a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                        <!-- Les éléments spécifiques aux utilisateurs -->
                        {% if app.user %}
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('admin_index') }}\">Administration</a>
                                </li>
                            {% endif %}
                            {% if is_granted('ROLE_COACH') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\">Coach dashboard</a>
                                </li>
                            {% endif %}
                            {% if is_granted('ROLE_NUTRITIONIST') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"#\">Nutritionist dashboard</a>
                                </li>
                            {% endif %}

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{#  #}{ path('profile_index') }}\">My profile</a>
                            </li>
                            <li class=\"nav-item\">
                            <a href=\"/planning/crud/viewPlanning\">Planning</a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{#  #}{ path('app_register') }}\">Sign up</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{#  #}{ path('app_login') }}\">Sign in</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Contact Us</a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </nav>
        </div>
    </header>
        {% block tache %}



        {% endblock %}

    {% block body %}
    {% endblock %}
</div>

<!-- footer section -->
<footer class=\"container-fluid footer_section\">
    <p>
        &copy; 2024 All Rights Reserved.
    </p>
</footer>
<!-- footer section -->
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src=\"{{ asset('./FrontOffice/js/jquery-3.4.1.min.js') }}\"></script>
<script src=\"{{ asset('./FrontOffice/js/bootstrap.js') }}\"></script>

</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\piDev-DevMinds2024\\templates\\base.html.twig");
    }
}
