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

/* order/new.html.twig */
class __TwigTemplate_1874febdc7410c4a189d97193948f79b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/new.html.twig", 1);
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

        yield "Créer une Nouvelle Commande";
        
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
            background-color: #f8f9fa; /* Gris clair */
            color: #212529; /* Gris foncé pour le texte */
        }

        h1, h5 {
            color: #343a40; /* Gris foncé pour un contraste moins agressif */
        }

        .card {
            background-color: #ffffff; /* Blanc pour les cartes */
            border: 1px solid #dee2e6; /* Bordure grise subtile */
            border-radius: 10px;
        }

        .table thead {
            background-color: #6c757d; /* Gris moyen pour l'en-tête */
            color: #ffffff; /* Blanc pour le texte */
        }

        .table tbody tr:hover {
            background-color: #f1f3f5; /* Gris très clair pour l'effet survol */
        }

        .btn-danger {
            background-color: #dc3545 !important; /* Rouge pour les actions importantes */
            border: none;
            color: #ffffff;
        }

        .btn-danger:hover {
            background-color: #bd2130 !important; /* Rouge légèrement plus foncé au survol */
        }

        .text-danger {
            color: #dc3545 !important; /* Rouge pour les accents */
        }

        .text-muted {
            color: #6c757d !important; /* Gris moyen pour les textes moins importants */
        }

        .form-check-input:checked {
            background-color: #dc3545;
            border-color: #dc3545;
        }


    </style>
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\" style=\"color: #343a40;\">Créer une Nouvelle Commande</h1>

        ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_start');
        yield "
        ";
        // line 60
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'errors')) {
            // line 61
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'errors');
            yield "
            </div>
        ";
        }
        // line 65
        yield "
        <div class=\"row\">
            <!-- Colonne Informations Personnelles -->
            <div class=\"col-md-6\">
                <div class=\"card shadow p-4 mb-4\">
                    <h5 class=\"mb-3\" style=\"color: #343a40;\">Informations Personnelles</h5>
                    <div class=\"mb-3\">
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "prenom", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "prenom", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "telephone", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "telephone", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "dateCommande", [], "any", false, false, false, 88), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Commande"]);
        yield "
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "dateCommande", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    <div style=\"display: none;\">
                        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "statut", [], "any", false, false, false, 92), 'widget');
        yield "
                    </div>
                </div>
            </div>

            <!-- Colonne Modes de Livraison -->
            <div class=\"col-md-6\">
                <div class=\"card shadow p-4 mb-4\">
                    <h5 class=\"mb-3\" style=\"color: #343a40;\">Modes de Livraison</h5>
                    <div class=\"form-check mb-2\">
                        <input class=\"form-check-input mode-livraison\" type=\"radio\" name=\"modeLivraison\" id=\"aramex\" value=\"aramex\">
                        <label class=\"form-check-label\" for=\"aramex\">Livraison Aramex</label>
                    </div>
                    <div class=\"form-check mb-2\">
                        <input class=\"form-check-input mode-livraison\" type=\"radio\" name=\"modeLivraison\" id=\"retrait\" value=\"retrait\" checked>
                        <label class=\"form-check-label\" for=\"retrait\">Retrait au magasin</label>
                    </div>
                </div>
            </div>

            <!-- Résumé de la Commande -->
            <div class=\"card shadow p-4\">
                <h5 class=\"mb-3\" style=\"color: #343a40;\">Résumé de la Commande</h5>
                <table class=\"table\">
                    <thead class=\"bg-secondary text-white\">
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 125, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 126
            yield "                        <tr>
                            <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 127), "nom", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
                            <td>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 128), "prix", [], "any", false, false, false, 128), "html", null, true);
            yield " TND</td>
                            <td>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 129), "html", null, true);
            yield "</td>
                            <td>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 130), "html", null, true);
            yield " TND</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 133
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Votre panier est vide.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "                    </tbody>
                </table>
                <h6 class=\"mt-3\">Sous-total : ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sousTotal"]) || array_key_exists("sousTotal", $context) ? $context["sousTotal"] : (function () { throw new RuntimeError('Variable "sousTotal" does not exist.', 139, $this->source); })()), "html", null, true);
        yield " TND</h6>
                <h6>Livraison : <span id=\"fraisLivraison\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fraisLivraison"]) || array_key_exists("fraisLivraison", $context) ? $context["fraisLivraison"] : (function () { throw new RuntimeError('Variable "fraisLivraison" does not exist.', 140, $this->source); })()), "html", null, true);
        yield "</span> TND</h6>
                <h5 class=\"mt-2\">Total : <strong style=\"color: #dc3545;\"><span id=\"total\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 141, $this->source); })()), "html", null, true);
        yield "</span></strong> TND</h5>

                ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "submit", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "btn btn-danger w-100 mt-3"]]);
        yield "
            </div>

            ";
        // line 146
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const radios = document.querySelectorAll('.mode-livraison'); // Sélection des boutons radio
            const fraisLivraison = document.getElementById('fraisLivraison'); // Élément pour afficher les frais de livraison
            const total = document.getElementById('total'); // Élément pour afficher le total
            const sousTotal = parseFloat(";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sousTotal"]) || array_key_exists("sousTotal", $context) ? $context["sousTotal"] : (function () { throw new RuntimeError('Variable "sousTotal" does not exist.', 155, $this->source); })()), "html", null, true);
        yield "); // Sous-total converti en nombre

            // Fonction pour mettre à jour les frais et le total
            const updateTotal = () => {
                let frais = 8.0; // Par défaut, frais de livraison pour Aramex
                const selectedMode = document.querySelector('.mode-livraison:checked'); // Bouton radio sélectionné

                if (selectedMode && selectedMode.value === 'retrait') {
                    frais = 0.0; // Pas de frais pour retrait au magasin
                }

                fraisLivraison.textContent = frais.toFixed(2); // Met à jour l'affichage des frais
                total.textContent = (sousTotal + frais).toFixed(2); // Met à jour l'affichage du total
            };

            // Ajoute un écouteur à chaque bouton radio
            radios.forEach(radio => {
                radio.addEventListener('change', updateTotal);
            });

            // Initialisation (au cas où une valeur est déjà sélectionnée)
            updateTotal();
        });

    </script>
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
        return "order/new.html.twig";
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
        return array (  337 => 155,  325 => 146,  319 => 143,  314 => 141,  310 => 140,  306 => 139,  302 => 137,  293 => 133,  285 => 130,  281 => 129,  277 => 128,  273 => 127,  270 => 126,  265 => 125,  229 => 92,  223 => 89,  219 => 88,  213 => 85,  209 => 84,  203 => 81,  199 => 80,  193 => 77,  189 => 76,  183 => 73,  179 => 72,  170 => 65,  164 => 62,  161 => 61,  159 => 60,  155 => 59,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer une Nouvelle Commande{% endblock %}

{% block body %}
    <style>
        body {
            background-color: #f8f9fa; /* Gris clair */
            color: #212529; /* Gris foncé pour le texte */
        }

        h1, h5 {
            color: #343a40; /* Gris foncé pour un contraste moins agressif */
        }

        .card {
            background-color: #ffffff; /* Blanc pour les cartes */
            border: 1px solid #dee2e6; /* Bordure grise subtile */
            border-radius: 10px;
        }

        .table thead {
            background-color: #6c757d; /* Gris moyen pour l'en-tête */
            color: #ffffff; /* Blanc pour le texte */
        }

        .table tbody tr:hover {
            background-color: #f1f3f5; /* Gris très clair pour l'effet survol */
        }

        .btn-danger {
            background-color: #dc3545 !important; /* Rouge pour les actions importantes */
            border: none;
            color: #ffffff;
        }

        .btn-danger:hover {
            background-color: #bd2130 !important; /* Rouge légèrement plus foncé au survol */
        }

        .text-danger {
            color: #dc3545 !important; /* Rouge pour les accents */
        }

        .text-muted {
            color: #6c757d !important; /* Gris moyen pour les textes moins importants */
        }

        .form-check-input:checked {
            background-color: #dc3545;
            border-color: #dc3545;
        }


    </style>
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\" style=\"color: #343a40;\">Créer une Nouvelle Commande</h1>

        {{ form_start(form) }}
        {% if form_errors(form) %}
            <div class=\"alert alert-danger\">
                {{ form_errors(form) }}
            </div>
        {% endif %}

        <div class=\"row\">
            <!-- Colonne Informations Personnelles -->
            <div class=\"col-md-6\">
                <div class=\"card shadow p-4 mb-4\">
                    <h5 class=\"mb-3\" style=\"color: #343a40;\">Informations Personnelles</h5>
                    <div class=\"mb-3\">
                        {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.telephone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.dateCommande, 'Date de Commande', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.dateCommande, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    <div style=\"display: none;\">
                        {{ form_widget(form.statut) }}
                    </div>
                </div>
            </div>

            <!-- Colonne Modes de Livraison -->
            <div class=\"col-md-6\">
                <div class=\"card shadow p-4 mb-4\">
                    <h5 class=\"mb-3\" style=\"color: #343a40;\">Modes de Livraison</h5>
                    <div class=\"form-check mb-2\">
                        <input class=\"form-check-input mode-livraison\" type=\"radio\" name=\"modeLivraison\" id=\"aramex\" value=\"aramex\">
                        <label class=\"form-check-label\" for=\"aramex\">Livraison Aramex</label>
                    </div>
                    <div class=\"form-check mb-2\">
                        <input class=\"form-check-input mode-livraison\" type=\"radio\" name=\"modeLivraison\" id=\"retrait\" value=\"retrait\" checked>
                        <label class=\"form-check-label\" for=\"retrait\">Retrait au magasin</label>
                    </div>
                </div>
            </div>

            <!-- Résumé de la Commande -->
            <div class=\"card shadow p-4\">
                <h5 class=\"mb-3\" style=\"color: #343a40;\">Résumé de la Commande</h5>
                <table class=\"table\">
                    <thead class=\"bg-secondary text-white\">
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for item in cartItems %}
                        <tr>
                            <td>{{ item.product.nom }}</td>
                            <td>{{ item.product.prix }} TND</td>
                            <td>{{ item.quantity }}</td>
                            <td>{{ item.total }} TND</td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Votre panier est vide.</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                <h6 class=\"mt-3\">Sous-total : {{ sousTotal }} TND</h6>
                <h6>Livraison : <span id=\"fraisLivraison\">{{ fraisLivraison }}</span> TND</h6>
                <h5 class=\"mt-2\">Total : <strong style=\"color: #dc3545;\"><span id=\"total\">{{ total }}</span></strong> TND</h5>

                {{ form_widget(form.submit, {'attr': {'class': 'btn btn-danger w-100 mt-3'}}) }}
            </div>

            {{ form_end(form) }}
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const radios = document.querySelectorAll('.mode-livraison'); // Sélection des boutons radio
            const fraisLivraison = document.getElementById('fraisLivraison'); // Élément pour afficher les frais de livraison
            const total = document.getElementById('total'); // Élément pour afficher le total
            const sousTotal = parseFloat({{ sousTotal }}); // Sous-total converti en nombre

            // Fonction pour mettre à jour les frais et le total
            const updateTotal = () => {
                let frais = 8.0; // Par défaut, frais de livraison pour Aramex
                const selectedMode = document.querySelector('.mode-livraison:checked'); // Bouton radio sélectionné

                if (selectedMode && selectedMode.value === 'retrait') {
                    frais = 0.0; // Pas de frais pour retrait au magasin
                }

                fraisLivraison.textContent = frais.toFixed(2); // Met à jour l'affichage des frais
                total.textContent = (sousTotal + frais).toFixed(2); // Met à jour l'affichage du total
            };

            // Ajoute un écouteur à chaque bouton radio
            radios.forEach(radio => {
                radio.addEventListener('change', updateTotal);
            });

            // Initialisation (au cas où une valeur est déjà sélectionnée)
            updateTotal();
        });

    </script>
{% endblock %}
", "order/new.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\order\\new.html.twig");
    }
}
