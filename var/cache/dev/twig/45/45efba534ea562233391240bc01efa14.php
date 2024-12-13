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

/* product/show.html.twig */
class __TwigTemplate_495a4ac3b8b8a7b27cce13867bee60bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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

        yield "Détails du Produit";
        
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
        <h1 class=\"text-center mb-4\">Détails du Produit</h1>

        <!-- Tableau des détails -->
        <div class=\"card shadow\">
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "prix", [], "any", false, false, false, 24), 2, ",", " "), "html", null, true);
        yield " DT</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Quantité en Stock</th>
                        <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "quantiteEnStock", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Date d'Ajout</th>
                        <td>";
        // line 36
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "dateAjout", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "dateAjout", [], "any", false, false, false, 36), "Y-m-d H:i"), "html", null, true)) : (""));
        yield "</td>
                    </tr>

                    <!-- Champs SEO -->
                    <tr>
                        <th>Titre SEO</th>
                        <td>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "seoTitre", [], "any", false, false, false, 42), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Meta Description</th>
                        <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "seoDescription", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Slug URL</th>
                        <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "slug", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Mots-clés</th>
                        <td>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 54, $this->source); })()), "motsCles", [], "any", false, false, false, 54), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Texte Promotionnel</th>
                        <td>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "textePromotion", [], "any", false, false, false, 58), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Indexable</th>
                        <td>
                            <span class=\"badge ";
        // line 63
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 63, $this->source); })()), "indexable", [], "any", false, false, false, 63)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                ";
        // line 64
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "indexable", [], "any", false, false, false, 64)) ? ("Oui") : ("Non"));
        yield "
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Canonical URL</th>
                        <td>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 70, $this->source); })()), "canonicalUrl", [], "any", false, false, false, 70), "html", null, true);
        yield "</td>
                    </tr>

                    <!-- Champs Image -->
                    <tr>
                        <th>Nom de l'image</th>
                        <td>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "nomImage", [], "any", false, false, false, 76), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Texte Alternatif</th>
                        <td>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 80, $this->source); })()), "texteAlternatif", [], "any", false, false, false, 80), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Titre de l'image</th>
                        <td>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "titreImage", [], "any", false, false, false, 84), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Description de l'image</th>
                        <td>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 88, $this->source); })()), "descriptionImage", [], "any", false, false, false, 88), "html", null, true);
        yield "</td>
                    </tr>

                    <!-- Affichage de l'image -->
                    <tr>
                        <th>Image du produit</th>
                        <td class=\"text-center\">
                            ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 95, $this->source); })()), "image", [], "any", false, false, false, 95)) {
            // line 96
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "image", [], "any", false, false, false, 96))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"max-width: 150px; max-height: 150px;\">
                            ";
        } else {
            // line 98
            yield "                                <span class=\"text-muted\">Pas d'image disponible</span>
                            ";
        }
        // line 100
        yield "                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Actions -->
        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"bi bi-pencil\"></i> Modifier
            </a>
        </div>

        <!-- Suppression -->
        <div class=\"mt-3\">
            ";
        // line 119
        yield Twig\Extension\CoreExtension::include($this->env, $context, "product/_delete_form.html.twig");
        yield "
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
        return "product/show.html.twig";
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
        return array (  286 => 119,  276 => 112,  270 => 109,  259 => 100,  255 => 98,  247 => 96,  245 => 95,  235 => 88,  228 => 84,  221 => 80,  214 => 76,  205 => 70,  196 => 64,  192 => 63,  184 => 58,  177 => 54,  170 => 50,  163 => 46,  156 => 42,  147 => 36,  140 => 32,  133 => 28,  126 => 24,  119 => 20,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Produit{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Détails du Produit</h1>

        <!-- Tableau des détails -->
        <div class=\"card shadow\">
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ product.id }}</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ product.nom }}</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>{{ product.prix | number_format(2, ',', ' ') }} DT</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ product.description }}</td>
                    </tr>
                    <tr>
                        <th>Quantité en Stock</th>
                        <td>{{ product.quantiteEnStock }}</td>
                    </tr>
                    <tr>
                        <th>Date d'Ajout</th>
                        <td>{{ product.dateAjout ? product.dateAjout|date('Y-m-d H:i') : '' }}</td>
                    </tr>

                    <!-- Champs SEO -->
                    <tr>
                        <th>Titre SEO</th>
                        <td>{{ product.seoTitre }}</td>
                    </tr>
                    <tr>
                        <th>Meta Description</th>
                        <td>{{ product.seoDescription }}</td>
                    </tr>
                    <tr>
                        <th>Slug URL</th>
                        <td>{{ product.slug }}</td>
                    </tr>
                    <tr>
                        <th>Mots-clés</th>
                        <td>{{ product.motsCles }}</td>
                    </tr>
                    <tr>
                        <th>Texte Promotionnel</th>
                        <td>{{ product.textePromotion }}</td>
                    </tr>
                    <tr>
                        <th>Indexable</th>
                        <td>
                            <span class=\"badge {{ product.indexable ? 'bg-success' : 'bg-danger' }}\">
                                {{ product.indexable ? 'Oui' : 'Non' }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Canonical URL</th>
                        <td>{{ product.canonicalUrl }}</td>
                    </tr>

                    <!-- Champs Image -->
                    <tr>
                        <th>Nom de l'image</th>
                        <td>{{ product.nomImage }}</td>
                    </tr>
                    <tr>
                        <th>Texte Alternatif</th>
                        <td>{{ product.texteAlternatif }}</td>
                    </tr>
                    <tr>
                        <th>Titre de l'image</th>
                        <td>{{ product.titreImage }}</td>
                    </tr>
                    <tr>
                        <th>Description de l'image</th>
                        <td>{{ product.descriptionImage }}</td>
                    </tr>

                    <!-- Affichage de l'image -->
                    <tr>
                        <th>Image du produit</th>
                        <td class=\"text-center\">
                            {% if product.image %}
                                <img src=\"{{ asset('uploads/images/' ~ product.image) }}\" alt=\"{{ product.nom }}\" class=\"img-thumbnail\" style=\"max-width: 150px; max-height: 150px;\">
                            {% else %}
                                <span class=\"text-muted\">Pas d'image disponible</span>
                            {% endif %}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Actions -->
        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"{{ path('app_product_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"{{ path('app_product_edit', {'id': product.id}) }}\" class=\"btn btn-primary\">
                <i class=\"bi bi-pencil\"></i> Modifier
            </a>
        </div>

        <!-- Suppression -->
        <div class=\"mt-3\">
            {{ include('product/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}
", "product/show.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\product\\show.html.twig");
    }
}
