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
class __TwigTemplate_c7be003bc04ffe341afc08d750e3aa9f extends Template
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
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Créer une Nouvelle Commande</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield " <!-- Début du formulaire -->
    ";
        // line 10
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'errors')) {
            // line 11
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 12
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'errors');
            yield "
        </div>

    ";
        }
        // line 16
        yield "
    <div class=\"row\">
        <!-- Colonne Informations Personnelles -->
        <div class=\"col-md-6\">
            <div class=\"card shadow p-4 mb-4\">
                <h5 class=\"mb-3\">Informations Personnelles</h5>
                <div class=\"mb-3\">
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "telephone", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dateCommande", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Commande"]);
        yield "
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "dateCommande", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div style=\"display: none;\">
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "statut", [], "any", false, false, false, 43), 'widget');
        yield "
                </div>
            </div>
        </div>

        <!-- Colonne Modes de Livraison -->
        <div class=\"col-md-6\">
            <div class=\"card shadow p-4 mb-4\">
                <h5 class=\"mb-3\">Modes de Livraison</h5>
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
            <h5 class=\"mb-3\">Résumé de la Commande</h5>
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 77, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 78
            yield "                    <tr>
                        <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 79), "nom", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                        <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 80), "prix", [], "any", false, false, false, 80), "html", null, true);
            yield " TND</td>
                        <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                        <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 82), "html", null, true);
            yield " TND</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center\">Votre panier est vide.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                </tbody>
            </table>
            <h6 class=\"mt-3\">Sous-total : ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sousTotal"]) || array_key_exists("sousTotal", $context) ? $context["sousTotal"] : (function () { throw new RuntimeError('Variable "sousTotal" does not exist.', 91, $this->source); })()), "html", null, true);
        yield " TND</h6>
            <h6>Livraison : <span id=\"fraisLivraison\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fraisLivraison"]) || array_key_exists("fraisLivraison", $context) ? $context["fraisLivraison"] : (function () { throw new RuntimeError('Variable "fraisLivraison" does not exist.', 92, $this->source); })()), "html", null, true);
        yield "</span> TND</h6>
            <h5 class=\"mt-2\">Total : <strong><span id=\"total\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "</span></strong> TND</h5>

            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "submit", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "btn btn-warning w-100 mt-3"]]);
        yield "
        </div>


        ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        yield " <!-- Fin du formulaire -->

    </div>
</div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const radios = document.querySelectorAll('.mode-livraison');
            const fraisLivraison = document.getElementById('fraisLivraison');
            const total = document.getElementById('total');
            const sousTotal = parseFloat(";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sousTotal"]) || array_key_exists("sousTotal", $context) ? $context["sousTotal"] : (function () { throw new RuntimeError('Variable "sousTotal" does not exist.', 108, $this->source); })()), "html", null, true);
        yield ");

            radios.forEach(radio => {
                radio.addEventListener('change', () => {
                    let frais = 8.0;
                    if (radio.value === 'retrait') {
                        frais = 0.0;
                    }
                    fraisLivraison.textContent = frais.toFixed(2);
                    total.textContent = (sousTotal + frais).toFixed(2);
                });
            });
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
        return array (  290 => 108,  278 => 99,  271 => 95,  266 => 93,  262 => 92,  258 => 91,  254 => 89,  245 => 85,  237 => 82,  233 => 81,  229 => 80,  225 => 79,  222 => 78,  217 => 77,  180 => 43,  174 => 40,  170 => 39,  164 => 36,  160 => 35,  154 => 32,  150 => 31,  144 => 28,  140 => 27,  134 => 24,  130 => 23,  121 => 16,  114 => 12,  111 => 11,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer une Nouvelle Commande{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Créer une Nouvelle Commande</h1>

    {{ form_start(form) }} <!-- Début du formulaire -->
    {% if form_errors(form) %}
        <div class=\"alert alert-danger\">
            {{ form_errors(form) }}
        </div>

    {% endif %}

    <div class=\"row\">
        <!-- Colonne Informations Personnelles -->
        <div class=\"col-md-6\">
            <div class=\"card shadow p-4 mb-4\">
                <h5 class=\"mb-3\">Informations Personnelles</h5>
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
                <h5 class=\"mb-3\">Modes de Livraison</h5>
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
            <h5 class=\"mb-3\">Résumé de la Commande</h5>
            <table class=\"table\">
                <thead>
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
                        <td colspan=\"4\" class=\"text-center\">Votre panier est vide.</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <h6 class=\"mt-3\">Sous-total : {{ sousTotal }} TND</h6>
            <h6>Livraison : <span id=\"fraisLivraison\">{{ fraisLivraison }}</span> TND</h6>
            <h5 class=\"mt-2\">Total : <strong><span id=\"total\">{{ total }}</span></strong> TND</h5>

            {{ form_widget(form.submit, {'attr': {'class': 'btn btn-warning w-100 mt-3'}}) }}
        </div>


        {{ form_end(form) }} <!-- Fin du formulaire -->

    </div>
</div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const radios = document.querySelectorAll('.mode-livraison');
            const fraisLivraison = document.getElementById('fraisLivraison');
            const total = document.getElementById('total');
            const sousTotal = parseFloat({{ sousTotal }});

            radios.forEach(radio => {
                radio.addEventListener('change', () => {
                    let frais = 8.0;
                    if (radio.value === 'retrait') {
                        frais = 0.0;
                    }
                    fraisLivraison.textContent = frais.toFixed(2);
                    total.textContent = (sousTotal + frais).toFixed(2);
                });
            });
        });
    </script>

    {% endblock %}", "order/new.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\order\\new.html.twig");
    }
}
