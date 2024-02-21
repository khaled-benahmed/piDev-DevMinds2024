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

/* baseBack.html.twig */
class __TwigTemplate_1a78d342fe72949f9eaec07b9b6cbf5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/LogoBlack.ico"), "html", null, true);
        echo "\" />-->

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "
    <style> </style>
</head>


<body class=\"animsition\">
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/logo.PNG/"), "html", null, true);
        echo " \" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"active\">
                        <a class=\"js-arrow\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                            <i class=\"fas fa-home\"></i>Home</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-user\"></i>Utilisateurs</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Afficher Utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-table\"></i>Planning</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"";
        // line 86
        echo "{path('app_activite_crud_new')}}\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 89
        echo "{path('app_activite_crud_index')}}\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 92
        echo "{path('app_planning_crud_new')}}\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 95
        echo "{path('app_planning_crud_index')}}\">Afficher Plannings</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-plus\"></i>Abonnements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Abonnement</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Abonnements</a>
                            </li>
                            <li>
                                <a href=\"#\">Ajouter Pack</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Packs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>Offres</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Offres</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Offres</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-exclamation\"></i>Réclamations</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"/reclamation\">Afficher Réclamations</a>
                            </li>
                            <li>
                                <a href=\"/reponse\">Afficher Réponse</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class=\"menu-sidebar d-none d-lg-block\">
    <div class=\"logo\">
        <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
            <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logonutrifit.PNG"), "html", null, true);
        echo "\" />
        </a>
    </div>
    <div class=\"menu-sidebar__content js-scrollbar1\">
        <nav class=\"navbar-sidebar\">
            <ul class=\"list-unstyled navbar__list\">
                <li class=\"active\">
                    <a class=\"js-arrow\" href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <i class=\"fas fa-home\"></i>Home
                    </a>
                </li>
                ";
        // line 164
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 165
            echo "                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-user\"></i>Utilisateurs
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"#\">Ajouter Utilisateur</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_list");
            echo "\">Afficher Utilisateurs</a>
                        </li>
                    </ul>
                </li>
                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-table\"></i>Planning
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"";
            // line 184
            echo "\">Ajouter Activité</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 187
            echo "\">Afficher Activités</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 190
            echo "\">Ajouter Planning</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 193
            echo "\">Afficher Planning</a>
                        </li>
                    </ul>
                </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-plus\"></i>Abonnements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Abonnement</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Abonnements</a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>Offres</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Offre</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Offres</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-newspaper\"></i>contenu</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Nutrition Plan</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Nutrition Plans</a>
                            </li>
                            <li>
                                <a href=\"#\">Ajouter Coaching Plans </a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Coaching Plans</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-exclamation\"></i>Réclamations</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"/reclamation\">Afficher Réclamations</a>
                            </li>
                            <li>
                                <a href=\"/reponse\">Afficher Réponses</a>
                            </li>
                        </ul>
                    </li>
                                    ";
        }
        // line 254
        echo "
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">
                            <div class=\"noti-wrap\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        <div class=\"mess__title\">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\" alt=Michelle Moreno />

                                            </div>
                                            <div class=\"content\">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class=\"time\">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\"  alt=\"Diane Myers\" />

                                            </div>
                                            <div class=\"content\">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class=\"time\">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__footer\">
                                            <a href=\"#\">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"email-dropdown js-dropdown\">
                                        <div class=\"email__title\">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-06.jpg"), "html", null, true);
        echo "\"  alt=\"Cynthia Harvey\" />

                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-05.jpg"), "html", null, true);
        echo "\"  alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-04.jpg"), "html", null, true);
        echo "\"  alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class=\"email__footer\">
                                            <a href=\"#\">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-notifications\"></i>
                                    <span class=\"quantity\">3</span>
                                    <div class=\"notifi-dropdown js-dropdown\">
                                        <div class=\"notifi__title\">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c1 img-cir img-40\">
                                                <i class=\"zmdi zmdi-email-open\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a email notification</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c2 img-cir img-40\">
                                                <i class=\"zmdi zmdi-account-box\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>Your account has been blocked</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c3 img-cir img-40\">
                                                <i class=\"zmdi zmdi-file-text\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a new file</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__footer\">
                                            <a href=\"#\">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class=\"account-wrap\">
                <div class=\"account-item clearfix js-item-menu\">
                     <div class=\"image\">
                  <img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "user", [], "any", false, false, false, 393), "image", [], "any", false, false, false, 393))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "user", [], "any", false, false, false, 393), "image", [], "any", false, false, false, 393), "html", null, true);
        echo "\" />
                 </div>
                <div class=\"content\">
                    <a class=\"js-acc-btn\" href=\"#\">";
        // line 396
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 396, $this->source); })()), "user", [], "any", false, false, false, 396), "firstname", [], "any", false, false, false, 396), "html", null, true);
        echo "</a>
                </div>
                <div class=\"account-dropdown js-dropdown\">
                    <div class=\"info clearfix\">
                <div class=\"image\">   
                        <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401), "image", [], "any", false, false, false, 401))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401), "image", [], "any", false, false, false, 401), "html", null, true);
        echo "\" />
                </div>
                <div class=\"content\">
                    <h5 class=\"name\">
                        <a href=\"#\">";
        // line 405
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 405, $this->source); })()), "user", [], "any", false, false, false, 405), "firstname", [], "any", false, false, false, 405), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 405, $this->source); })()), "user", [], "any", false, false, false, 405), "lastname", [], "any", false, false, false, 405), "html", null, true);
        echo "</a>
                    </h5>
                    <span class=\"email\">";
        // line 407
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 407, $this->source); })()), "user", [], "any", false, false, false, 407), "email", [], "any", false, false, false, 407), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div class=\"account-dropdown__body\">
    <div class=\"account-dropdown__item\">
        <a href=\"";
        // line 412
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">
<i class=\"bi bi-person text-primary\"></i> Profile
        </a>
    </div>
    
    <div class=\"account-dropdown__item\">
        <a href=\"#\">
            <i class=\"bi bi-cash\"></i> Billing
        </a>
    </div>
