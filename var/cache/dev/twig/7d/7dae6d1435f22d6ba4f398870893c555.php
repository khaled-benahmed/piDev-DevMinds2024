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

/* profile/index.html.twig */
class __TwigTemplate_6a3d88399606e4f0a7538786d0891a95 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <div class=\"header-area\" style=\"background-color: black;\">
  
    </div>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        ";
            $context["img"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "image", [], "any", false, false, false, 8);
            // line 9
            echo "        <div class=\"container mt-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 text-center\">
                    <img class=\"rounded-circle mx-auto\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "image", [], "any", false, false, false, 12))), "html", null, true);
            echo "\" width=\"150\" height=\"150\" alt=\"Profile Image\">
                </div>
            </div>

            <div class=\"row justify-content-center mt-5\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">First Name:</label>
                                <div>
                                    <h4>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "Firstname", [], "any", false, false, false, 23), "html", null, true);
            echo "</h4>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">Last Name:</label>
                                <div>
                                    <h4>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "Lastname", [], "any", false, false, false, 29), "html", null, true);
            echo "</h4>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">Username:</label>
                                <div>
                                    <h4>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
            echo "</h4>
                                </div>
                            </div>                            
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">City:</label>
                                <div>
                                    <h4>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "city", [], "any", false, false, false, 41), "html", null, true);
            echo "</h4>
                                </div>
                            </div>                                
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">Email:</label>
                                <div>
                                    <h4>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
            echo "</h4>
                                </div>
                            </div>
                            <div class=\"form-group\">
                            <label class=\"font-weight-bold\">Role(s):</label>
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "roles", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 53
                echo "                                    ";
                $context["badge_color"] = ((($context["role"] == "ROLE_ADMIN")) ? ("danger") : ((((($context["role"] == "ROLE_COACH") || ($context["role"] == "ROLE_NUTRITIONIST"))) ? ("warning") : ("success"))));
                // line 54
                echo "                                    <span class=\"badge bg-";
                echo twig_escape_filter($this->env, (isset($context["badge_color"]) || array_key_exists("badge_color", $context) ? $context["badge_color"] : (function () { throw new RuntimeError('Variable "badge_color" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "\">
                                        ";
                // line 55
                $context["role_name"] = ((($context["role"] == "ROLE_ADMIN")) ? ("Administrateur") : (((($context["role"] == "ROLE_COACH")) ? ("Coach") : (((($context["role"] == "ROLE_NUTRITIONIST")) ? ("Nutritionniste") : ("Membre"))))));
                // line 56
                echo "                                        ";
                echo twig_escape_filter($this->env, (isset($context["role_name"]) || array_key_exists("role_name", $context) ? $context["role_name"] : (function () { throw new RuntimeError('Variable "role_name" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "
                                    </span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                            </div>
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">CIN:</label>
                                <div>
                                    <h4>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "cin", [], "any", false, false, false, 63), "html", null, true);
            echo "</h4>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">Birth Date:</label>
                                <div>
                                    <h4>";
            // line 69
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "birthday", [], "any", false, false, false, 69)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "birthday", [], "any", false, false, false, 69), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</h4>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
            echo "\" class=\"btn btn-danger\">
                                    <i class=\"fa fa-magic\"></i>&nbsp;
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 85
            echo "        <div class=\"text-center mt-5\">
            <p>No records found</p>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profile/index.html.twig";
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
        return array (  202 => 85,  188 => 74,  180 => 69,  171 => 63,  165 => 59,  155 => 56,  153 => 55,  148 => 54,  145 => 53,  141 => 52,  133 => 47,  124 => 41,  115 => 35,  106 => 29,  97 => 23,  83 => 12,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
    <div class=\"header-area\" style=\"background-color: black;\">
  
    </div>
    {% if app.user %}
        {% set img = app.user.image %}
        <div class=\"container mt-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 text-center\">
                    <img class=\"rounded-circle mx-auto\" src=\"{{ asset('uploads/' ~ app.user.image) }}\" width=\"150\" height=\"150\" alt=\"Profile Image\">
                </div>
            </div>

            <div class=\"row justify-content-center mt-5\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">First Name:</label>
                                <div>
                                    <h4>{{ app.user.Firstname }}</h4>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">Last Name:</label>
                                <div>
                                    <h4>{{ app.user.Lastname }}</h4>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">Username:</label>
                                <div>
                                    <h4>{{ app.user.username }}</h4>
                                </div>
                            </div>                            
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">City:</label>
                                <div>
                                    <h4>{{ app.user.city }}</h4>
                                </div>
                            </div>                                
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">Email:</label>
                                <div>
                                    <h4>{{ app.user.email }}</h4>
                                </div>
                            </div>
                            <div class=\"form-group\">
                            <label class=\"font-weight-bold\">Role(s):</label>
                                {% for role in app.user.roles %}
                                    {% set badge_color = role == \"ROLE_ADMIN\" ? \"danger\" : (role == \"ROLE_COACH\" or role == \"ROLE_NUTRITIONIST\" ? \"warning\" : \"success\") %}
                                    <span class=\"badge bg-{{ badge_color }}\">
                                        {% set role_name = role == \"ROLE_ADMIN\" ? \"Administrateur\" : (role == \"ROLE_COACH\" ? \"Coach\" : (role == \"ROLE_NUTRITIONIST\" ? \"Nutritionniste\" : \"Membre\")) %}
                                        {{ role_name }}
                                    </span>
                                {% endfor %}
                            </div>
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">CIN:</label>
                                <div>
                                    <h4>{{ app.user.cin }}</h4>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"font-weight-bold\">Birth Date:</label>
                                <div>
                                    <h4>{{ app.user.birthday ? app.user.birthday|date('Y-m-d') : '' }}</h4>
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <a href=\"{{ path('profile_edit') }}\" class=\"btn btn-danger\">
                                    <i class=\"fa fa-magic\"></i>&nbsp;
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"text-center mt-5\">
            <p>No records found</p>
        </div>
    {% endif %}
{% endblock %}
", "profile/index.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\profile\\index.html.twig");
    }
}
