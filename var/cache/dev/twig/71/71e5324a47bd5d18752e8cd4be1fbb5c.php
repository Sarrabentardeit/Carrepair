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
class __TwigTemplate_1c28b1ad36c9d1bb8b6cb4b38c870647 extends Template
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
        yield "    <div class=\"d-flex\">
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
            <h1 class=\"text-center mb-4\">Gestion des Commandes</h1>

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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 72, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 73
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 73));
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
                // line 74
                yield "                        <tr>
                            ";
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 75)) {
                    // line 76
                    yield "                                <td rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 76)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 76), "html", null, true);
                    yield "</td>
                                <td rowspan=\"";
                    // line 77
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 77)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "nom", [], "any", false, false, false, 77), "html", null, true);
                    yield "</td>
                                <td rowspan=\"";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 78)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "prenom", [], "any", false, false, false, 78), "html", null, true);
                    yield "</td>
                                <td rowspan=\"";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 79)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 79), "html", null, true);
                    yield "</td>
                                <td rowspan=\"";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 80)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 80), "html", null, true);
                    yield "</td>
                                <td rowspan=\"";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 81)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "typeLivraison", [], "any", false, false, false, 81), "html", null, true);
                    yield "</td>
                            ";
                }
                // line 83
                yield "                            <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 83), "html", null, true);
                yield "</td>
                            <td>";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 84), "html", null, true);
                yield "</td>
                            <td>";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 85), "html", null, true);
                yield " TND</td>
                            ";
                // line 86
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 86)) {
                    // line 87
                    yield "                                <td rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 87)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "montantTotal", [], "any", false, false, false, 87), "html", null, true);
                    yield " TND</td>
                                <td rowspan=\"";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 88)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "dateCommande", [], "any", false, false, false, 88), "d/m/Y H:i"), "html", null, true);
                    yield "</td>
                                <td rowspan=\"";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 89)), "html", null, true);
                    yield "\">
                                    <span class=\"badge
                                        ";
                    // line 91
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statut", [], "any", false, false, false, 91) == "Acceptée")) {
                        yield " bg-success
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 92
$context["order"], "statut", [], "any", false, false, false, 92) == "Refusée")) {
                        yield " bg-danger
                                        ";
                    } else {
                        // line 93
                        yield " bg-warning text-dark ";
                    }
                    yield "\">
                                        ";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "statut", [], "any", false, false, false, 94), "html", null, true);
                    yield "
                                    </span>
                                </td>
                                <td rowspan=\"";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "produitsCommande", [], "any", false, false, false, 97)), "html", null, true);
                    yield "\">
                                    <form method=\"post\" action=\"";
                    // line 98
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
                    yield "\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"order_id\" value=\"";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 99), "html", null, true);
                    yield "\">
                                        <button type=\"submit\" name=\"action\" value=\"accept\" class=\"btn btn-success btn-sm\">Accepter</button>
                                        <button type=\"submit\" name=\"action\" value=\"reject\" class=\"btn btn-danger btn-sm\">Refuser</button>
                                    </form>
                                </td>

                            ";
                }
                // line 106
                yield "                        </tr>
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
            yield "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 109
            yield "                    <tr>
                        <td colspan=\"13\" class=\"text-center\">Aucune commande trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                </tbody>
            </table>
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
        return array (  369 => 113,  360 => 109,  355 => 108,  340 => 106,  330 => 99,  326 => 98,  322 => 97,  316 => 94,  311 => 93,  306 => 92,  302 => 91,  297 => 89,  291 => 88,  284 => 87,  282 => 86,  278 => 85,  274 => 84,  269 => 83,  262 => 81,  256 => 80,  250 => 79,  244 => 78,  238 => 77,  231 => 76,  229 => 75,  226 => 74,  208 => 73,  203 => 72,  168 => 42,  158 => 37,  148 => 32,  138 => 27,  128 => 22,  118 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Commandes{% endblock %}

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
            <h1 class=\"text-center mb-4\">Gestion des Commandes</h1>

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
                {% for order in orders %}
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
        </div>
    </div>
{% endblock %}
", "admin_dashboard/orders/orders.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\admin_dashboard\\orders\\orders.html.twig");
    }
}
