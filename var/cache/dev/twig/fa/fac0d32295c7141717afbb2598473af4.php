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

/* vehicle/edit.html.twig */
class __TwigTemplate_a16ab0f373a6f0b62fa361877713b7d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vehicle/edit.html.twig", 1);
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

        yield "Modifier Véhicule";
        
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
        <div class=\"card shadow-lg border-0\">
            <div class=\"card-header bg-danger text-white text-center py-4\">
                <h2 class=\"mb-0\">Modifier le Véhicule</h2>
            </div>
            <div class=\"card-body p-4\">
                <!-- Formulaire -->
                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "marque", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Marque"]);
        yield "
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "marque", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "modele", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Modèle"]);
        yield "
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "modele", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "motorisation", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Motorisation"]);
        yield "
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "motorisation", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "immatriculation", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Immatriculation"]);
        yield "
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "immatriculation", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                    </div>
                </div>
                <div class=\"d-flex justify-content-between align-items-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-danger px-4 py-2\">Mettre à jour</button>
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_client");
        yield "\" class=\"btn btn-outline-secondary px-4 py-2\">Retour à la liste</a>
                </div>
                ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "

                <!-- Bouton Supprimer -->
                <div class=\"text-end mt-3\">
                    ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "vehicle/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            background-color: #dc3545;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: none;
        }

        .form-label {
            font-size: 0.95rem;
            color: #555;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #dc3545;
            box-shadow: 0 0 5px rgba(220, 53, 69, 0.4);
        }

        .btn {
            transition: all 0.3s;
            font-weight: bold;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
        }

        .btn-outline-secondary {
            border: 1px solid #6c757d;
            color: #6c757d;
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-outline-danger {
            border: 1px solid #dc3545;
            color: #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: #fff;
        }

        .shadow-lg {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .g-3 {
            gap: 1.5rem;
        }
    </style>
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
        return "vehicle/edit.html.twig";
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
        return array (  169 => 40,  162 => 36,  157 => 34,  149 => 29,  145 => 28,  139 => 25,  135 => 24,  129 => 21,  125 => 20,  119 => 17,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Véhicule{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <div class=\"card shadow-lg border-0\">
            <div class=\"card-header bg-danger text-white text-center py-4\">
                <h2 class=\"mb-0\">Modifier le Véhicule</h2>
            </div>
            <div class=\"card-body p-4\">
                <!-- Formulaire -->
                {{ form_start(form) }}
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        {{ form_label(form.marque, 'Marque', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.marque, {'attr': {'class': 'form-control shadow-sm'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_label(form.modele, 'Modèle', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.modele, {'attr': {'class': 'form-control shadow-sm'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_label(form.motorisation, 'Motorisation', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.motorisation, {'attr': {'class': 'form-control shadow-sm'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_label(form.immatriculation, 'Immatriculation', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.immatriculation, {'attr': {'class': 'form-control shadow-sm'}}) }}
                    </div>
                </div>
                <div class=\"d-flex justify-content-between align-items-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-danger px-4 py-2\">Mettre à jour</button>
                    <a href=\"{{ path('espace_client') }}\" class=\"btn btn-outline-secondary px-4 py-2\">Retour à la liste</a>
                </div>
                {{ form_end(form) }}

                <!-- Bouton Supprimer -->
                <div class=\"text-end mt-3\">
                    {{ include('vehicle/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            background-color: #dc3545;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: none;
        }

        .form-label {
            font-size: 0.95rem;
            color: #555;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #dc3545;
            box-shadow: 0 0 5px rgba(220, 53, 69, 0.4);
        }

        .btn {
            transition: all 0.3s;
            font-weight: bold;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
        }

        .btn-outline-secondary {
            border: 1px solid #6c757d;
            color: #6c757d;
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-outline-danger {
            border: 1px solid #dc3545;
            color: #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: #fff;
        }

        .shadow-lg {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .g-3 {
            gap: 1.5rem;
        }
    </style>
{% endblock %}
", "vehicle/edit.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\vehicle\\edit.html.twig");
    }
}
