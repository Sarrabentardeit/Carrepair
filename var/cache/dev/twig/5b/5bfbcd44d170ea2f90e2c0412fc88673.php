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

/* order/confirmation.html.twig */
class __TwigTemplate_a5cc13b378be9ac016dd13f8d86c2e21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/confirmation.html.twig", 1);
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

        yield "Confirmation de Commande";
        
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
        yield "    <div class=\"container mt-5\">
        <!-- Entête de confirmation -->
        <div class=\"text-center p-5\" style=\"background-color: #ffffff; border: 1px solid #e3e3e3; border-radius: 10px;\">
            <h1 class=\"font-weight-bold text-danger\">✔ Votre commande est confirmée</h1>
            <p class=\"text-muted\">Un e-mail vous a été envoyé à l'adresse <strong class=\"text-dark\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "html", null, true);
        yield "</strong>.</p>
            <p class=\"text-secondary\">Merci pour votre confiance !</p>
        </div>

        <div class=\"row mt-5\">
            <!-- Articles de la commande -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\" style=\"border-radius: 10px;\">
                    <div class=\"card-header bg-danger text-white font-weight-bold\" style=\"border-radius: 10px 10px 0 0;\">
                        🛒 Articles de la Commande
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "produitsCommande", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 23
            yield "                            <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"background-color: #ffffff; border-bottom: 1px solid #e3e3e3;\">
                                <span><strong>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 24), "html", null, true);
            yield "</strong></span>
                                <span>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 25), "html", null, true);
            yield " x ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 25), "html", null, true);
            yield " TND</span>
                                <span class=\"text-danger font-weight-bold\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 26) * CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 26)), "html", null, true);
            yield " TND</span>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "                    </ul>
                </div>
            </div>

            <!-- Détails de la commande -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\" style=\"border-radius: 10px;\">
                    <div class=\"card-header bg-danger text-white font-weight-bold\" style=\"border-radius: 10px 10px 0 0;\">
                        📋 Détails de la Commande
                    </div>
                    <div class=\"card-body\" style=\"background-color: #ffffff;\">
                        <p><strong>Référence :</strong> ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
                        <p><strong>Date :</strong> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "dateCommande", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                        <p><strong>Montant Total :</strong> <span class=\"text-danger font-weight-bold\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 42, $this->source); })()), "montantTotal", [], "any", false, false, false, 42), "html", null, true);
        yield " TND</span></p>
                        <p><strong>Frais de Livraison :</strong> 8 TND</p>
                        <p><strong>Mode de Livraison :</strong> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })()), "typeLivraison", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                        <p><strong>Mode de Paiement :</strong> Paiement lors de la livraison</p>
                        <p><strong>Statut :</strong> <span class=\"text-warning\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46), "html", null, true);
        yield "</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message de fin -->
        <div class=\"text-center mt-5\">
            <p class=\"text-secondary\">Votre commande sera envoyée très prochainement.</p>
            <a href=\"/page\" class=\"btn btn-danger btn-lg\" style=\"padding: 10px 20px; border-radius: 5px;\">Retour à l'Accueil</a>
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
        return "order/confirmation.html.twig";
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
        return array (  178 => 46,  173 => 44,  168 => 42,  164 => 41,  160 => 40,  147 => 29,  138 => 26,  132 => 25,  128 => 24,  125 => 23,  121 => 22,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Confirmation de Commande{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <!-- Entête de confirmation -->
        <div class=\"text-center p-5\" style=\"background-color: #ffffff; border: 1px solid #e3e3e3; border-radius: 10px;\">
            <h1 class=\"font-weight-bold text-danger\">✔ Votre commande est confirmée</h1>
            <p class=\"text-muted\">Un e-mail vous a été envoyé à l'adresse <strong class=\"text-dark\">{{ order.email }}</strong>.</p>
            <p class=\"text-secondary\">Merci pour votre confiance !</p>
        </div>

        <div class=\"row mt-5\">
            <!-- Articles de la commande -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\" style=\"border-radius: 10px;\">
                    <div class=\"card-header bg-danger text-white font-weight-bold\" style=\"border-radius: 10px 10px 0 0;\">
                        🛒 Articles de la Commande
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        {% for produit in order.produitsCommande %}
                            <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"background-color: #ffffff; border-bottom: 1px solid #e3e3e3;\">
                                <span><strong>{{ produit.nom }}</strong></span>
                                <span>{{ produit.quantite }} x {{ produit.prix }} TND</span>
                                <span class=\"text-danger font-weight-bold\">{{ produit.quantite * produit.prix }} TND</span>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>

            <!-- Détails de la commande -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"card shadow-sm\" style=\"border-radius: 10px;\">
                    <div class=\"card-header bg-danger text-white font-weight-bold\" style=\"border-radius: 10px 10px 0 0;\">
                        📋 Détails de la Commande
                    </div>
                    <div class=\"card-body\" style=\"background-color: #ffffff;\">
                        <p><strong>Référence :</strong> {{ order.id }}</p>
                        <p><strong>Date :</strong> {{ order.dateCommande|date('d/m/Y H:i') }}</p>
                        <p><strong>Montant Total :</strong> <span class=\"text-danger font-weight-bold\">{{ order.montantTotal }} TND</span></p>
                        <p><strong>Frais de Livraison :</strong> 8 TND</p>
                        <p><strong>Mode de Livraison :</strong> {{ order.typeLivraison }}</p>
                        <p><strong>Mode de Paiement :</strong> Paiement lors de la livraison</p>
                        <p><strong>Statut :</strong> <span class=\"text-warning\">{{ order.statut }}</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message de fin -->
        <div class=\"text-center mt-5\">
            <p class=\"text-secondary\">Votre commande sera envoyée très prochainement.</p>
            <a href=\"/page\" class=\"btn btn-danger btn-lg\" style=\"padding: 10px 20px; border-radius: 5px;\">Retour à l'Accueil</a>
        </div>
    </div>
{% endblock %}
", "order/confirmation.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\order\\confirmation.html.twig");
    }
}
