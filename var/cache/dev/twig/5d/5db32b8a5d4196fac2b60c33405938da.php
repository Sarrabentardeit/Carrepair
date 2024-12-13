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
        yield "    <div class=\"d-flex\" style=\"height: 100vh;\">
        <!-- Sidebar -->
        <nav id=\"sidebar\" class=\"bg-dark text-white vh-100 p-3\" style=\"width: 240px;\">
            <h5 class=\"text-center text-uppercase fw-bold mb-4\">Admin Panel</h5>
            <ul class=\"nav flex-column\">
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
                    <a class=\"nav-link text-white ";
        // line 17
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", ["_route"], "method", false, false, false, 17) == "app_register_admin")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin");
        yield "\">
                        <i class=\"bi bi-person-plus\"></i> Ajouter un Admin
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white ";
        // line 22
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_user_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                        <i class=\"bi bi-person-lines-fill\"></i> Gérer les Utilisateurs
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white ";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", ["_route"], "method", false, false, false, 27) == "admin_rendezvous")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rendezvous");
        yield "\">
                        <i class=\"bi bi-calendar-check\"></i> Gérer les Rendez-vous
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white ";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", ["_route"], "method", false, false, false, 32) == "app_product_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\">
                        <i class=\"bi bi-box\"></i> Gérer les Produits
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class=\"flex-grow-1 d-flex align-items-center justify-content-center\" style=\"background-color: #f8f9fa;\">
            <div class=\"card shadow-lg w-100 h-100 p-5\" style=\"max-width: 1200px; border-radius: 10px; background-color: white;\">
                <h2 class=\"text-center text-uppercase text-danger mb-4\">Créer un Compte Administrateur</h2>

                ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"form-group\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Nom"]);
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom"]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 mb-4\">
                        <div class=\"form-group\">
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "prenom", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Prénom"]);
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "prenom", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre prénom"]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "prenom", [], "any", false, false, false, 62), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"form-group mb-4\">
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Adresse Email"]);
        yield "
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre email"]]);
        yield "
                    <div class=\"invalid-feedback\">
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"form-group\">
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "plainPassword", [], "any", false, false, false, 79), "first", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Mot de passe"]);
        yield "
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "plainPassword", [], "any", false, false, false, 80), "first", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre mot de passe"]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "plainPassword", [], "any", false, false, false, 82), "first", [], "any", false, false, false, 82), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 mb-4\">
                        <div class=\"form-group\">
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), "plainPassword", [], "any", false, false, false, 89), "second", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Confirmation du mot de passe"]);
        yield "
                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "plainPassword", [], "any", false, false, false, 90), "second", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmez votre mot de passe"]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "plainPassword", [], "any", false, false, false, 92), "second", [], "any", false, false, false, 92), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">Créer Administrateur</button>
                </div>

                ";
        // line 102
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), 'form_end');
        yield "
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
        return array (  271 => 102,  258 => 92,  253 => 90,  249 => 89,  239 => 82,  234 => 80,  230 => 79,  220 => 72,  215 => 70,  211 => 69,  201 => 62,  196 => 60,  192 => 59,  182 => 52,  177 => 50,  173 => 49,  165 => 44,  148 => 32,  138 => 27,  128 => 22,  118 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Enregistrement d'un Administrateur{% endblock %}

{% block body %}
    <div class=\"d-flex\" style=\"height: 100vh;\">
        <!-- Sidebar -->
        <nav id=\"sidebar\" class=\"bg-dark text-white vh-100 p-3\" style=\"width: 240px;\">
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
            </ul>
        </nav>

        <!-- Main Content -->
        <div class=\"flex-grow-1 d-flex align-items-center justify-content-center\" style=\"background-color: #f8f9fa;\">
            <div class=\"card shadow-lg w-100 h-100 p-5\" style=\"max-width: 1200px; border-radius: 10px; background-color: white;\">
                <h2 class=\"text-center text-uppercase text-danger mb-4\">Créer un Compte Administrateur</h2>

                {{ form_start(registrationForm, { 'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'} }) }}

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.nom, 'Nom', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(registrationForm.nom, { 'attr': {'class': 'form-control', 'placeholder': 'Entrez votre nom'} }) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(registrationForm.nom) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 mb-4\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.prenom, 'Prénom', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(registrationForm.prenom, { 'attr': {'class': 'form-control', 'placeholder': 'Entrez votre prénom'} }) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(registrationForm.prenom) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"form-group mb-4\">
                    {{ form_label(registrationForm.email, 'Adresse Email', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control', 'placeholder': 'Entrez votre email'} }) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(registrationForm.email) }}
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.plainPassword.first, 'Mot de passe', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(registrationForm.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'Entrez votre mot de passe'} }) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(registrationForm.plainPassword.first) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 mb-4\">
                        <div class=\"form-group\">
                            {{ form_label(registrationForm.plainPassword.second, 'Confirmation du mot de passe', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            {{ form_widget(registrationForm.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'Confirmez votre mot de passe'} }) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(registrationForm.plainPassword.second) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-danger btn-lg\">Créer Administrateur</button>
                </div>

                {{ form_end(registrationForm) }}
            </div>
        </div>
    </div>
{% endblock %}
", "admin_dashboard/register_admin.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\admin_dashboard\\register_admin.html.twig");
    }
}
