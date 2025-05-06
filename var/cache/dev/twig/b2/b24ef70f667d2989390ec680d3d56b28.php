<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin_dashboard/dashboard.html.twig */
class __TwigTemplate_673fcbb92e6ddbe37effe1c37fafca27 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_dashboard/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tableau de bord Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"admin-dashboard\">
        <div class=\"d-flex\">
            <!-- Sidebar -->
            <nav id=\"sidebar\" class=\"bg-dark text-white\">
                <h5 class=\"text-center text-uppercase fw-bold mb-4\">Admin Panel</h5>
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 13
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", ["_route"], "method", false, false, false, 13) == "app_admin_dashboard")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                            <i class=\"bi bi-house-door\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 18
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "attributes", [], "any", false, false, false, 18), "get", ["_route"], "method", false, false, false, 18) == "app_register_admin")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin");
        yield "\">
                            <i class=\"bi bi-person-plus\"></i> Ajouter un Admin
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 23
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "attributes", [], "any", false, false, false, 23), "get", ["_route"], "method", false, false, false, 23) == "app_user_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                            <i class=\"bi bi-person-lines-fill\"></i> Gérer les Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "admin_rendezvous")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rendezvous");
        yield "\">
                            <i class=\"bi bi-calendar-check\"></i> Gérer les Rendez-vous
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "app_product_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\">
                            <i class=\"bi bi-box\"></i> Gérer les Produits
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "attributes", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38) == "admin_vehicules")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_vehicules");
        yield "\">
                            <i class=\"bi bi-box\"></i> Gérer les Vehicules
                        </a>
                    </li>

                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 44
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44) == "admin_orders")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\">
                            <i class=\"bi bi-box\"></i>Gérez toutes les commandes
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main content -->
            <main class=\"flex-grow-1 p-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom\">
                    <h1 class=\"h2 fw-bold text-danger\">Tableau de bord Admin</h1>
                    <div class=\"text-end\">
                        <p class=\"text-muted mb-1\">Bienvenue, ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "nom", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
                        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-outline-danger btn-sm\">Déconnexion</a>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class=\"row g-4\">
                    <!-- Card for Users -->
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"card bg-dark text-white shadow-sm h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-people fs-1 text-danger\"></i>
                                <h5 class=\"card-title mt-3\">Utilisateurs</h5>
                                <p class=\"card-text\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["usersCount"]) || array_key_exists("usersCount", $context) ? $context["usersCount"] : (function () { throw new RuntimeError('Variable "usersCount" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "</p>
                                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-danger btn-sm mt-2\">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Appointments -->
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"card bg-dark text-white shadow-sm h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-calendar-check fs-1 text-danger\"></i>
                                <h5 class=\"card-title mt-3\">Rendez-vous</h5>
                                <p class=\"card-text\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["appointmentsCount"]) || array_key_exists("appointmentsCount", $context) ? $context["appointmentsCount"] : (function () { throw new RuntimeError('Variable "appointmentsCount" does not exist.', 81, $this->source); })()), "html", null, true);
        yield "</p>
                                <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rendezvous");
        yield "\" class=\"btn btn-danger btn-sm mt-2\">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Products -->
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"card bg-dark text-white shadow-sm h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-box-seam fs-1 text-danger\"></i>
                                <h5 class=\"card-title mt-3\">Produits</h5>
                                <p class=\"card-text\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["productsCount"]) || array_key_exists("productsCount", $context) ? $context["productsCount"] : (function () { throw new RuntimeError('Variable "productsCount" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "</p>
                                <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" class=\"btn btn-danger btn-sm mt-2\">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Admins -->
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"card bg-dark text-white shadow-sm h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-person-badge fs-1 text-danger\"></i>
                                <h5 class=\"card-title mt-3\">Admins</h5>
                                <p class=\"card-text\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["adminsCount"]) || array_key_exists("adminsCount", $context) ? $context["adminsCount"] : (function () { throw new RuntimeError('Variable "adminsCount" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</p>
                                <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin");
        yield "\" class=\"btn btn-danger btn-sm mt-2\">Ajouter Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin_dashboard/dashboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  264 => 106,  260 => 105,  246 => 94,  242 => 93,  228 => 82,  224 => 81,  210 => 70,  206 => 69,  191 => 57,  187 => 56,  170 => 44,  159 => 38,  149 => 33,  139 => 28,  129 => 23,  119 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord Admin{% endblock %}

