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

/* espace_client/index.html.twig */
class __TwigTemplate_35decda5aa7231b13137cba970befa99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espace_client/index.html.twig", 1);
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

        yield "Espace Client";
        
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
        yield "    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .text-primary-custom {
            color: #2c3e50;
        }

        .bg-primary-custom {
            background-color: #2c3e50;
            color: #ffffff;
        }

        .btn-primary-custom {
            background-color: #e74c3c;
            color: #fff;
            border: none;
        }

        .btn-primary-custom:hover {
            background-color: #c0392b;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-bottom: none;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff;
        }

        .badge {
            border-radius: 12px;
            font-size: 0.9rem;
            padding: 5px 10px;
        }

        .badge-danger {
            background-color: #e74c3c;
        }

        .badge-success {
            background-color: #27ae60;
        }

        .alert {
            border-radius: 10px;
            font-weight: bold;
        }

        .alert-danger {
            background-color: #f9ebeb;
            color: #e74c3c;
        }

        .btn-outline-primary-custom {
            border: 1px solid #e74c3c;
            color: #e74c3c;
        }

        .btn-outline-primary-custom:hover {
            background-color: #e74c3c;
            color: #fff;
        }
    </style>

    <div class=\"container my-5\">
        <div class=\"text-center mb-4\">
            <h1 class=\"text-primary-custom\">Bienvenue dans votre espace client, ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), "html", null, true);
        yield "</h1>
        </div>

        <!-- Messages Flash -->
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["success"], "method", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 92
            yield "            <div class=\"alert alert-danger text-center\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "
        <!-- Informations Personnelles -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-primary-custom\">
                <h4 class=\"mb-0\">Vos Informations Personnelles</h4>
            </div>
            <div class=\"card-body\">
                ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_start');
        yield "
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "nom", [], "any", false, false, false, 104), 'row', ["label" => "Nom", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "prenom", [], "any", false, false, false, 107), 'row', ["label" => "Prénom", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110), 'row', ["label" => "Email", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "telephone", [], "any", false, false, false, 113), 'row', ["label" => "Téléphone", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "plainPassword", [], "any", false, false, false, 116), 'row', ["label" => "Nouveau Mot de Passe", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary-custom mt-3\">Enregistrer les modifications</button>
                ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <!-- Gestion des Véhicules -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-primary-custom\">
                <h4 class=\"mb-0\">Vos Véhicules</h4>
            </div>
            <div class=\"card-body\">
                <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_new");
        yield "\" class=\"btn btn-outline-primary-custom mb-3\">Ajouter un Véhicule</a>
                <table class=\"table table-striped table-hover\">
                    <thead class=\"bg-light\">
                    <tr class=\"text-primary-custom\">
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Motorisation</th>
                        <th>Immatriculation</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 143
            yield "                        <tr>
                            <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                            <td>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 145), "html", null, true);
            yield "</td>
                            <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "motorisation", [], "any", false, false, false, 146), "html", null, true);
            yield "</td>
                            <td>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 147), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\" class=\"btn btn-primary-custom btn-sm\">Modifier</a>
                                <form action=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 151))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vehicule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- Historique des Rendez-vous -->
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary-custom\">
                <h4 class=\"mb-0\">Historique des Rendez-vous</h4>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"bg-light\">
                    <tr class=\"text-primary-custom\">
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Véhicule</th>
                        <th>Service(s)</th>
                        <th>Statut</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rendezVous"]) || array_key_exists("rendezVous", $context) ? $context["rendezVous"] : (function () { throw new RuntimeError('Variable "rendezVous" does not exist.', 179, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 180
            yield "                        <tr>
                            <td>";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "date", [], "any", false, false, false, 181), "d/m/Y"), "html", null, true);
            yield "</td>
                            <td>";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "date", [], "any", false, false, false, 182), "H:i"), "html", null, true);
            yield "</td>
                            <td>";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "vehicule", [], "any", false, false, false, 183), "modele", [], "any", false, false, false, 183), "html", null, true);
            yield "</td>
                            <td>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "service", [], "any", false, false, false, 184), "html", null, true);
            yield "</td>
                            <td>
                                <span class=\"badge ";
            // line 186
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "statut", [], "any", false, false, false, 186) == "En attente")) {
                yield "badge-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "statut", [], "any", false, false, false, 186) == "Confirmé")) {
                yield "badge-success";
            } else {
                yield "badge-secondary";
            }
            yield "\">
                                    ";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "statut", [], "any", false, false, false, 187), "html", null, true);
            yield "
                                </span>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rdv'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "                    </tbody>
                </table>
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
        return "espace_client/index.html.twig";
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
        return array (  390 => 192,  379 => 187,  369 => 186,  364 => 184,  360 => 183,  356 => 182,  352 => 181,  349 => 180,  345 => 179,  321 => 157,  309 => 151,  305 => 150,  301 => 149,  296 => 147,  292 => 146,  288 => 145,  284 => 144,  281 => 143,  277 => 142,  262 => 130,  249 => 120,  242 => 116,  236 => 113,  230 => 110,  224 => 107,  218 => 104,  212 => 101,  203 => 94,  194 => 92,  190 => 91,  183 => 87,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace Client{% endblock %}

{% block body %}
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .text-primary-custom {
            color: #2c3e50;
        }

        .bg-primary-custom {
            background-color: #2c3e50;
            color: #ffffff;
        }

        .btn-primary-custom {
            background-color: #e74c3c;
            color: #fff;
            border: none;
        }

        .btn-primary-custom:hover {
            background-color: #c0392b;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-bottom: none;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #ffffff;
        }

        .badge {
            border-radius: 12px;
            font-size: 0.9rem;
            padding: 5px 10px;
        }

        .badge-danger {
            background-color: #e74c3c;
        }

        .badge-success {
            background-color: #27ae60;
        }

        .alert {
            border-radius: 10px;
            font-weight: bold;
        }

        .alert-danger {
            background-color: #f9ebeb;
            color: #e74c3c;
        }

        .btn-outline-primary-custom {
            border: 1px solid #e74c3c;
            color: #e74c3c;
        }

        .btn-outline-primary-custom:hover {
            background-color: #e74c3c;
            color: #fff;
        }
    </style>

    <div class=\"container my-5\">
        <div class=\"text-center mb-4\">
            <h1 class=\"text-primary-custom\">Bienvenue dans votre espace client, {{ user.email }}</h1>
        </div>

        <!-- Messages Flash -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-danger text-center\">{{ message }}</div>
        {% endfor %}

        <!-- Informations Personnelles -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-primary-custom\">
                <h4 class=\"mb-0\">Vos Informations Personnelles</h4>
            </div>
            <div class=\"card-body\">
                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        {{ form_row(form.nom, {'label': 'Nom', 'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.prenom, {'label': 'Prénom', 'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.email, {'label': 'Email', 'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.telephone, {'label': 'Téléphone', 'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.plainPassword, {'label': 'Nouveau Mot de Passe', 'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-primary-custom mt-3\">Enregistrer les modifications</button>
                {{ form_end(form) }}
            </div>
        </div>

        <!-- Gestion des Véhicules -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-primary-custom\">
                <h4 class=\"mb-0\">Vos Véhicules</h4>
            </div>
            <div class=\"card-body\">
                <a href=\"{{ path('app_vehicle_new') }}\" class=\"btn btn-outline-primary-custom mb-3\">Ajouter un Véhicule</a>
                <table class=\"table table-striped table-hover\">
                    <thead class=\"bg-light\">
                    <tr class=\"text-primary-custom\">
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Motorisation</th>
                        <th>Immatriculation</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for vehicule in vehicules %}
                        <tr>
                            <td>{{ vehicule.marque }}</td>
                            <td>{{ vehicule.modele }}</td>
                            <td>{{ vehicule.motorisation }}</td>
                            <td>{{ vehicule.immatriculation }}</td>
                            <td>
                                <a href=\"{{ path('app_vehicle_edit', {id: vehicule.id}) }}\" class=\"btn btn-primary-custom btn-sm\">Modifier</a>
                                <form action=\"{{ path('app_vehicle_delete', {id: vehicule.id}) }}\" method=\"post\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ vehicule.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Historique des Rendez-vous -->
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary-custom\">
                <h4 class=\"mb-0\">Historique des Rendez-vous</h4>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"bg-light\">
                    <tr class=\"text-primary-custom\">
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Véhicule</th>
                        <th>Service(s)</th>
                        <th>Statut</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for rdv in rendezVous %}
                        <tr>
                            <td>{{ rdv.date|date('d/m/Y') }}</td>
                            <td>{{ rdv.date|date('H:i') }}</td>
                            <td>{{ rdv.vehicule.modele }}</td>
                            <td>{{ rdv.service }}</td>
                            <td>
                                <span class=\"badge {% if rdv.statut == 'En attente' %}badge-danger{% elseif rdv.statut == 'Confirmé' %}badge-success{% else %}badge-secondary{% endif %}\">
                                    {{ rdv.statut }}
                                </span>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "espace_client/index.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\espace_client\\index.html.twig");
    }
}
