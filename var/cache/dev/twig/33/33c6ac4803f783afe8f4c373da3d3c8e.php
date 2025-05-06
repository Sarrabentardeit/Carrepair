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
class __TwigTemplate_b83889675e72c4fb4bd52019cbbc9f76 extends Template
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
        yield "    <section class=\"boutique\">

        <div class=\"container-fluid py-5\">
            <h1 class=\"text-center fw-bold my-5\" style=\"color: #333;\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subCategory"]) || array_key_exists("subCategory", $context) ? $context["subCategory"] : (function () { throw new RuntimeError('Variable "subCategory" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>

            <!-- Conteneur principal aligné -->
            <div class=\"row\">
                <!-- Colonne gauche : Barre de recherche -->
                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"search-bar p-3 bg-light rounded shadow-sm\">
                        <h5 class=\"text-dark fw-bold mb-3\">Rechercher</h5>
                        <form method=\"get\" action=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subcategory_search", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["subCategory"]) || array_key_exists("subCategory", $context) ? $context["subCategory"] : (function () { throw new RuntimeError('Variable "subCategory" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\">
                            <div class=\"mb-3\">
                                <select id=\"marque\" name=\"marque\" class=\"form-select shadow-sm\">
                                    <option value=\"\">-- Toutes les marques --</option>
                                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 22
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 22, $this->source); })()), "marque", [], "any", false, false, false, 22) == CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "id", [], "any", false, false, false, 22))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "nom", [], "any", false, false, false, 23), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['marque'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <select id=\"modele\" name=\"modele\" class=\"form-select shadow-sm\">
                                    <option value=\"\">-- Tous les modèles --</option>
                                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 32
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 32, $this->source); })()), "modele", [], "any", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "id", [], "any", false, false, false, 32))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['modele'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <select id=\"motorisation\" name=\"motorisation\" class=\"form-select shadow-sm\">
                                    <option value=\"\">-- Toutes les motorisations --</option>
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motorisations"]) || array_key_exists("motorisations", $context) ? $context["motorisations"] : (function () { throw new RuntimeError('Variable "motorisations" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["motorisation"]) {
            // line 42
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 42, $this->source); })()), "motorisation", [], "any", false, false, false, 42) == CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "id", [], "any", false, false, false, 42))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "nom", [], "any", false, false, false, 43), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motorisation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-danger w-100\">Rechercher</button>
                        </form>
                    </div>
                    <!-- Section Catégories -->
                    <div class=\"categories p-3 bg-light rounded shadow-sm\">
                        <h5 class=\"text-dark fw-bold mb-3\">Catégories</h5>
                        <ul class=\"list-unstyled\">
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 56
            yield "                                <li class=\"mb-2\">
                                    <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_subcategory_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"text-dark text-decoration-none\">
                                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 58), "html", null, true);
            yield " <span class=\"badge bg-danger float-end\"></span>
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                        </ul>
                    </div>
                </div>

                <!-- Colonne droite : Liste des produits -->
                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"row gy-4\">
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 70
            yield "                            <div class=\"col-md-4 d-flex align-items-stretch\">
                                <div class=\"product-card w-100\">
                                    <!-- Image produit -->
                                    <div class=\"product-image\">
                                        <img src=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 74))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 74), "html", null, true);
            yield "\">
                                    </div>

                                    <!-- Informations produit -->
                                    <div class=\"product-info\">
                                        <h5 class=\"product-title\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 79), "html", null, true);
            yield "</h5>
                                        <p class=\"product-price text-danger\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 80), "html", null, true);
            yield " TND</p>
                                        <p class=\"product-stock ";
            // line 81
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 81) > 0)) {
                yield "in-stock";
            } else {
                yield "out-of-stock";
            }
            yield "\">
                                            ";
            // line 82
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 82) > 0)) ? ("En stock") : ("Rupture de stock"));
            yield "
                                        </p>

                                        ";
            // line 85
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 85) > 0)) {
                // line 86
                yield "                                            <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" class=\"add-to-cart-form\">
                                                <div class=\"d-flex align-items-center\">
                                                    <input type=\"number\" name=\"quantity\" class=\"form-control quantity-input me-2\" value=\"1\" min=\"1\" max=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantiteEnStock", [], "any", false, false, false, 88), "html", null, true);
                yield "\" required>
                                                    <button type=\"submit\" class=\"btn btn-outline-danger flex-grow-1\">Ajouter au panier</button>
                                                </div>
                                            </form>

                                        ";
            } else {
                // line 94
                yield "                                            <button class=\"btn btn-secondary w-100\" disabled>Hors stock</button>
                                        ";
            }
            // line 96
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            yield "                            <p class=\"text-center text-muted\">Aucun produit disponible pour cette sous-catégorie.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                    </div>

                    <!-- Pagination -->
                    <div class=\"d-flex justify-content-center mt-4\">
                        ";
        // line 106
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 106, $this->source); })()));
        yield "
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"cartModal\" tabindex=\"-1\" aria-labelledby=\"cartModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-danger text-white\">
                        <h5 class=\"modal-title\" id=\"cartModalLabel\">Produit ajouté au panier</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>                  </div>
                    <div class=\"modal-body text-center\">
                        <p><strong id=\"modal-product-name\"></strong> a été ajouté à votre panier.</p>
                        <p>Prix unitaire : <span id=\"modal-product-price\"></span> TND</p>
                        <p>Quantité : <span id=\"modal-product-quantity\"></span></p>
                        <hr>
                        <p><strong>Total panier :</strong> <span id=\"modal-total-cart\"></span> TND</p>
                    </div>
                    <div class=\"modal-footer justify-content-center\">
                        <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_home");
        yield "\" class=\"btn btn-secondary\">Continuer mes achats</a>
                        <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn btn-danger\">Voir le panier</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Barre de recherche */
        .search-bar {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Carte produit */
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product-image img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            padding: 10px;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
        }

        .product-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #dc3545;
        }

        .product-stock {
            font-size: 0.9rem;
            font-weight: bold;
            margin: 10px 0;
        }

        .product-stock.in-stock {
            color: #28a745;
        }

        .product-stock.out-of-stock {
            color: #dc3545;
        }

        /* Pagination */
        .pagination a, .pagination span {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 0 5px;
            color: #333;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #dc3545;
            color: #fff;
            border-color: #dc3545;
        }

        .pagination .active span {
            background-color: #dc3545;
            color: #fff;
            border-color: #dc3545;
        }
        .search-bar, .categories {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .categories ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .categories ul li a {
            font-size: 0.9rem;
            font-weight: bold;
            transition: color 0.3s;
        }

        .categories ul li a:hover {
            color: #dc3545;
        }
        .input-group {
            display: flex;
            align-items: center;
        }

        .input-group input[type=\"number\"] {
            max-width: 60px;
            margin-right: 10px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .quantity-input {
            max-width: 60px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .add-to-cart-form .btn {
            white-space: nowrap; /* Empêche la coupure du texte dans le bouton */
            border-radius: 5px;
        }

        .d-flex.align-items-center {
            gap: 10px; /* Ajoute un espace entre le champ et le bouton */
        }
.boutique .container-fluid.py-5 {
    max-width: 1500px;

}
    </style>

    <!-- Script -->
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
        return array (  359 => 130,  355 => 129,  329 => 106,  323 => 102,  316 => 100,  308 => 96,  304 => 94,  295 => 88,  289 => 86,  287 => 85,  281 => 82,  273 => 81,  269 => 80,  265 => 79,  255 => 74,  249 => 70,  244 => 69,  235 => 62,  225 => 58,  221 => 57,  218 => 56,  214 => 55,  203 => 46,  194 => 43,  185 => 42,  181 => 41,  174 => 36,  165 => 33,  156 => 32,  152 => 31,  145 => 26,  136 => 23,  127 => 22,  123 => 21,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produits{% endblock %}

{% block body %}
    <section class=\"boutique\">

        <div class=\"container-fluid py-5\">
            <h1 class=\"text-center fw-bold my-5\" style=\"color: #333;\">{{ subCategory.name }}</h1>

            <!-- Conteneur principal aligné -->
            <div class=\"row\">
                <!-- Colonne gauche : Barre de recherche -->
                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"search-bar p-3 bg-light rounded shadow-sm\">
                        <h5 class=\"text-dark fw-bold mb-3\">Rechercher</h5>
                        <form method=\"get\" action=\"{{ path('subcategory_search', { id: subCategory.id }) }}\">
                            <div class=\"mb-3\">
                                <select id=\"marque\" name=\"marque\" class=\"form-select shadow-sm\">
                                    <option value=\"\">-- Toutes les marques --</option>
                                    {% for marque in marques %}
                                        <option value=\"{{ marque.id }}\" {% if criteria.marque == marque.id %}selected{% endif %}>
                                            {{ marque.nom }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <select id=\"modele\" name=\"modele\" class=\"form-select shadow-sm\">
                                    <option value=\"\">-- Tous les modèles --</option>
                                    {% for modele in modeles %}
                                        <option value=\"{{ modele.id }}\" {% if criteria.modele == modele.id %}selected{% endif %}>
                                            {{ modele.nom }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <select id=\"motorisation\" name=\"motorisation\" class=\"form-select shadow-sm\">
                                    <option value=\"\">-- Toutes les motorisations --</option>
                                    {% for motorisation in motorisations %}
                                        <option value=\"{{ motorisation.id }}\" {% if criteria.motorisation == motorisation.id %}selected{% endif %}>
                                            {{ motorisation.nom }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-danger w-100\">Rechercher</button>
                        </form>
                    </div>
                    <!-- Section Catégories -->
                    <div class=\"categories p-3 bg-light rounded shadow-sm\">
                        <h5 class=\"text-dark fw-bold mb-3\">Catégories</h5>
                        <ul class=\"list-unstyled\">
                            {% for category in categories %}
                                <li class=\"mb-2\">
                                    <a href=\"{{ path('shop_subcategory_products', { id: category.id }) }}\" class=\"text-dark text-decoration-none\">
                                        {{ category.name }} <span class=\"badge bg-danger float-end\"></span>
                                    </a>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>

                <!-- Colonne droite : Liste des produits -->
                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"row gy-4\">
                        {% for product in products %}
                            <div class=\"col-md-4 d-flex align-items-stretch\">
                                <div class=\"product-card w-100\">
                                    <!-- Image produit -->
                                    <div class=\"product-image\">
                                        <img src=\"{{ asset('uploads/images/' ~ product.image) }}\" alt=\"{{ product.nom }}\">
                                    </div>

                                    <!-- Informations produit -->
                                    <div class=\"product-info\">
                                        <h5 class=\"product-title\">{{ product.nom }}</h5>
                                        <p class=\"product-price text-danger\">{{ product.prix }} TND</p>
                                        <p class=\"product-stock {% if product.quantiteEnStock > 0 %}in-stock{% else %}out-of-stock{% endif %}\">
                                            {{ product.quantiteEnStock > 0 ? 'En stock' : 'Rupture de stock' }}
                                        </p>

                                        {% if product.quantiteEnStock > 0 %}
                                            <form method=\"post\" action=\"{{ path('cart_add', {'id': product.id}) }}\" class=\"add-to-cart-form\">
                                                <div class=\"d-flex align-items-center\">
                                                    <input type=\"number\" name=\"quantity\" class=\"form-control quantity-input me-2\" value=\"1\" min=\"1\" max=\"{{ product.quantiteEnStock }}\" required>
                                                    <button type=\"submit\" class=\"btn btn-outline-danger flex-grow-1\">Ajouter au panier</button>
                                                </div>
                                            </form>

                                        {% else %}
                                            <button class=\"btn btn-secondary w-100\" disabled>Hors stock</button>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <p class=\"text-center text-muted\">Aucun produit disponible pour cette sous-catégorie.</p>
                        {% endfor %}
                    </div>

                    <!-- Pagination -->
                    <div class=\"d-flex justify-content-center mt-4\">
                        {{ knp_pagination_render(products) }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"cartModal\" tabindex=\"-1\" aria-labelledby=\"cartModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-danger text-white\">
                        <h5 class=\"modal-title\" id=\"cartModalLabel\">Produit ajouté au panier</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>                  </div>
                    <div class=\"modal-body text-center\">
                        <p><strong id=\"modal-product-name\"></strong> a été ajouté à votre panier.</p>
                        <p>Prix unitaire : <span id=\"modal-product-price\"></span> TND</p>
                        <p>Quantité : <span id=\"modal-product-quantity\"></span></p>
                        <hr>
                        <p><strong>Total panier :</strong> <span id=\"modal-total-cart\"></span> TND</p>
                    </div>
                    <div class=\"modal-footer justify-content-center\">
                        <a href=\"{{ path('shop_home') }}\" class=\"btn btn-secondary\">Continuer mes achats</a>
                        <a href=\"{{ path('cart_index') }}\" class=\"btn btn-danger\">Voir le panier</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Barre de recherche */
        .search-bar {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Carte produit */
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product-image img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            padding: 10px;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #333;
        }

        .product-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #dc3545;
        }

        .product-stock {
            font-size: 0.9rem;
            font-weight: bold;
            margin: 10px 0;
        }

        .product-stock.in-stock {
            color: #28a745;
        }

        .product-stock.out-of-stock {
            color: #dc3545;
        }

        /* Pagination */
        .pagination a, .pagination span {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 0 5px;
            color: #333;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #dc3545;
            color: #fff;
            border-color: #dc3545;
        }

        .pagination .active span {
            background-color: #dc3545;
            color: #fff;
            border-color: #dc3545;
        }
        .search-bar, .categories {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .categories ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .categories ul li a {
            font-size: 0.9rem;
            font-weight: bold;
            transition: color 0.3s;
        }

        .categories ul li a:hover {
            color: #dc3545;
        }
        .input-group {
            display: flex;
            align-items: center;
        }

        .input-group input[type=\"number\"] {
            max-width: 60px;
            margin-right: 10px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .quantity-input {
            max-width: 60px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .add-to-cart-form .btn {
            white-space: nowrap; /* Empêche la coupure du texte dans le bouton */
            border-radius: 5px;
        }

        .d-flex.align-items-center {
            gap: 10px; /* Ajoute un espace entre le champ et le bouton */
        }
.boutique .container-fluid.py-5 {
    max-width: 1500px;

}
    </style>

    <!-- Script -->
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
