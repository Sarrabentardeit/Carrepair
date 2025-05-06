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

/* admin_dashboard/orders/orders.html.twig */
class __TwigTemplate_0daf0fdf0cad4d1bd9456604dc9cc18e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/orders/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/orders/orders.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_dashboard/orders/orders.html.twig", 1);
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

        yield "Gestion des Commandes";
        
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
            <nav id=\"sidebar\" class=\"bg-dark text-white vh-100\">
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
                <h1 class=\"text-center text-danger mb-4\">Gestion des Commandes</h1>

                <table class=\"table table-striped\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Type de Livraison</th>
                        <th>Nom du Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Montant Total</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 73, $this->source); })()), "items", [], "any", false, false, false, 73));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 74
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 74));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 75
                yield "                            <tr>
                                ";
                // line 76
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 76)) {
                    // line 77
                    yield "                                    <td rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 77)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 77), "html", null, true);
                    yield "</td>
                                    <td rowspan=\"";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 78)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "nom", [], "any", false, false, false, 78), "html", null, true);
                    yield "</td>
                                    <td rowspan=\"";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 79)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "prenom", [], "any", false, false, false, 79), "html", null, true);
                    yield "</td>
                                    <td rowspan=\"";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 80)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 80), "html", null, true);
                    yield "</td>
                                    <td rowspan=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 81)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 81), "html", null, true);
                    yield "</td>
                                    <td rowspan=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 82)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "typeLivraison", [], "any", false, false, false, 82), "html", null, true);
                    yield "</td>
                                ";
                }
                // line 84
                yield "                                <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 84), "html", null, true);
                yield "</td>
                                <td>";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 85), "html", null, true);
                yield "</td>
                                <td>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 86), "html", null, true);
                yield " TND</td>
                                ";
                // line 87
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 87)) {
                    // line 88
                    yield "                                    <td rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 88)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "montantTotal", [], "any", false, false, false, 88), "html", null, true);
                    yield " TND</td>
                                    <td rowspan=\"";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 89)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "dateCommande", [], "any", false, false, false, 89), "d/m/Y H:i"), "html", null, true);
                    yield "</td>
                                    <td rowspan=\"";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 90)), "html", null, true);
                    yield "\">
                        <span class=\"badge
                            ";
                    // line 92
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statut", [], "any", false, false, false, 92) == "Acceptée")) {
                        yield " bg-success
                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 93
$context["order"], "statut", [], "any", false, false, false, 93) == "Refusée")) {
                        yield " bg-danger
                            ";
                    } else {
                        // line 94
                        yield " bg-warning text-dark ";
                    }
                    yield "\">
                            ";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statut", [], "any", false, false, false, 95), "html", null, true);
                    yield "
                        </span>
                                    </td>
                                    <td rowspan=\"";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 98)), "html", null, true);
                    yield "\">
                                        <form method=\"post\" action=\"";
                    // line 99
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
                    yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"order_id\" value=\"";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 100), "html", null, true);
                    yield "\">
                                            <button type=\"submit\" name=\"action\" value=\"accept\" class=\"btn btn-success btn-sm\">Accepter</button>
                                            <button type=\"submit\" name=\"action\" value=\"reject\" class=\"btn btn-danger btn-sm\">Refuser</button>
                                        </form>
                                    </td>
                                ";
                }
                // line 106
                yield "                            </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 109
            yield "                        <tr>
                            <td colspan=\"13\" class=\"text-center\">Aucune commande trouvée.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                    </tbody>

                </table>
                <div class=\"d-flex justify-content-center mt-4\">
                    ";
        // line 117
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 117, $this->source); })()));
        yield "
                </div>
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
        return "admin_dashboard/orders/orders.html.twig";
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
        return array (  375 => 117,  369 => 113,  360 => 109,  355 => 108,  340 => 106,  331 => 100,  327 => 99,  323 => 98,  317 => 95,  312 => 94,  307 => 93,  303 => 92,  298 => 90,  292 => 89,  285 => 88,  283 => 87,  279 => 86,  275 => 85,  270 => 84,  263 => 82,  257 => 81,  251 => 80,  245 => 79,  239 => 78,  232 => 77,  230 => 76,  227 => 75,  209 => 74,  204 => 73,  169 => 43,  159 => 38,  149 => 33,  139 => 28,  129 => 23,  119 => 18,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Commandes{% endblock %}

{% block body %}
    <div class=\"admin-dashboard\">
        <div class=\"d-flex\">
            <!-- Sidebar -->
            <nav id=\"sidebar\" class=\"bg-dark text-white vh-100\">
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
                <h1 class=\"text-center text-danger mb-4\">Gestion des Commandes</h1>

                <table class=\"table table-striped\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Type de Livraison</th>
                        <th>Nom du Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Montant Total</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for order in pagination.items %}
                        {% for produit in order.produitsCommande %}
                            <tr>
                                {% if loop.first %}
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">{{ order.id }}</td>
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">{{ order.nom }}</td>
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">{{ order.prenom }}</td>
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">{{ order.email }}</td>
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">{{ order.telephone }}</td>
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">{{ order.typeLivraison }}</td>
                                {% endif %}
                                <td>{{ produit.nom }}</td>
                                <td>{{ produit.quantite }}</td>
                                <td>{{ produit.prix }} TND</td>
                                {% if loop.first %}
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">{{ order.montantTotal }} TND</td>
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">{{ order.dateCommande|date('d/m/Y H:i') }}</td>
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">
                        <span class=\"badge
                            {% if order.statut == 'Acceptée' %} bg-success
                            {% elseif order.statut == 'Refusée' %} bg-danger
                            {% else %} bg-warning text-dark {% endif %}\">
                            {{ order.statut }}
                        </span>
                                    </td>
                                    <td rowspan=\"{{ order.produitsCommande|length }}\">
                                        <form method=\"post\" action=\"{{ path('admin_orders') }}\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"order_id\" value=\"{{ order.id }}\">
                                            <button type=\"submit\" name=\"action\" value=\"accept\" class=\"btn btn-success btn-sm\">Accepter</button>
                                            <button type=\"submit\" name=\"action\" value=\"reject\" class=\"btn btn-danger btn-sm\">Refuser</button>
                                        </form>
                                    </td>
                                {% endif %}
                            </tr>
                        {% endfor %}
                    {% else %}
                        <tr>
                            <td colspan=\"13\" class=\"text-center\">Aucune commande trouvée.</td>
                        </tr>
                    {% endfor %}
                    </tbody>

                </table>
                <div class=\"d-flex justify-content-center mt-4\">
                    {{ knp_pagination_render(pagination) }}
                </div>
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
", "admin_dashboard/orders/orders.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\admin_dashboard\\orders\\orders.html.twig");
    }
}
