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

/* admin_dashboard/register_admin.html.twig */
class __TwigTemplate_9cdeadcb480de0388d58556bfc937ca2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/register_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/register_admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_dashboard/register_admin.html.twig", 1);
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

        yield "Enregistrement d'un Administrateur";
        
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
        yield "        <div class=\"d-flex\">
            <!-- Sidebar -->
            <nav id=\"sidebar\" class=\"bg-dark text-white vh-100\">
                <h5 class=\"text-center text-uppercase fw-bold mb-4 py-3\">Admin Panel</h5>
                <ul class=\"nav flex-column px-3\">
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 12
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12) == "app_admin_dashboard")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                            <i class=\"bi bi-house-door\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center ";
        // line 17
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17) == "app_register_admin")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin");
        yield "\">
                            <i class=\"bi bi-person-plus me-2\"></i> Ajouter un Admin
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center ";
        // line 22
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_user_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                            <i class=\"bi bi-person-lines-fill me-2\"></i> Gérer les Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center ";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", ["_route"], "method", false, false, false, 27) == "admin_rendezvous")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rendezvous");
        yield "\">
                            <i class=\"bi bi-calendar-check me-2\"></i> Gérer les Rendez-vous
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center ";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", ["_route"], "method", false, false, false, 32) == "app_product_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\">
                            <i class=\"bi bi-box me-2\"></i> Gérer les Produits
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center ";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "attributes", [], "any", false, false, false, 37), "get", ["_route"], "method", false, false, false, 37) == "admin_vehicules")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_vehicules");
        yield "\">
                            <i class=\"bi bi-box me-2\"></i> Gérer les Véhicules
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center ";
        // line 42
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42) == "admin_orders")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\">
                            <i class=\"bi bi-box me-2\"></i> Gérer les Commandes
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <div class=\"flex-grow-1 p-4\">
                <div id=\"card-admin-registration\" class=\"card shadow-lg\">
                    <div class=\"card-header text-center bg-red\">
                        <h3>Créer un Compte Administrateur</h3>
                    </div>

                    <div class=\"card-body\">
                        ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), 'form_start');
        yield "

                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label fw-bold\">Adresse Email</label>
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez l'email"]]);
        yield "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"nom\" class=\"form-label fw-bold\">Nom</label>
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"prenom\" class=\"form-label fw-bold\">Prénom</label>
                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "prenom", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le prénom"]]);
        yield "
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"password\" class=\"form-label fw-bold\">Mot de passe</label>
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "plainPassword", [], "any", false, false, false, 77), "first", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le mot de passe"]]);
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"confirm_password\" class=\"form-label fw-bold\">Confirmez le Mot de passe</label>
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "plainPassword", [], "any", false, false, false, 82), "second", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmez le mot de passe"]]);
        yield "
                        </div>

                        <button class=\"btn btn-primary w-100 py-2 mt-3\">Créer Administrateur</button>

                        ";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>



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
        return "admin_dashboard/register_admin.html.twig";
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
        return array (  236 => 87,  228 => 82,  220 => 77,  211 => 71,  204 => 67,  195 => 61,  188 => 57,  168 => 42,  158 => 37,  148 => 32,  138 => 27,  128 => 22,  118 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Enregistrement d'un Administrateur{% endblock %}

{% block body %}
        <div class=\"d-flex\">
            <!-- Sidebar -->
            <nav id=\"sidebar\" class=\"bg-dark text-white vh-100\">
                <h5 class=\"text-center text-uppercase fw-bold mb-4 py-3\">Admin Panel</h5>
                <ul class=\"nav flex-column px-3\">
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'app_admin_dashboard' ? 'active' : '' }}\" href=\"{{ path('app_admin_dashboard') }}\">
                            <i class=\"bi bi-house-door\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center {{ app.request.attributes.get('_route') == 'app_register_admin' ? 'active' : '' }}\" href=\"{{ path('app_register_admin') }}\">
                            <i class=\"bi bi-person-plus me-2\"></i> Ajouter un Admin
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center {{ app.request.attributes.get('_route') == 'app_user_index' ? 'active' : '' }}\" href=\"{{ path('app_user_index') }}\">
                            <i class=\"bi bi-person-lines-fill me-2\"></i> Gérer les Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center {{ app.request.attributes.get('_route') == 'admin_rendezvous' ? 'active' : '' }}\" href=\"{{ path('admin_rendezvous') }}\">
                            <i class=\"bi bi-calendar-check me-2\"></i> Gérer les Rendez-vous
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center {{ app.request.attributes.get('_route') == 'app_product_index' ? 'active' : '' }}\" href=\"{{ path('app_product_index') }}\">
                            <i class=\"bi bi-box me-2\"></i> Gérer les Produits
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center {{ app.request.attributes.get('_route') == 'admin_vehicules' ? 'active' : '' }}\" href=\"{{ path('admin_vehicules') }}\">
                            <i class=\"bi bi-box me-2\"></i> Gérer les Véhicules
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white d-flex align-items-center {{ app.request.attributes.get('_route') == 'admin_orders' ? 'active' : '' }}\" href=\"{{ path('admin_orders') }}\">
                            <i class=\"bi bi-box me-2\"></i> Gérer les Commandes
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <div class=\"flex-grow-1 p-4\">
                <div id=\"card-admin-registration\" class=\"card shadow-lg\">
                    <div class=\"card-header text-center bg-red\">
                        <h3>Créer un Compte Administrateur</h3>
                    </div>

                    <div class=\"card-body\">
                        {{ form_start(registrationForm) }}

                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label fw-bold\">Adresse Email</label>
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Entrez l\\'email'}}) }}
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"nom\" class=\"form-label fw-bold\">Nom</label>
                                {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'Entrez le nom'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"prenom\" class=\"form-label fw-bold\">Prénom</label>
                                {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Entrez le prénom'}}) }}
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"password\" class=\"form-label fw-bold\">Mot de passe</label>
                            {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': 'Entrez le mot de passe'}}) }}
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"confirm_password\" class=\"form-label fw-bold\">Confirmez le Mot de passe</label>
                            {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': 'Confirmez le mot de passe'}}) }}
                        </div>

                        <button class=\"btn btn-primary w-100 py-2 mt-3\">Créer Administrateur</button>

                        {{ form_end(registrationForm) }}
                    </div>
                </div>



            </div>
            </div>
{% endblock %}
", "admin_dashboard/register_admin.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\admin_dashboard\\register_admin.html.twig");
    }
}