</div>
<div class=\"account-dropdown__footer\">
    <a href=\"";
        // line 424
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
        <i class=\"bi bi-power\"></i> Logout
    </a>
</div>

        </div>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>


<!-- MAIN CONTENT-->
<div class=\"page-wrapper\">
    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <br>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- START WHITE BACKGROUND-->
                    <div class=\"map-data m-b-40\">
                        ";
        // line 452
        $this->displayBlock('body', $context, $blocks);
        // line 455
        echo "                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                   <!-- <div class=\"copyright\">
                        <p>Copyright © 2024 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>




</body>
";
        // line 473
        $this->displayBlock('javascripts', $context, $blocks);
        // line 504
        echo "
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "NutriFit Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <!-- Fontfaces CSS-->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/font-face.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">


        <!-- Vendor CSS-->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

        <!-- Calendar -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 452
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 453
        echo "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 473
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 474
        echo "    <!-- Jquery JS-->
    <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Bootstrap JS-->
    <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Vendor JS-->
    <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/wow.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\" ></script>


    <!-- Main JS-->
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/main.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"https://kit.fontawesome.com/a781c8964e.js\" crossorigin=\"anonymous\"></script>


    <!-- Calendar -->
    <!--<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>-->



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseBack.html.twig";
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
        return array (  797 => 494,  790 => 490,  786 => 489,  782 => 488,  778 => 487,  774 => 486,  770 => 485,  766 => 484,  762 => 483,  758 => 482,  754 => 481,  749 => 479,  745 => 478,  740 => 476,  736 => 475,  733 => 474,  723 => 473,  712 => 453,  702 => 452,  685 => 35,  679 => 32,  675 => 31,  671 => 30,  667 => 29,  663 => 28,  659 => 27,  655 => 26,  648 => 22,  642 => 19,  638 => 18,  634 => 17,  631 => 16,  621 => 15,  602 => 12,  590 => 504,  588 => 473,  568 => 455,  566 => 452,  535 => 424,  520 => 412,  512 => 407,  506 => 405,  497 => 401,  489 => 396,  481 => 393,  423 => 338,  411 => 329,  398 => 319,  372 => 296,  358 => 285,  325 => 254,  262 => 193,  257 => 190,  252 => 187,  247 => 184,  234 => 174,  223 => 165,  221 => 164,  214 => 160,  204 => 153,  200 => 152,  141 => 95,  136 => 92,  131 => 89,  126 => 86,  106 => 69,  89 => 55,  85 => 54,  71 => 42,  69 => 15,  64 => 13,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>{% block title %}NutriFit Dashboard{% endblock %}</title>
    <!--<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('./BackOffice/images/icon/LogoBlack.ico')}}\" />-->

    {% block stylesheets %}
        <!-- Fontfaces CSS-->
        <link href=\"{{ asset('./BackOffice/css/font-face.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css')}}\" rel=\"stylesheet\" media=\"all\">


        <!-- Vendor CSS-->
        <link href=\"{{ asset('./BackOffice/vendor/animsition/animsition.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/wow/animate.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/css-hamburgers/hamburgers.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/slick/slick.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/select2/select2.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"{{ asset('./BackOffice/css/theme.css')}}\" rel=\"stylesheet\" media=\"all\">

        <!-- Calendar -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


    {% endblock %}

    <style> </style>
</head>


