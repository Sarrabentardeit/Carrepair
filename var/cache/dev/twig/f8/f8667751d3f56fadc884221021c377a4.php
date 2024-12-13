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

/* admin_dashboard/rendezvous/index.html.twig */
class __TwigTemplate_a5ef0c95f02c10399c090b9dc572e16f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/rendezvous/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/rendezvous/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_dashboard/rendezvous/index.html.twig", 1);
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

        yield "Gestion des Rendez-vous";
        
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
            </ul>
        </nav>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h1 class=\"text-center mb-4\">Gestion des Rendez-vous</h1>

            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Date</th>
                    <th>Service</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rendezVous"]) || array_key_exists("rendezVous", $context) ? $context["rendezVous"] : (function () { throw new RuntimeError('Variable "rendezVous" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 56
            yield "                    <tr>
                        <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                        <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "client", [], "any", false, false, false, 58), "email", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                        <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "date", [], "any", false, false, false, 59), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "service", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "statut", [], "any", false, false, false, 62) == "validé")) {
                // line 63
                yield "                                <span class=\"badge bg-success\">Validé</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["rdv"], "statut", [], "any", false, false, false, 64) == "annulé")) {
                // line 65
                yield "                                <span class=\"badge bg-danger\">Annulé</span>
                            ";
            } else {
                // line 67
                yield "                                <span class=\"badge bg-warning\">En attente</span>
                            ";
            }
            // line 69
            yield "                        </td>
                        <td>
                            ";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "statut", [], "any", false, false, false, 71) != "validé")) {
                // line 72
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rendezvous_validate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\">Valider</a>
                            ";
            }
            // line 74
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "statut", [], "any", false, false, false, 74) != "annulé")) {
                // line 75
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_rendezvous_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm\">Annuler</a>
                            ";
            }
            // line 77
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucun rendez-vous trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rdv'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
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
        return "admin_dashboard/rendezvous/index.html.twig";
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
        return array (  253 => 84,  244 => 80,  237 => 77,  231 => 75,  228 => 74,  222 => 72,  220 => 71,  216 => 69,  212 => 67,  208 => 65,  206 => 64,  203 => 63,  201 => 62,  196 => 60,  192 => 59,  188 => 58,  184 => 57,  181 => 56,  176 => 55,  148 => 32,  138 => 27,  128 => 22,  118 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Rendez-vous{% endblock %}

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
            </ul>
        </nav>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h1 class=\"text-center mb-4\">Gestion des Rendez-vous</h1>

            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Date</th>
                    <th>Service</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for rdv in rendezVous %}
                    <tr>
                        <td>{{ rdv.id }}</td>
                        <td>{{ rdv.client.email }}</td>
                        <td>{{ rdv.date|date('d/m/Y H:i') }}</td>
                        <td>{{ rdv.service }}</td>
                        <td>
                            {% if rdv.statut == 'validé' %}
                                <span class=\"badge bg-success\">Validé</span>
                            {% elseif rdv.statut == 'annulé' %}
                                <span class=\"badge bg-danger\">Annulé</span>
                            {% else %}
                                <span class=\"badge bg-warning\">En attente</span>
                            {% endif %}
                        </td>
                        <td>
                            {% if rdv.statut != 'validé' %}
                                <a href=\"{{ path('admin_rendezvous_validate', {id: rdv.id}) }}\" class=\"btn btn-success btn-sm\">Valider</a>
                            {% endif %}
                            {% if rdv.statut != 'annulé' %}
                                <a href=\"{{ path('admin_rendezvous_cancel', {id: rdv.id}) }}\" class=\"btn btn-danger btn-sm\">Annuler</a>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucun rendez-vous trouvé.</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "admin_dashboard/rendezvous/index.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\admin_dashboard\\rendezvous\\index.html.twig");
    }
}