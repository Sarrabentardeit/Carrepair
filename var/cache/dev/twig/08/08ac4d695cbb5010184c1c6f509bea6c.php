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

/* category/index.html.twig */
class __TwigTemplate_5e01f23b38914daa1b1612f388a533fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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

        yield "Gestion des Catégories";
        
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

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"fw-bold text-danger\">Gestion des Catégories</h1>
                <div>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_new");
        yield "\" class=\"btn btn-success rounded-pill me-2\">+ Ajouter une catégorie</a>
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subcategory_new");
        yield "\" class=\"btn btn-info rounded-pill\">+ Ajouter une sous-catégorie</a>
                </div>
            </div>

            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"mb-0\">Liste des Catégories</h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-hover\">
                        <thead class=\"table-dark\">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            yield "                            <tr>
                                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 38)) {
                // line 39
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 39))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39), "html", null, true);
                yield "\" width=\"100\">
                                    ";
            } else {
                // line 41
                yield "                                        <em>Aucune image</em>
                                    ";
            }
            // line 43
            yield "                                </td>
                                <td>
                                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm rounded-pill\">Afficher</a>
                                    <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-sm rounded-pill\">Modifier</a>
                                    <!-- Bouton Supprimer -->
                                    <form method=\"post\" action=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 49))), "html", null, true);
            yield "\">
                                        <button class=\"btn btn-outline-danger btn-sm rounded-pill\">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                        </tbody>
                    </table>

                    ";
        // line 58
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "                        <p class=\"text-center text-muted\">Aucune catégorie trouvée.</p>
                    ";
        }
        // line 61
        yield "                </div>
            </div>

            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-dark mt-4 rounded-pill\">Retour au Dashboard</a>
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
        return "category/index.html.twig";
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
        return array (  210 => 64,  205 => 61,  201 => 59,  199 => 58,  194 => 55,  182 => 49,  178 => 48,  173 => 46,  169 => 45,  165 => 43,  161 => 41,  153 => 39,  151 => 38,  146 => 36,  142 => 35,  139 => 34,  135 => 33,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Catégories{% endblock %}

{% block body %}
    <div class=\"d-flex\">

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"fw-bold text-danger\">Gestion des Catégories</h1>
                <div>
                    <a href=\"{{ path('app_category_new') }}\" class=\"btn btn-success rounded-pill me-2\">+ Ajouter une catégorie</a>
                    <a href=\"{{ path('subcategory_new') }}\" class=\"btn btn-info rounded-pill\">+ Ajouter une sous-catégorie</a>
                </div>
            </div>

            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-danger text-white\">
                    <h5 class=\"mb-0\">Liste des Catégories</h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-hover\">
                        <thead class=\"table-dark\">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for category in categories %}
                            <tr>
                                <td>{{ category.id }}</td>
                                <td>{{ category.name }}</td>
                                <td>
                                    {% if category.image %}
                                        <img src=\"{{ asset('uploads/images/' ~ category.image) }}\" alt=\"{{ category.name }}\" width=\"100\">
                                    {% else %}
                                        <em>Aucune image</em>
                                    {% endif %}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_category_show', { id: category.id }) }}\" class=\"btn btn-outline-primary btn-sm rounded-pill\">Afficher</a>
                                    <a href=\"{{ path('app_category_edit', { id: category.id }) }}\" class=\"btn btn-outline-warning btn-sm rounded-pill\">Modifier</a>
                                    <!-- Bouton Supprimer -->
                                    <form method=\"post\" action=\"{{ path('app_category_delete', { id: category.id }) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ category.id) }}\">
                                        <button class=\"btn btn-outline-danger btn-sm rounded-pill\">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                    {% if categories is empty %}
                        <p class=\"text-center text-muted\">Aucune catégorie trouvée.</p>
                    {% endif %}
                </div>
            </div>

            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-dark mt-4 rounded-pill\">Retour au Dashboard</a>
        </div>
    </div>
{% endblock %}
", "category/index.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\category\\index.html.twig");
    }
}
