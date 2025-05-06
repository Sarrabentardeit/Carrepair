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

/* product/edit.html.twig */
class __TwigTemplate_cf820ccd3e5dad28683c927f907ffe8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/edit.html.twig", 1);
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

        yield "Modifier le Produit";
        
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
        <h1 class=\"text-center text-primary mb-4\">Modifier le Produit</h1>

        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "

                <h3 class=\"text-secondary mb-3\">Informations Générales</h3>
                <div class=\"col-md-6\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-12\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control", "rows" => 3]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "quantiteEnStock", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "dateAjout", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "subCategory", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>

                <h3 class=\"text-secondary mt-4\">SEO</h3>
                <div class=\"col-md-6\">
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "seoTitre", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "slug", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-12\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "seoDescription", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control", "rows" => 2]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "motsCles", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "indexable", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-check-input"]]);
        yield "
                </div>
                <div class=\"col-md-12\">
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "textePromotion", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "form-control", "rows" => 2]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "canonicalUrl", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>

                <h3 class=\"text-secondary mt-4\">Image</h3>
                <div class=\"col-md-6\">
                    <label for=\"current-image\" class=\"form-label\">Image Actuelle</label><br>
                    ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 59, $this->source); })()), "image", [], "any", false, false, false, 59)) {
            // line 60
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), "html", null, true);
            yield "\" class=\"img-thumbnail mb-3\" style=\"max-width: 200px;\">
                    ";
        } else {
            // line 62
            yield "                        <p>Aucune image actuelle.</p>
                    ";
        }
        // line 64
        yield "                </div>
                <div class=\"col-md-6\">
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "image", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "texteAlternatif", [], "any", false, false, false, 69), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "titreImage", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"col-md-12\">
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "descriptionImage", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control", "rows" => 2]]);
        yield "
                </div>

                <h3 class=\"text-secondary mt-4\">Associations</h3>
                <div class=\"col-md-6\">
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "marque", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "modele", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>
                <div class=\"col-md-12\">
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "motorisations", [], "any", false, false, false, 86), 'row', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>

                <div class=\"col-md-12 text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary px-4 py-2\">Mettre à jour</button>
                    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" class=\"btn btn-secondary px-4 py-2 ms-2\">Retour à la liste</a>
                </div>

                ";
        // line 94
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
    <style>.container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            font-weight: bold;
        }

        .card {
            border-radius: 10px;
            border: none;
        }

        .card-body h3 {
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .form-control, .form-select {
            border-radius: 5px;
        }

        .form-check-input {
            margin-top: 10px;
        }

        .btn {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .img-thumbnail {
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 100%;
            height: auto;
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
        return "product/edit.html.twig";
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
        return array (  267 => 94,  261 => 91,  253 => 86,  247 => 83,  241 => 80,  233 => 75,  227 => 72,  221 => 69,  215 => 66,  211 => 64,  207 => 62,  199 => 60,  197 => 59,  188 => 53,  182 => 50,  176 => 47,  170 => 44,  164 => 41,  158 => 38,  152 => 35,  144 => 30,  138 => 27,  132 => 24,  126 => 21,  120 => 18,  114 => 15,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Produit{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary mb-4\">Modifier le Produit</h1>

        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'class': 'row g-3'}}) }}

                <h3 class=\"text-secondary mb-3\">Informations Générales</h3>
                <div class=\"col-md-6\">
                    {{ form_row(form.nom, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.prix, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-12\">
                    {{ form_row(form.description, {'attr': {'class': 'form-control', 'rows': 3}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.quantiteEnStock, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.dateAjout, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.subCategory, {'attr': {'class': 'form-select'}}) }}
                </div>

                <h3 class=\"text-secondary mt-4\">SEO</h3>
                <div class=\"col-md-6\">
                    {{ form_row(form.seoTitre, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.slug, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-12\">
                    {{ form_row(form.seoDescription, {'attr': {'class': 'form-control', 'rows': 2}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.motsCles, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.indexable, {'attr': {'class': 'form-check-input'}}) }}
                </div>
                <div class=\"col-md-12\">
                    {{ form_row(form.textePromotion, {'attr': {'class': 'form-control', 'rows': 2}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.canonicalUrl, {'attr': {'class': 'form-control'}}) }}
                </div>

                <h3 class=\"text-secondary mt-4\">Image</h3>
                <div class=\"col-md-6\">
                    <label for=\"current-image\" class=\"form-label\">Image Actuelle</label><br>
                    {% if product.image %}
                        <img src=\"{{ asset('uploads/images/' ~ product.image) }}\" alt=\"{{ product.nom }}\" class=\"img-thumbnail mb-3\" style=\"max-width: 200px;\">
                    {% else %}
                        <p>Aucune image actuelle.</p>
                    {% endif %}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.image, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.texteAlternatif, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.titreImage, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"col-md-12\">
                    {{ form_row(form.descriptionImage, {'attr': {'class': 'form-control', 'rows': 2}}) }}
                </div>

                <h3 class=\"text-secondary mt-4\">Associations</h3>
                <div class=\"col-md-6\">
                    {{ form_row(form.marque, {'attr': {'class': 'form-select'}}) }}
                </div>
                <div class=\"col-md-6\">
                    {{ form_row(form.modele, {'attr': {'class': 'form-select'}}) }}
                </div>
                <div class=\"col-md-12\">
                    {{ form_row(form.motorisations, {'attr': {'class': 'form-select'}}) }}
                </div>

                <div class=\"col-md-12 text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary px-4 py-2\">Mettre à jour</button>
                    <a href=\"{{ path('app_product_index') }}\" class=\"btn btn-secondary px-4 py-2 ms-2\">Retour à la liste</a>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
    <style>.container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            font-weight: bold;
        }

        .card {
            border-radius: 10px;
            border: none;
        }

        .card-body h3 {
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .form-control, .form-select {
            border-radius: 5px;
        }

        .form-check-input {
            margin-top: 10px;
        }

        .btn {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .img-thumbnail {
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 100%;
            height: auto;
        }
    </style>
{% endblock %}
", "product/edit.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\product\\edit.html.twig");
    }
}
