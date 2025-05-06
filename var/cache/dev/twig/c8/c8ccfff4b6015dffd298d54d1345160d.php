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

/* shop/products.html.twig */
class __TwigTemplate_4262b0108406bd01acbee1024cb89670 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/products.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/products.html.twig", 1);
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

        yield "Produits";
        
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
        yield "    <div class=\"container\">
        <h1 class=\"text-center my-5 text-primary\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subCategory"]) || array_key_exists("subCategory", $context) ? $context["subCategory"] : (function () { throw new RuntimeError('Variable "subCategory" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

        <div class=\"row\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            yield "                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\" style=\"border-radius: 10px; overflow: hidden;\">
                        <!-- Bandeau d'état de stock -->
                        <div class=\"stock-banner ";
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 14) > 0)) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                            ";
            // line 15
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 15) > 0)) {
                // line 16
                yield "                                En stock
                            ";
            } else {
                // line 18
                yield "                                Rupture de stock
                            ";
            }
            // line 20
            yield "                        </div>

                        <img src=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 22))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 22), "html", null, true);
            yield "\" style=\"height: 200px; object-fit: cover;\">
                        <div class=\"card-body\" style=\"background-color: #f9f9f9;\">
                            <h5 class=\"card-title text-dark\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 24), "html", null, true);
            yield "</h5>
                            <p class=\"card-text text-muted\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>
                            <p class=\"card-text text-primary\"><strong>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 26), "html", null, true);
            yield " TND</strong></p>

                            ";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 28) > 0)) {
                // line 29
                yield "                                <p class=\"text-success\">En stock : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 29), "html", null, true);
                yield "</p>
                                <form method=\"post\" action=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\" class=\"add-to-cart-form\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" max=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 32), "html", null, true);
                yield "\" class=\"form-control w-25 me-2\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
                                    </div>
                                </form>
                            ";
            } else {
                // line 37
                yield "                                <p class=\"text-danger\">Rupture de stock</p>
                                <button class=\"btn btn-secondary w-100\" disabled>Hors Stock</button>
                            ";
            }
            // line 40
            yield "                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            yield "                <p class=\"text-center\">Aucun produit disponible pour cette sous-catégorie.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "        </div>
    </div>

    <!-- Styles pour améliorer le design -->
    <style>
        .stock-banner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            color: white;
            font-weight: bold;
            padding: 5px;
            font-size: 14px;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .bg-danger {
            background-color: #dc3545 !important;
        }

        .card {
            border: none;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addToCartForms = document.querySelectorAll('.add-to-cart-form');

            addToCartForms.forEach(form => {
                form.addEventListener('submit', async (event) => {
                    event.preventDefault();

                    const formData = new FormData(form);
                    const url = form.action;

                    try {
                        const response = await fetch(url, {
                            method: 'POST',
                            body: formData,
                            headers: { 'X-Requested-With': 'XMLHttpRequest' }
                        });

                        if (response.ok) {
                            const data = await response.json();

                            if (data.success) {
                                document.getElementById('modal-product-name').innerText = data.productName;
                                document.getElementById('modal-product-price').innerText = data.productPrice;
                                document.getElementById('modal-product-quantity').innerText = data.productQuantity;
                                document.getElementById('modal-total-cart').innerText = data.totalCart;

                                const modal = new bootstrap.Modal(document.getElementById('cartModal'));
                                modal.show();
                            } else {
                                alert(data.message);
                            }
                        } else {
                            alert('Une erreur est survenue.');
                        }
                    } catch (error) {
                        console.error('Erreur:', error);
                    }
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
        return "shop/products.html.twig";
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
        return array (  201 => 46,  194 => 44,  186 => 40,  181 => 37,  173 => 32,  168 => 30,  163 => 29,  161 => 28,  156 => 26,  152 => 25,  148 => 24,  141 => 22,  137 => 20,  133 => 18,  129 => 16,  127 => 15,  119 => 14,  114 => 11,  109 => 10,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produits{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"text-center my-5 text-primary\">{{ subCategory.name }}</h1>

        <div class=\"row\">
            {% for product in products %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\" style=\"border-radius: 10px; overflow: hidden;\">
                        <!-- Bandeau d'état de stock -->
                        <div class=\"stock-banner {% if product.quantiteEnStock > 0 %}bg-success{% else %}bg-danger{% endif %}\">
                            {% if product.quantiteEnStock > 0 %}
                                En stock
                            {% else %}
                                Rupture de stock
                            {% endif %}
                        </div>

                        <img src=\"{{ asset('uploads/images/' ~ product.image) }}\" class=\"card-img-top\" alt=\"{{ product.nom }}\" style=\"height: 200px; object-fit: cover;\">
                        <div class=\"card-body\" style=\"background-color: #f9f9f9;\">
                            <h5 class=\"card-title text-dark\">{{ product.nom }}</h5>
                            <p class=\"card-text text-muted\">{{ product.description }}</p>
                            <p class=\"card-text text-primary\"><strong>{{ product.prix }} TND</strong></p>

                            {% if product.quantiteEnStock > 0 %}
                                <p class=\"text-success\">En stock : {{ product.quantiteEnStock }}</p>
                                <form method=\"post\" action=\"{{ path('cart_add', {'id': product.id}) }}\" class=\"add-to-cart-form\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <input type=\"number\" name=\"quantity\" value=\"1\" min=\"1\" max=\"{{ product.quantiteEnStock }}\" class=\"form-control w-25 me-2\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
                                    </div>
                                </form>
                            {% else %}
                                <p class=\"text-danger\">Rupture de stock</p>
                                <button class=\"btn btn-secondary w-100\" disabled>Hors Stock</button>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center\">Aucun produit disponible pour cette sous-catégorie.</p>
            {% endfor %}
        </div>
    </div>

    <!-- Styles pour améliorer le design -->
    <style>
        .stock-banner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            color: white;
            font-weight: bold;
            padding: 5px;
            font-size: 14px;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .bg-danger {
            background-color: #dc3545 !important;
        }

        .card {
            border: none;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addToCartForms = document.querySelectorAll('.add-to-cart-form');

            addToCartForms.forEach(form => {
                form.addEventListener('submit', async (event) => {
                    event.preventDefault();

                    const formData = new FormData(form);
                    const url = form.action;

                    try {
                        const response = await fetch(url, {
                            method: 'POST',
                            body: formData,
                            headers: { 'X-Requested-With': 'XMLHttpRequest' }
                        });

                        if (response.ok) {
                            const data = await response.json();

                            if (data.success) {
                                document.getElementById('modal-product-name').innerText = data.productName;
                                document.getElementById('modal-product-price').innerText = data.productPrice;
                                document.getElementById('modal-product-quantity').innerText = data.productQuantity;
                                document.getElementById('modal-total-cart').innerText = data.totalCart;

                                const modal = new bootstrap.Modal(document.getElementById('cartModal'));
                                modal.show();
                            } else {
                                alert(data.message);
                            }
                        } else {
                            alert('Une erreur est survenue.');
                        }
                    } catch (error) {
                        console.error('Erreur:', error);
                    }
                });
            });
        });
    </script>
{% endblock %}
", "shop/products.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\shop\\products.html.twig");
    }
}