<body class=\"animsition\">
<div class=\"page-wrapper\">
    <!-- HEADER MOBILE-->
    <header class=\"header-mobile d-block d-lg-none\">
        <div class=\"header-mobile__bar\">
            <div class=\"container-fluid\">
                <div class=\"header-mobile-inner\">
                    <a class=\"logo\" href=\"{{path('app_home')}}\">
                        <img src=\"{{ asset('./BackOffice/images/logo.PNG/') }} \" />
                    </a>
                    <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class=\"navbar-mobile\">
            <div class=\"container-fluid\">
                <ul class=\"navbar-mobile__list list-unstyled\">
                    <li class=\"active\">
                        <a class=\"js-arrow\" href=\"{{path('app_home')}}\">
                            <i class=\"fas fa-home\"></i>Home</a>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-user\"></i>Utilisateurs</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Afficher Utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-table\"></i>Planning</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"{#  #}{path('app_activite_crud_new')}}\">Ajouter Activité</a>
                            </li>
                            <li>
                                <a href=\"{#  #}{path('app_activite_crud_index')}}\">Afficher Activités</a>
                            </li>
                            <li>
                                <a href=\"{#  #}{path('app_planning_crud_new')}}\">Ajouter Planning</a>
                            </li>
                            <li>
                                <a href=\"{#  #}{path('app_planning_crud_index')}}\">Afficher Plannings</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-plus\"></i>Abonnements</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Abonnement</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Abonnements</a>
                            </li>
                            <li>
                                <a href=\"#\">Ajouter Pack</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Packs</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>Offres</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Offres</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Offres</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-exclamation\"></i>Réclamations</a>
                        <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                            <li>
                                <a href=\"/reclamation\">Afficher Réclamations</a>
                            </li>
                            <li>
                                <a href=\"/reponse\">Afficher Réponse</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class=\"menu-sidebar d-none d-lg-block\">
    <div class=\"logo\">
        <a href=\"{{ path('app_home') }}\">
            <img src=\"{{ asset('uploads/logonutrifit.PNG') }}\" />
        </a>
    </div>
    <div class=\"menu-sidebar__content js-scrollbar1\">
        <nav class=\"navbar-sidebar\">
            <ul class=\"list-unstyled navbar__list\">
                <li class=\"active\">
                    <a class=\"js-arrow\" href=\"{{ path('app_home') }}\">
                        <i class=\"fas fa-home\"></i>Home
                    </a>
                </li>
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-user\"></i>Utilisateurs
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"#\">Ajouter Utilisateur</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_users_list') }}\">Afficher Utilisateurs</a>
                        </li>
                    </ul>
                </li>
                <li class=\"has-sub\">
                    <a class=\"js-arrow\" href=\"#\">
                        <i class=\"fas fa-table\"></i>Planning
                    </a>
                    <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                        <li>
                            <a href=\"{# path('app_activite_crud_new') }#}\">Ajouter Activité</a>
                        </li>
                        <li>
                            <a href=\"{# path('app_activite_crud_index') }#}\">Afficher Activités</a>
                        </li>
                        <li>
                            <a href=\"{# path('app_planning_crud_new') }#}\">Ajouter Planning</a>
                        </li>
                        <li>
                            <a href=\"{# path('app_planning_crud_index') }#}\">Afficher Planning</a>
                        </li>
                    </ul>
                </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-plus\"></i>Abonnements</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Abonnement</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Abonnements</a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-desktop\"></i>Offres</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Offre</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Offres</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-newspaper\"></i>contenu</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"#\">Ajouter Nutrition Plan</a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Nutrition Plans</a>
                            </li>
                            <li>
                                <a href=\"#\">Ajouter Coaching Plans </a>
                            </li>
                            <li>
                                <a href=\"#\">Afficher Coaching Plans</a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"has-sub\">
                        <a class=\"js-arrow\" href=\"#\">
                            <i class=\"fas fa-exclamation\"></i>Réclamations</a>
                        <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                            <li>
                                <a href=\"/reclamation\">Afficher Réclamations</a>
                            </li>
                            <li>
                                <a href=\"/reponse\">Afficher Réponses</a>
                            </li>
                        </ul>
                    </li>
                                    {% endif %}

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <!-- HEADER DESKTOP-->
        <header class=\"header-desktop\">
            <div class=\"section__content section__content--p30\">
                <div class=\"container-fluid\">
                    <div class=\"header-wrap\">
                        <form class=\"form-header\" action=\"\" method=\"POST\">
                            <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                            <button class=\"au-btn--submit\" type=\"submit\">
                                <i class=\"zmdi zmdi-search\"></i>
                            </button>
                        </form>
                        <div class=\"header-button\">
                            <div class=\"noti-wrap\">
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-comment-more\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"mess-dropdown js-dropdown\">
                                        <div class=\"mess__title\">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-06.jpg')}}\" alt=Michelle Moreno />

                                            </div>
                                            <div class=\"content\">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class=\"time\">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-04.jpg') }}\"  alt=\"Diane Myers\" />

                                            </div>
                                            <div class=\"content\">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class=\"time\">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"mess__footer\">
                                            <a href=\"#\">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-email\"></i>
                                    <span class=\"quantity\">1</span>
                                    <div class=\"email-dropdown js-dropdown\">
                                        <div class=\"email__title\">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-06.jpg') }}\"  alt=\"Cynthia Harvey\" />

                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-05.jpg') }}\"  alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class=\"email__item\">
                                            <div class=\"image img-cir img-40\">
                                                <img src=\"{{ asset('./BackOffice/images/icon/avatar-04.jpg') }}\"  alt=\"Cynthia Harvey\" />
                                            </div>
                                            <div class=\"content\">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class=\"email__footer\">
                                            <a href=\"#\">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"noti__item js-item-menu\">
                                    <i class=\"zmdi zmdi-notifications\"></i>
                                    <span class=\"quantity\">3</span>
                                    <div class=\"notifi-dropdown js-dropdown\">
                                        <div class=\"notifi__title\">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c1 img-cir img-40\">
                                                <i class=\"zmdi zmdi-email-open\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a email notification</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c2 img-cir img-40\">
                                                <i class=\"zmdi zmdi-account-box\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>Your account has been blocked</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__item\">
                                            <div class=\"bg-c3 img-cir img-40\">
                                                <i class=\"zmdi zmdi-file-text\"></i>
                                            </div>
                                            <div class=\"content\">
                                                <p>You got a new file</p>
                                                <span class=\"date\">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class=\"notifi__footer\">
                                            <a href=\"#\">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class=\"account-wrap\">
                <div class=\"account-item clearfix js-item-menu\">
                     <div class=\"image\">
                  <img src=\"{{ asset('uploads/' ~ app.user.image) }}\" alt=\"{{ app.user.image }}\" />
                 </div>
                <div class=\"content\">
                    <a class=\"js-acc-btn\" href=\"#\">{{ app.user.firstname }}</a>
                </div>
                <div class=\"account-dropdown js-dropdown\">
                    <div class=\"info clearfix\">
                <div class=\"image\">   
                        <img src=\"{{ asset('uploads/' ~ app.user.image) }}\" alt=\"{{ app.user.image }}\" />
                </div>
                <div class=\"content\">
                    <h5 class=\"name\">
                        <a href=\"#\">{{ app.user.firstname}}{{ app.user.lastname}}</a>
                    </h5>
                    <span class=\"email\">{{ app.user.email }}</span>
                </div>
            </div>
            <div class=\"account-dropdown__body\">
    <div class=\"account-dropdown__item\">
        <a href=\"{{ path('profile') }}\">
<i class=\"bi bi-person text-primary\"></i> Profile
        </a>
    </div>
    
    <div class=\"account-dropdown__item\">
        <a href=\"#\">
            <i class=\"bi bi-cash\"></i> Billing
        </a>
    </div>
</div>
<div class=\"account-dropdown__footer\">
    <a href=\"{{ path('app_logout') }}\">
        <i class=\"bi bi-power\"></i> Logout
    </a>
</div>

        </div>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>


<!-- MAIN CONTENT-->
<div class=\"page-wrapper\">
    <!-- PAGE CONTAINER-->
    <div class=\"page-container\">
        <br>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- START WHITE BACKGROUND-->
                    <div class=\"map-data m-b-40\">
                        {% block body %}

                        {% endblock %}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                   <!-- <div class=\"copyright\">
                        <p>Copyright © 2024 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>




</body>
{% block javascripts %}
    <!-- Jquery JS-->
    <script src=\"{{ asset('./BackOffice/vendor/jquery-3.2.1.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/jquery-3.2.1.min.js')}}\" ></script>
    <!-- Bootstrap JS-->
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/popper.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/bootstrap.min.js')}}\" ></script>
    <!-- Vendor JS-->
    <script src=\"{{ asset('./BackOffice/vendor/slick/slick.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/wow/wow.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/animsition/animsition.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/counter-up/jquery.waypoints.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/counter-up/jquery.counterup.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/circle-progress/circle-progress.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/chartjs/Chart.bundle.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/select2/select2.min.js')}}\" ></script>


    <!-- Main JS-->
    <script src=\"{{ asset('./BackOffice/js/main.js')}}\" ></script>
    <script src=\"https://kit.fontawesome.com/a781c8964e.js\" crossorigin=\"anonymous\"></script>


    <!-- Calendar -->
    <!--<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>-->



{% endblock %}

</html>
", "baseBack.html.twig", "C:\\wamp64\\www\\piDev-DevMinds2024\\templates\\baseBack.html.twig");
    }
}
