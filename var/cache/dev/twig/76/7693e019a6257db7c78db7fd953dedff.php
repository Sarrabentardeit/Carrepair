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
class __TwigTemplate_e14584b5564fe276e71ee7b970f1188a extends Template
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
            <div class=\"container mt-5\">
                <h1 class=\"mb-4\">Gérer Marques, Modèles et Motorisations</h1>

                <!-- Flash Messages -->
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", ["success"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 56
            yield "                    <div class=\"alert alert-success\">
                        ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["error"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 61
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "
                <!-- Onglets -->
                <ul class=\"nav nav-tabs\" id=\"vehicleTabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"marque-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#marque\" type=\"button\" role=\"tab\" aria-controls=\"marque\" aria-selected=\"true\">
                            Marques
                        </button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"modele-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#modele\" type=\"button\" role=\"tab\" aria-controls=\"modele\" aria-selected=\"false\">
                            Modèles
                        </button>
                    </li>

                </ul>

                <div class=\"tab-content mt-4\" id=\"vehicleTabsContent\">
                    <!-- Section Marques -->
                    <div class=\"tab-pane fade show active\" id=\"marque\" role=\"tabpanel\" aria-labelledby=\"marque-tab\">
                        <h2>Ajouter une Marque</h2>
                        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["marqueForm"]) || array_key_exists("marqueForm", $context) ? $context["marqueForm"] : (function () { throw new RuntimeError('Variable "marqueForm" does not exist.', 85, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marqueForm"]) || array_key_exists("marqueForm", $context) ? $context["marqueForm"] : (function () { throw new RuntimeError('Variable "marqueForm" does not exist.', 87, $this->source); })()), "nom", [], "any", false, false, false, 87), 'label', ["label" => "Nom de la Marque"]);
        yield "
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marqueForm"]) || array_key_exists("marqueForm", $context) ? $context["marqueForm"] : (function () { throw new RuntimeError('Variable "marqueForm" does not exist.', 88, $this->source); })()), "nom", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <button class=\"btn btn-success\">Ajouter la Marque</button>
                        ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["marqueForm"]) || array_key_exists("marqueForm", $context) ? $context["marqueForm"] : (function () { throw new RuntimeError('Variable "marqueForm" does not exist.', 91, $this->source); })()), 'form_end');
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
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 104
            yield "                                <tr>
                                    <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "id", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                                    <td>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "nom", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                                    <td>
                                        <button class=\"btn btn-sm btn-warning\">Modifier</button>
                                        <button class=\"btn btn-sm btn-danger\">Supprimer</button>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['marque'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Section Modèles -->
                    <div class=\"tab-pane fade\" id=\"modele\" role=\"tabpanel\" aria-labelledby=\"modele-tab\">
                        <h2>Ajouter un Modèle</h2>
                        ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 120, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 122, $this->source); })()), "nom", [], "any", false, false, false, 122), 'label', ["label" => "Nom du Modèle"]);
        yield "
                            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 123, $this->source); })()), "nom", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 126, $this->source); })()), "marque", [], "any", false, false, false, 126), 'label', ["label" => "Marque Associée"]);
        yield "
                            ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 127, $this->source); })()), "marque", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 130, $this->source); })()), "motorisations", [], "any", false, false, false, 130), 'label', ["label" => "Motorisations Associées"]);
        yield "
                            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 131, $this->source); })()), "motorisations", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        </div>
                        <button class=\"btn btn-primary\">Ajouter le Modèle</button>
                        ";
        // line 134
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modeleForm"]) || array_key_exists("modeleForm", $context) ? $context["modeleForm"] : (function () { throw new RuntimeError('Variable "modeleForm" does not exist.', 134, $this->source); })()), 'form_end');
        yield "

                        <h2 class=\"mt-5\">Liste des Modèles</h2>
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Marque</th>
                                <th>Motorisations</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 149
            yield "                                <tr>
                                    <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "id", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                                    <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "nom", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
                                    <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "marque", [], "any", false, false, false, 152), "nom", [], "any", false, false, false, 152), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "motorisations", [], "any", false, false, false, 154));
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
            foreach ($context['_seq'] as $context["_key"] => $context["motorisation"]) {
                // line 155
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "nom", [], "any", false, false, false, 155), "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 155)) {
                    yield ", ";
                }
                // line 156
                yield "                                        ";
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
            unset($context['_seq'], $context['_key'], $context['motorisation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                                    </td>
                                    <td>
                                        <button class=\"btn btn-sm btn-warning\">Modifier</button>
                                        <button class=\"btn btn-sm btn-danger\">Supprimer</button>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['modele'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Section Motorisations -->
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
        return array (  425 => 164,  413 => 157,  399 => 156,  393 => 155,  376 => 154,  371 => 152,  367 => 151,  363 => 150,  360 => 149,  356 => 148,  339 => 134,  333 => 131,  329 => 130,  323 => 127,  319 => 126,  313 => 123,  309 => 122,  304 => 120,  295 => 113,  282 => 106,  278 => 105,  275 => 104,  271 => 103,  256 => 91,  250 => 88,  246 => 87,  241 => 85,  219 => 65,  210 => 62,  207 => 61,  202 => 60,  193 => 57,  190 => 56,  186 => 55,  168 => 42,  158 => 37,  148 => 32,  138 => 27,  128 => 22,  118 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer Marques, Modèles et Motorisations{% endblock %}

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
            <div class=\"container mt-5\">
                <h1 class=\"mb-4\">Gérer Marques, Modèles et Motorisations</h1>

                <!-- Flash Messages -->
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger\">
                        {{ message }}
                    </div>
                {% endfor %}

                <!-- Onglets -->
                <ul class=\"nav nav-tabs\" id=\"vehicleTabs\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"marque-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#marque\" type=\"button\" role=\"tab\" aria-controls=\"marque\" aria-selected=\"true\">
                            Marques
                        </button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"modele-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#modele\" type=\"button\" role=\"tab\" aria-controls=\"modele\" aria-selected=\"false\">
                            Modèles
                        </button>
                    </li>

                </ul>

                <div class=\"tab-content mt-4\" id=\"vehicleTabsContent\">
                    <!-- Section Marques -->
                    <div class=\"tab-pane fade show active\" id=\"marque\" role=\"tabpanel\" aria-labelledby=\"marque-tab\">
                        <h2>Ajouter une Marque</h2>
                        {{ form_start(marqueForm) }}
                        <div class=\"mb-3\">
                            {{ form_label(marqueForm.nom, 'Nom de la Marque') }}
                            {{ form_widget(marqueForm.nom, { 'attr': {'class': 'form-control'} }) }}
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
                                        <button class=\"btn btn-sm btn-warning\">Modifier</button>
                                        <button class=\"btn btn-sm btn-danger\">Supprimer</button>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <!-- Section Modèles -->
                    <div class=\"tab-pane fade\" id=\"modele\" role=\"tabpanel\" aria-labelledby=\"modele-tab\">
                        <h2>Ajouter un Modèle</h2>
                        {{ form_start(modeleForm) }}
                        <div class=\"mb-3\">
                            {{ form_label(modeleForm.nom, 'Nom du Modèle') }}
                            {{ form_widget(modeleForm.nom, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(modeleForm.marque, 'Marque Associée') }}
                            {{ form_widget(modeleForm.marque, { 'attr': {'class': 'form-select'} }) }}
                        </div>
                        <div class=\"mb-3\">
                            {{ form_label(modeleForm.motorisations, 'Motorisations Associées') }}
                            {{ form_widget(modeleForm.motorisations, { 'attr': {'class': 'form-select'} }) }}
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
                                <th>Motorisations</th>
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
                                        {% for motorisation in modele.motorisations %}
                                            {{ motorisation.nom }}{% if not loop.last %}, {% endif %}
                                        {% endfor %}
                                    </td>
                                    <td>
                                        <button class=\"btn btn-sm btn-warning\">Modifier</button>
                                        <button class=\"btn btn-sm btn-danger\">Supprimer</button>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <!-- Section Motorisations -->
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin_dashboard/vehicules/index.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\admin_dashboard\\vehicules\\index.html.twig");
    }
}
