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
class __TwigTemplate_4ae9522abba17982570d3ba55951aa83 extends Template
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
        yield "    <div class=\"container my-5\">
        <div class=\"text-center mb-4\">
            <h1 class=\"text-danger\">Bienvenue dans votre espace client, ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>
        </div>

        <!-- Messages Flash -->
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "            <div class=\"alert alert-success text-center\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
        <!-- Informations Personnelles -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-danger text-white\">
                <h4 class=\"mb-0\">Vos Informations Personnelles</h4>
            </div>
            <div class=\"card-body\">
                ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        yield "
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'row', ["label" => "Nom", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'row', ["label" => "Prénom", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'row', ["label" => "Email", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "telephone", [], "any", false, false, false, 34), 'row', ["label" => "Téléphone", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'row', ["label" => "Nouveau Mot de Passe", "attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-danger mt-3\">Enregistrer les modifications</button>
                ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <!-- Gestion des Véhicules -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-danger text-white\">
                <h4 class=\"mb-0\">Vos Véhicules</h4>
            </div>
            <div class=\"card-body\">
                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_new");
        yield "\" class=\"btn btn-success mb-3\">Ajouter un Véhicule</a>
                <table class=\"table table-striped table-hover\">
                    <thead class=\"table-danger\">
                    <tr>
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Motorisation</th>
                        <th>Immatriculation</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 64
            yield "                        <tr>
                            <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "marque", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                            <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "modele", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                            <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "motorisation", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "immatriculation", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                                <form action=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 72))), "html", null, true);
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
        // line 78
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- Historique des Rendez-vous -->
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-danger text-white\">
                <h4 class=\"mb-0\">Historique des Rendez-vous</h4>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"table-danger\">
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Véhicule</th>
                        <th>Service(s)</th>
                        <th>Statu</th>


                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rendezVous"]) || array_key_exists("rendezVous", $context) ? $context["rendezVous"] : (function () { throw new RuntimeError('Variable "rendezVous" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 103
            yield "                        <tr>
                            <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "date", [], "any", false, false, false, 104), "d/m/Y"), "html", null, true);
            yield "</td>
                            <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "date", [], "any", false, false, false, 105), "H:i"), "html", null, true);
            yield "</td>
                            <td>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "vehicule", [], "any", false, false, false, 106), "modele", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                            <td>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "service", [], "any", false, false, false, 107), "html", null, true);
            yield "</td>
                            <td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "statut", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rdv'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
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
        return array (  301 => 112,  291 => 108,  287 => 107,  283 => 106,  279 => 105,  275 => 104,  272 => 103,  268 => 102,  242 => 78,  230 => 72,  226 => 71,  222 => 70,  217 => 68,  213 => 67,  209 => 66,  205 => 65,  202 => 64,  198 => 63,  183 => 51,  170 => 41,  163 => 37,  157 => 34,  151 => 31,  145 => 28,  139 => 25,  133 => 22,  124 => 15,  115 => 13,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace Client{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"text-center mb-4\">
            <h1 class=\"text-danger\">Bienvenue dans votre espace client, {{ user.email }}</h1>
        </div>

        <!-- Messages Flash -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success text-center\">{{ message }}</div>
        {% endfor %}

        <!-- Informations Personnelles -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-danger text-white\">
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
                <button type=\"submit\" class=\"btn btn-danger mt-3\">Enregistrer les modifications</button>
                {{ form_end(form) }}
            </div>
        </div>

        <!-- Gestion des Véhicules -->
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header bg-danger text-white\">
                <h4 class=\"mb-0\">Vos Véhicules</h4>
            </div>
            <div class=\"card-body\">
                <a href=\"{{ path('app_vehicle_new') }}\" class=\"btn btn-success mb-3\">Ajouter un Véhicule</a>
                <table class=\"table table-striped table-hover\">
                    <thead class=\"table-danger\">
                    <tr>
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
                                <a href=\"{{ path('app_vehicle_edit', {id: vehicule.id}) }}\" class=\"btn btn-primary btn-sm\">Modifier</a>
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
            <div class=\"card-header bg-danger text-white\">
                <h4 class=\"mb-0\">Historique des Rendez-vous</h4>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"table-danger\">
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Véhicule</th>
                        <th>Service(s)</th>
                        <th>Statu</th>


                    </tr>
                    </thead>
                    <tbody>
                    {% for rdv in rendezVous %}
                        <tr>
                            <td>{{ rdv.date|date('d/m/Y') }}</td>
                            <td>{{ rdv.date|date('H:i') }}</td>
                            <td>{{ rdv.vehicule.modele }}</td>
                            <td>{{ rdv.service }}</td>
                            <td>{{ rdv.statut }}</td>

                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "espace_client/index.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\espace_client\\index.html.twig");
    }
}
