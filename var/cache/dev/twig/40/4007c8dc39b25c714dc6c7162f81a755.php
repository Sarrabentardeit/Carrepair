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

/* admin_dashboard/vehicules/index.html.twig */
class __TwigTemplate_0367d68099987a0dc8090e37bbc1977c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/vehicules/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/vehicules/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_dashboard/vehicules/index.html.twig", 1);
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

        yield "Gérer Marques, Modèles et Motorisations";
        
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
                            <i class=\"bi bi-box\"></i> Gérer les Véhicules
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43) == "admin_orders")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        yield "\">
                            <i class=\"bi bi-box\"></i> Gérer les Commandes
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class=\"flex-grow-1 p-4\">
                <h1 class=\"mb-4 text-danger\">Gérer Marques, Modèles et Motorisations</h1>

                <!-- Flash Messages -->
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["success"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            yield "                    <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "flashes", ["error"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            yield "                    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "
                <!-- Tabs -->
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#marques\">Marques</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#modeles\">Modèles</a>
                    </li>
                </ul>

                <div class=\"tab-content mt-4\">
                    <!-- Marques Tab -->
                    <div id=\"marques\" class=\"tab-pane fade show active\">
                        <h2>Ajouter une Marque</h2>
                        ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["marqueForm"]) || array_key_exists("marqueForm", $context) ? $context["marqueForm"] : (function () { throw new RuntimeError('Variable "marqueForm" does not exist.', 76, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marqueForm"]) || array_key_exists("marqueForm", $context) ? $context["marqueForm"] : (function () { throw new RuntimeError('Variable "marqueForm" does not exist.', 78, $this->source); })()), "nom", [], "any", false, false, false, 78), 'label', ["label" => "Nom de la Marque"]);
        yield "
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marqueForm"]) || array_key_exists("marqueForm", $context) ? $context["marqueForm"] : (function () { throw new RuntimeError('Variable "marqueForm" does not exist.', 79, $this->source); })()), "nom", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <button class=\"btn btn-success\">Ajouter la Marque</button>
                        ";
        // line 82
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["marqueForm"]) || array_key_exists("marqueForm", $context) ? $context["marqueForm"] : (function () { throw new RuntimeError('Variable "marqueForm" does not exist.', 82, $this->source); })()), 'form_end');
        yield "

                        <h2 class=\"mt-5\">Liste des Marques</h2>
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 95
            yield "                                <tr>
                                    <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "id", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                                    <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "nom", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                                    <td>
                                        <button class=\"btn btn-warning btn-sm\">Modifier</button>
                                        <button class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['marque'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Modèles Tab -->
                    <div id=\"modeles\" class=\"tab-pane fade\">
                        <h2>Ajouter un Modèle</h2>
                        ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 111, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 113, $this->source); })()), "nom", [], "any", false, false, false, 113), 'label', ["label" => "Nom du Modèle"]);
        yield "
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 114, $this->source); })()), "nom", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 117, $this->source); })()), "marque", [], "any", false, false, false, 117), 'label', ["label" => "Marque Associée"]);
        yield "
                            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 118, $this->source); })()), "marque", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        </div>
                        <button class=\"btn btn-primary\">Ajouter le Modèle</button>
                        ";
        // line 121
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 121, $this->source); })()), 'form_end');
        yield "

                        <h2 class=\"mt-5\">Liste des Modèles</h2>
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Marque</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 135
            yield "                                <tr>
                                    <td>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "id", [], "any", false, false, false, 136), "html", null, true);
            yield "</td>
                                    <td>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "nom", [], "any", false, false, false, 137), "html", null, true);
            yield "</td>
                                    <td>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "marque", [], "any", false, false, false, 138), "nom", [], "any", false, false, false, 138), "html", null, true);
            yield "</td>
                                    <td>
                                        <button class=\"btn btn-warning btn-sm\">Modifier</button>
                                        <button class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['modele'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "                            </tbody>
                        </table>
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
        return "admin_dashboard/vehicules/index.html.twig";
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
        return array (  362 => 145,  349 => 138,  345 => 137,  341 => 136,  338 => 135,  334 => 134,  318 => 121,  312 => 118,  308 => 117,  302 => 114,  298 => 113,  293 => 111,  284 => 104,  271 => 97,  267 => 96,  264 => 95,  260 => 94,  245 => 82,  239 => 79,  235 => 78,  230 => 76,  213 => 61,  204 => 59,  199 => 58,  190 => 56,  186 => 55,  169 => 43,  159 => 38,  149 => 33,  139 => 28,  129 => 23,  119 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer Marques, Modèles et Motorisations{% endblock %}

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
                            <i class=\"bi bi-box\"></i> Gérer les Véhicules
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'admin_orders' ? 'active' : '' }}\" href=\"{{ path('admin_orders') }}\">
                            <i class=\"bi bi-box\"></i> Gérer les Commandes
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class=\"flex-grow-1 p-4\">
                <h1 class=\"mb-4 text-danger\">Gérer Marques, Modèles et Motorisations</h1>

                <!-- Flash Messages -->
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">{{ message }}</div>
                {% endfor %}
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger\">{{ message }}</div>
                {% endfor %}

                <!-- Tabs -->
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#marques\">Marques</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#modeles\">Modèles</a>
                    </li>
                </ul>

                <div class=\"tab-content mt-4\">
                    <!-- Marques Tab -->
                    <div id=\"marques\" class=\"tab-pane fade show active\">
                        <h2>Ajouter une Marque</h2>
                        {{ form_start(marqueForm) }}
                        <div class=\"mb-3\">
                            {{ form_label(marqueForm.nom, 'Nom de la Marque') }}
                            {{ form_widget(marqueForm.nom, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <button class=\"btn btn-success\">Ajouter la Marque</button>
                        {{ form_end(marqueForm) }}

                        <h2 class=\"mt-5\">Liste des Marques</h2>
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for marque in marques %}
                                <tr>
                                    <td>{{ marque.id }}</td>
                                    <td>{{ marque.nom }}</td>
                                    <td>
                                        <button class=\"btn btn-warning btn-sm\">Modifier</button>
                                        <button class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <!-- Modèles Tab -->
                    <div id=\"modeles\" class=\"tab-pane fade\">
                        <h2>Ajouter un Modèle</h2>
                        {{ form_start(modeleForm) }}
                        <div class=\"mb-3\">
                            {{ form_label(modeleForm.nom, 'Nom du Modèle') }}
                            {{ form_widget(modeleForm.nom, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(modeleForm.marque, 'Marque Associée') }}
                            {{ form_widget(modeleForm.marque, {'attr': {'class': 'form-select'}}) }}
                        </div>
                        <button class=\"btn btn-primary\">Ajouter le Modèle</button>
                        {{ form_end(modeleForm) }}

                        <h2 class=\"mt-5\">Liste des Modèles</h2>
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Marque</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for modele in modeles %}
                                <tr>
                                    <td>{{ modele.id }}</td>
                                    <td>{{ modele.nom }}</td>
                                    <td>{{ modele.marque.nom }}</td>
                                    <td>
                                        <button class=\"btn btn-warning btn-sm\">Modifier</button>
                                        <button class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
{% endblock %}
", "admin_dashboard/vehicules/index.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\admin_dashboard\\vehicules\\index.html.twig");
    }
}
