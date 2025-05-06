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

/* product/index.html.twig */
class __TwigTemplate_af1b66f9776e15c90541d4cfcea1e226 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        yield "Gestion des Produits";
        
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
        yield "
    <div class=\"admin-dashboard\">
        <div class=\"d-flex\">
            <!-- Sidebar -->
            <nav id=\"sidebar\" class=\"bg-dark text-white vh-100\">
                <h5 class=\"text-center text-uppercase fw-bold mb-4\">Admin Panel</h5>
                <ul class=\"nav flex-column px-3\">
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 14
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "attributes", [], "any", false, false, false, 14), "get", ["_route"], "method", false, false, false, 14) == "app_admin_dashboard")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                            <i class=\"bi bi-house-door\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 19
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", ["_route"], "method", false, false, false, 19) == "app_register_admin")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin");
        yield "\">
                            <i class=\"bi bi-person-plus\"></i> Ajouter un Admin
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 24
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "attributes", [], "any", false, false, false, 24), "get", ["_route"], "method", false, false, false, 24) == "app_user_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                            <i class=\"bi bi-person-lines-fill\"></i> Gérer les Utilisateurs
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29) == "admin_rendezvous")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rendezvous");
        yield "\">
                            <i class=\"bi bi-calendar-check\"></i> Gérer les Rendez-vous
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 34
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "attributes", [], "any", false, false, false, 34), "get", ["_route"], "method", false, false, false, 34) == "app_product_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\">
                            <i class=\"bi bi-box\"></i> Gérer les Produits
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "attributes", [], "any", false, false, false, 39), "get", ["_route"], "method", false, false, false, 39) == "admin_vehicules")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_vehicules");
        yield "\">
                            <i class=\"bi bi-box\"></i> Gérer les Véhicules
                        </a>
                    </li>
                    <li class=\"nav-item mb-3\">
                        <a class=\"nav-link text-white ";
        // line 44
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44) == "admin_orders")) ? ("active") : (""));
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
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"text-danger fw-bold\">Gestion des Produits</h1>
                    <div>
                        <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_new");
        yield "\" class=\"btn btn-primary rounded-pill\">+ Créer une Catégorie</a>
                        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subcategory_new");
        yield "\" class=\"btn btn-success rounded-pill\">+ Créer une Sous-catégorie</a>
                        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_new");
        yield "\" class=\"btn btn-danger rounded-pill\">+ Créer un Produit</a>
                    </div>
                </div>

                <table class=\"table table-hover shadow-sm\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Quantité en Stock</th>
                        <th>Date d'Ajout</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 75, $this->source); })()), "items", [], "any", false, false, false, 75));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 76
            yield "                        <tr>
                            <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                            <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                            <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 79), "html", null, true);
            yield " TND</td>
                            <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                            <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                            <td>";
            // line 82
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dateAjout", [], "any", false, false, false, 82)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dateAjout", [], "any", false, false, false, 82), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
                            <td>
                                <a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm rounded-pill\">Voir</a>
                                <a href=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-sm rounded-pill\">Modifier</a>
                                <form method=\"post\" action=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 87))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-outline-danger btn-sm rounded-pill\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 93
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center text-muted\">Aucun produit trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                    </tbody>

                </table>
                <div class=\"d-flex justify-content-center mt-4\">
                    ";
        // line 101
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 101, $this->source); })()));
        yield "
                </div>
                ";
        // line 103
        if (array_key_exists("produit", $context)) {
            // line 104
            yield "                    <div class=\"mt-5\">
                        <h3 class=\"text-danger\">Détails du Produit</h3>
                        <p><strong>Nom :</strong> ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 106, $this->source); })()), "nom", [], "any", false, false, false, 106), "html", null, true);
            yield "</p>
                        <p><strong>Prix :</strong> ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 107, $this->source); })()), "prix", [], "any", false, false, false, 107), "html", null, true);
            yield " TND</p>
                        <p><strong>Motorisations Compatibles :</strong></p>
                        <ul>
                            ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 110, $this->source); })()), "compatibilites", [], "any", false, false, false, 110));
            foreach ($context['_seq'] as $context["_key"] => $context["motorisation"]) {
                // line 111
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "nom", [], "any", false, false, false, 111), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "modele", [], "any", false, false, false, 111), "nom", [], "any", false, false, false, 111), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "modele", [], "any", false, false, false, 111), "marque", [], "any", false, false, false, 111), "nom", [], "any", false, false, false, 111), "html", null, true);
                yield ")</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['motorisation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "                        </ul>
                    </div>
                ";
        }
        // line 116
        yield "            </main>


        </div>
    </div>

        <style> .pagination a, .pagination span {
            padding: 10px 15px;
            margin: 0 5px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            text-decoration: none;
            color: #dc3545;
        }

        .pagination a:hover {
            background-color: #dc3545;
            color: white;
        }

        .pagination .active span {
            background-color: #dc3545;
            color: white;
            border-color: #dc3545 ;
        }</style>


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
        return "product/index.html.twig";
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
        return array (  329 => 116,  324 => 113,  311 => 111,  307 => 110,  301 => 107,  297 => 106,  293 => 104,  291 => 103,  286 => 101,  280 => 97,  271 => 93,  260 => 87,  256 => 86,  252 => 85,  248 => 84,  243 => 82,  239 => 81,  235 => 80,  231 => 79,  227 => 78,  223 => 77,  220 => 76,  215 => 75,  195 => 58,  191 => 57,  187 => 56,  170 => 44,  160 => 39,  150 => 34,  140 => 29,  130 => 24,  120 => 19,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Produits{% endblock %}

{% block body %}

    <div class=\"admin-dashboard\">
        <div class=\"d-flex\">
            <!-- Sidebar -->
            <nav id=\"sidebar\" class=\"bg-dark text-white vh-100\">
                <h5 class=\"text-center text-uppercase fw-bold mb-4\">Admin Panel</h5>
                <ul class=\"nav flex-column px-3\">
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
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h1 class=\"text-danger fw-bold\">Gestion des Produits</h1>
                    <div>
                        <a href=\"{{ path('app_category_new') }}\" class=\"btn btn-primary rounded-pill\">+ Créer une Catégorie</a>
                        <a href=\"{{ path('subcategory_new') }}\" class=\"btn btn-success rounded-pill\">+ Créer une Sous-catégorie</a>
                        <a href=\"{{ path('app_product_new') }}\" class=\"btn btn-danger rounded-pill\">+ Créer un Produit</a>
                    </div>
                </div>

                <table class=\"table table-hover shadow-sm\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Quantité en Stock</th>
                        <th>Date d'Ajout</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for product in pagination.items %}
                        <tr>
                            <td>{{ product.id }}</td>
                            <td>{{ product.nom }}</td>
                            <td>{{ product.prix }} TND</td>
                            <td>{{ product.description }}</td>
                            <td>{{ product.quantiteEnStock }}</td>
                            <td>{{ product.dateAjout ? product.dateAjout|date('d/m/Y H:i') : '' }}</td>
                            <td>
                                <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" class=\"btn btn-outline-info btn-sm rounded-pill\">Voir</a>
                                <a href=\"{{ path('app_product_edit', {'id': product.id}) }}\" class=\"btn btn-outline-warning btn-sm rounded-pill\">Modifier</a>
                                <form method=\"post\" action=\"{{ path('app_product_delete', {'id': product.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ product.id) }}\">
                                    <button class=\"btn btn-outline-danger btn-sm rounded-pill\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\" class=\"text-center text-muted\">Aucun produit trouvé</td>
                        </tr>
                    {% endfor %}
                    </tbody>

                </table>
                <div class=\"d-flex justify-content-center mt-4\">
                    {{ knp_pagination_render(pagination) }}
                </div>
                {% if produit is defined %}
                    <div class=\"mt-5\">
                        <h3 class=\"text-danger\">Détails du Produit</h3>
                        <p><strong>Nom :</strong> {{ produit.nom }}</p>
                        <p><strong>Prix :</strong> {{ produit.prix }} TND</p>
                        <p><strong>Motorisations Compatibles :</strong></p>
                        <ul>
                            {% for motorisation in produit.compatibilites %}
                                <li>{{ motorisation.nom }} ({{ motorisation.modele.nom }} - {{ motorisation.modele.marque.nom }})</li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}
            </main>


        </div>
    </div>

        <style> .pagination a, .pagination span {
            padding: 10px 15px;
            margin: 0 5px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            text-decoration: none;
            color: #dc3545;
        }

        .pagination a:hover {
            background-color: #dc3545;
            color: white;
        }

        .pagination .active span {
            background-color: #dc3545;
            color: white;
            border-color: #dc3545 ;
        }</style>


{% endblock %}
", "product/index.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\product\\index.html.twig");
    }
}