{% block body %}
    <div class=\"admin-dashboard\">
        <div class=\"d-flex\">
            <!-- Sidebar -->
            <nav id=\"sidebar\" class=\"bg-dark text-white\">
                <h5 class=\"text-center text-uppercase fw-bold mb-4\">Admin Panel</h5>
                <ul class=\"nav flex-column\">
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'app_admin_dashboard' ? 'active' : '' }}\" href=\"{{ path('app_admin_dashboard') }}\">
                            <i class=\"bi bi-house-door\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'app_register_admin' ? 'active' : '' }}\" href=\"{{ path('app_register_admin') }}\">
                            <i class=\"bi bi-person-plus\"></i> Ajouter un Admin
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'app_user_index' ? 'active' : '' }}\" href=\"{{ path('app_user_index') }}\">
                            <i class=\"bi bi-person-lines-fill\"></i> Gérer les Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'admin_rendezvous' ? 'active' : '' }}\" href=\"{{ path('admin_rendezvous') }}\">
                            <i class=\"bi bi-calendar-check\"></i> Gérer les Rendez-vous
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'app_product_index' ? 'active' : '' }}\" href=\"{{ path('app_product_index') }}\">
                            <i class=\"bi bi-box\"></i> Gérer les Produits
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'admin_vehicules' ? 'active' : '' }}\" href=\"{{ path('admin_vehicules') }}\">
                            <i class=\"bi bi-box\"></i> Gérer les Vehicules
                        </a>
                    </li>

                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'admin_orders' ? 'active' : '' }}\" href=\"{{ path('admin_orders') }}\">
                            <i class=\"bi bi-box\"></i>Gérez toutes les commandes
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main content -->
            <main class=\"flex-grow-1 p-4\">
                <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom\">
                    <h1 class=\"h2 fw-bold text-danger\">Tableau de bord Admin</h1>
                    <div class=\"text-end\">
                        <p class=\"text-muted mb-1\">Bienvenue, {{ app.user.nom }}</p>
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-danger btn-sm\">Déconnexion</a>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class=\"row g-4\">
                    <!-- Card for Users -->
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"card bg-dark text-white shadow-sm h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-people fs-1 text-danger\"></i>
                                <h5 class=\"card-title mt-3\">Utilisateurs</h5>
                                <p class=\"card-text\">{{ usersCount }}</p>
                                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-danger btn-sm mt-2\">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Appointments -->
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"card bg-dark text-white shadow-sm h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-calendar-check fs-1 text-danger\"></i>
                                <h5 class=\"card-title mt-3\">Rendez-vous</h5>
                                <p class=\"card-text\">{{ appointmentsCount }}</p>
                                <a href=\"{{ path('admin_rendezvous') }}\" class=\"btn btn-danger btn-sm mt-2\">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Products -->
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"card bg-dark text-white shadow-sm h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-box-seam fs-1 text-danger\"></i>
                                <h5 class=\"card-title mt-3\">Produits</h5>
                                <p class=\"card-text\">{{ productsCount }}</p>
                                <a href=\"{{ path('app_product_index') }}\" class=\"btn btn-danger btn-sm mt-2\">Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Admins -->
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"card bg-dark text-white shadow-sm h-100\">
                            <div class=\"card-body text-center\">
                                <i class=\"bi bi-person-badge fs-1 text-danger\"></i>
                                <h5 class=\"card-title mt-3\">Admins</h5>
                                <p class=\"card-text\">{{ adminsCount }}</p>
                                <a href=\"{{ path('app_register_admin') }}\" class=\"btn btn-danger btn-sm mt-2\">Ajouter Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
{% endblock %}
", "admin_dashboard/dashboard.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\admin_dashboard\\dashboard.html.twig");
    }
}
