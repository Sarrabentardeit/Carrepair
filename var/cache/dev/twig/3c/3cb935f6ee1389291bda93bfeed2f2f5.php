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
class __TwigTemplate_54a18d769bdf1f197d2d86ec4d1760ef extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"d-flex\">
        <!-- Sidebar -->
        <nav id=\"sidebar\" class=\"bg-dark text-white vh-100\">
            <h5 class=\"text-center text-uppercase fw-bold mb-4 py-3\">Admin Panel</h5>
            <ul class=\"nav flex-column px-3\">
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white ";
        // line 10
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", ["_route"], "method", false, false, false, 10) == "app_admin_dashboard")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                        <i class=\"bi bi-house-door\"></i> Tableau de bord
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white ";
        // line 15
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["_route"], "method", false, false, false, 15) == "app_register_admin")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin");
        yield "\">
                        <i class=\"bi bi-person-plus me-2\"></i> Ajouter un Admin
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white ";
        // line 20
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", ["_route"], "method", false, false, false, 20) == "app_user_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                        <i class=\"bi bi-person-lines-fill me-2\"></i> Gérer les Utilisateurs
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white ";
        // line 25
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25) == "admin_rendezvous")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rendezvous");
        yield "\">
                        <i class=\"bi bi-calendar-check me-2\"></i> Gérer les Rendez-vous
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white ";
        // line 30
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", ["_route"], "method", false, false, false, 30) == "app_product_index")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\">
                        <i class=\"bi bi-box me-2\"></i> Gérer les Produits
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-danger text-white text-center\">
                    <h2 class=\"fw-bold mb-0\">Liste des Produits</h2>
                </div>
                <div class=\"card-body\">
                    <!-- Barre de recherche -->
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <form class=\"form-inline d-flex\" action=\"\" method=\"get\">
                            <input type=\"text\" class=\"form-control me-2\" placeholder=\"Rechercher un produit...\" name=\"search\" style=\"max-width: 300px;\">
                            <button type=\"submit\" class=\"btn btn-outline-danger\">
                                <i class=\"bi bi-search\"></i> Rechercher
                            </button>
                        </form>
                        <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_new");
        yield "\" class=\"btn btn-danger\">
                            <i class=\"bi bi-plus-lg\"></i> Créer un nouveau produit
                        </a>
                    </div>

                    <!-- Tableau des produits -->
                    <table class=\"table table-hover text-center align-middle\">
                        <thead style=\"background-color: #343a40; color: #fff;\">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Description</th>
                            <th>Quantité en Stock</th>
                            <th>Date d'Ajout</th>
                            <th>SEO Titre</th>
                            <th>Slug</th>
                            <th>Indexable</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 76
            yield "                            <tr>
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 79), 2, ",", " "), "html", null, true);
            yield " DT</td>
                                <td class=\"text-truncate\" style=\"max-width: 150px;\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                                <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                                <td>";
            // line 82
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dateAjout", [], "any", false, false, false, 82)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dateAjout", [], "any", false, false, false, 82), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "</td>
                                <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "seoTitre", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                                <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
                                <td>
                                <span class=\"badge ";
            // line 86
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "indexable", [], "any", false, false, false, 86)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                    ";
            // line 87
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "indexable", [], "any", false, false, false, 87)) ? ("Oui") : ("Non"));
            yield "
                                </span>
                                </td>
                                <td>
                                    ";
            // line 91
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 91)) {
                // line 92
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 92))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 92), "html", null, true);
                yield "\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                                    ";
            } else {
                // line 94
                yield "                                        <span class=\"text-muted\">Pas d'image</span>
                                    ";
            }
            // line 96
            yield "                                </td>
                                <td>
                                    <a href=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm me-1\">
                                        <i class=\"bi bi-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm me-1\">
                                        <i class=\"bi bi-pencil\"></i>
                                    </a>
                                    <form action=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" method=\"POST\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 105))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 113
            yield "                            <tr>
                                <td colspan=\"11\" class=\"text-center\">Aucun produit trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "                        </tbody>
                    </table>
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
        return array (  285 => 117,  276 => 113,  263 => 105,  259 => 104,  253 => 101,  247 => 98,  243 => 96,  239 => 94,  231 => 92,  229 => 91,  222 => 87,  218 => 86,  213 => 84,  209 => 83,  205 => 82,  201 => 81,  197 => 80,  193 => 79,  189 => 78,  185 => 77,  182 => 76,  177 => 75,  151 => 52,  124 => 30,  114 => 25,  104 => 20,  94 => 15,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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
                    <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'app_register_admin' ? 'active' : '' }}\" href=\"{{ path('app_register_admin') }}\">
                        <i class=\"bi bi-person-plus me-2\"></i> Ajouter un Admin
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'app_user_index' ? 'active' : '' }}\" href=\"{{ path('app_user_index') }}\">
                        <i class=\"bi bi-person-lines-fill me-2\"></i> Gérer les Utilisateurs
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'admin_rendezvous' ? 'active' : '' }}\" href=\"{{ path('admin_rendezvous') }}\">
                        <i class=\"bi bi-calendar-check me-2\"></i> Gérer les Rendez-vous
                    </a>
                </li>
                <li class=\"nav-item mb-3\">
                    <a class=\"nav-link text-white {{ app.request.attributes.get('_route') == 'app_product_index' ? 'active' : '' }}\" href=\"{{ path('app_product_index') }}\">
                        <i class=\"bi bi-box me-2\"></i> Gérer les Produits
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-danger text-white text-center\">
                    <h2 class=\"fw-bold mb-0\">Liste des Produits</h2>
                </div>
                <div class=\"card-body\">
                    <!-- Barre de recherche -->
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <form class=\"form-inline d-flex\" action=\"\" method=\"get\">
                            <input type=\"text\" class=\"form-control me-2\" placeholder=\"Rechercher un produit...\" name=\"search\" style=\"max-width: 300px;\">
                            <button type=\"submit\" class=\"btn btn-outline-danger\">
                                <i class=\"bi bi-search\"></i> Rechercher
                            </button>
                        </form>
                        <a href=\"{{ path('app_product_new') }}\" class=\"btn btn-danger\">
                            <i class=\"bi bi-plus-lg\"></i> Créer un nouveau produit
                        </a>
                    </div>

                    <!-- Tableau des produits -->
                    <table class=\"table table-hover text-center align-middle\">
                        <thead style=\"background-color: #343a40; color: #fff;\">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Description</th>
                            <th>Quantité en Stock</th>
                            <th>Date d'Ajout</th>
                            <th>SEO Titre</th>
                            <th>Slug</th>
                            <th>Indexable</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for product in products %}
                            <tr>
                                <td>{{ product.id }}</td>
                                <td>{{ product.nom }}</td>
                                <td>{{ product.prix | number_format(2, ',', ' ') }} DT</td>
                                <td class=\"text-truncate\" style=\"max-width: 150px;\">{{ product.description }}</td>
                                <td>{{ product.quantiteEnStock }}</td>
                                <td>{{ product.dateAjout ? product.dateAjout|date('Y-m-d H:i') : '' }}</td>
                                <td>{{ product.seoTitre }}</td>
                                <td>{{ product.slug }}</td>
                                <td>
                                <span class=\"badge {{ product.indexable ? 'bg-success' : 'bg-danger' }}\">
                                    {{ product.indexable ? 'Oui' : 'Non' }}
                                </span>
                                </td>
                                <td>
                                    {% if product.image %}
                                        <img src=\"{{ asset('uploads/images/' ~ product.image) }}\" alt=\"{{ product.nom }}\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                                    {% else %}
                                        <span class=\"text-muted\">Pas d'image</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" class=\"btn btn-primary btn-sm me-1\">
                                        <i class=\"bi bi-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_product_edit', {'id': product.id}) }}\" class=\"btn btn-warning btn-sm me-1\">
                                        <i class=\"bi bi-pencil\"></i>
                                    </a>
                                    <form action=\"{{ path('app_product_delete', {'id': product.id}) }}\" method=\"POST\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ product.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"bi bi-trash\"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"11\" class=\"text-center\">Aucun produit trouvé</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "product/index.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\product\\index.html.twig");
    }
}
