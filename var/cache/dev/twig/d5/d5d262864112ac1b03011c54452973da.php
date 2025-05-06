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

/* cart/index.html.twig */
class __TwigTemplate_d152e4102a5d4437c6bba7f23122f9dd extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        yield "Votre Panier";
        
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
        <h1 class=\"text-center mb-5\">Votre Panier</h1>

        ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <div class=\"alert alert-info text-center\" role=\"alert\">
                Votre panier est vide.
            </div>
        ";
        } else {
            // line 14
            yield "            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle text-center\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix Unitaire</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                yield "                        <tr>
                            <td>
                                ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
                yield "
                            </td>

                            <td>
                                <span class=\"badge bg-primary p-2\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
                            </td>
                            <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "prix", [], "any", false, false, false, 35), "html", null, true);
                yield " TND</td>
                            <td><strong>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 36), "html", null, true);
                yield " TND</strong></td>
                            <td>
                                <a href=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"bi bi-trash3\"></i> Retirer
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-between align-items-center mt-4\">
                <h3>Total : <strong>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), "html", null, true);
            yield " TND</strong></h3>
                <div>
                    <a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_clear");
            yield "\" class=\"btn btn-warning btn-lg me-2\">
                        <i class=\"bi bi-cart-x\"></i> Vider le panier
                    </a>
                    <a href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_new");
            yield "\" class=\"btn btn-success btn-lg\">
                        <i class=\"bi bi-credit-card\"></i> Commander
                    </a>
                </div>
            </div>
        ";
        }
        // line 59
        yield "    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"cartModal\" tabindex=\"-1\" aria-labelledby=\"cartModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-success text-white\">
                    <h5 class=\"modal-title\" id=\"cartModalLabel\">
                        <i class=\"bi bi-check-circle-fill\"></i> Produit ajouté au panier
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body text-center\">
                    <p><strong>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("productName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["productName"]) || array_key_exists("productName", $context) ? $context["productName"] : (function () { throw new RuntimeError('Variable "productName" does not exist.', 72, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</strong> a été ajouté à votre panier.</p>
                    <p>Prix unitaire : <strong>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("productPrice", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["productPrice"]) || array_key_exists("productPrice", $context) ? $context["productPrice"] : (function () { throw new RuntimeError('Variable "productPrice" does not exist.', 73, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield " TND</strong></p>
                    <p>Quantité : <strong>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("productQuantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["productQuantity"]) || array_key_exists("productQuantity", $context) ? $context["productQuantity"] : (function () { throw new RuntimeError('Variable "productQuantity" does not exist.', 74, $this->source); })()), "1")) : ("1")), "html", null, true);
        yield "</strong></p>
                    <hr>
                    <p><strong>Total panier :</strong> ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("totalCart", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalCart"]) || array_key_exists("totalCart", $context) ? $context["totalCart"] : (function () { throw new RuntimeError('Variable "totalCart" does not exist.', 76, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 76, $this->source); })()))) : ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 76, $this->source); })()))), "html", null, true);
        yield " TND</p>
                </div>
                <div class=\"modal-footer d-flex justify-content-between\">
                    <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_home");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-shop\"></i> Continuer mes achats
                    </a>
                    <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"bi bi-cart\"></i> Voir le panier
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('added_to_cart')) {
                let cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
                cartModal.show();
            }
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
        return "cart/index.html.twig";
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
        return array (  267 => 92,  254 => 91,  235 => 82,  229 => 79,  223 => 76,  218 => 74,  214 => 73,  210 => 72,  195 => 59,  186 => 53,  180 => 50,  175 => 48,  169 => 44,  157 => 38,  152 => 36,  148 => 35,  143 => 33,  136 => 29,  132 => 27,  128 => 26,  114 => 14,  108 => 10,  106 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre Panier{% endblock %}

{% block body %}
    <div class=\"container my-5\">
        <h1 class=\"text-center mb-5\">Votre Panier</h1>

        {% if cartItems is empty %}
            <div class=\"alert alert-info text-center\" role=\"alert\">
                Votre panier est vide.
            </div>
        {% else %}
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle text-center\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix Unitaire</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for item in cartItems %}
                        <tr>
                            <td>
                                {{ item.product.nom }}
                            </td>

                            <td>
                                <span class=\"badge bg-primary p-2\">{{ item.quantity }}</span>
                            </td>
                            <td>{{ item.product.prix }} TND</td>
                            <td><strong>{{ item.total }} TND</strong></td>
                            <td>
                                <a href=\"{{ path('cart_remove', {id: item.product.id}) }}\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"bi bi-trash3\"></i> Retirer
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-between align-items-center mt-4\">
                <h3>Total : <strong>{{ total }} TND</strong></h3>
                <div>
                    <a href=\"{{ path('cart_clear') }}\" class=\"btn btn-warning btn-lg me-2\">
                        <i class=\"bi bi-cart-x\"></i> Vider le panier
                    </a>
                    <a href=\"{{ path('app_order_new') }}\" class=\"btn btn-success btn-lg\">
                        <i class=\"bi bi-credit-card\"></i> Commander
                    </a>
                </div>
            </div>
        {% endif %}
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"cartModal\" tabindex=\"-1\" aria-labelledby=\"cartModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-success text-white\">
                    <h5 class=\"modal-title\" id=\"cartModalLabel\">
                        <i class=\"bi bi-check-circle-fill\"></i> Produit ajouté au panier
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body text-center\">
                    <p><strong>{{ productName|default('') }}</strong> a été ajouté à votre panier.</p>
                    <p>Prix unitaire : <strong>{{ productPrice|default('0') }} TND</strong></p>
                    <p>Quantité : <strong>{{ productQuantity|default('1') }}</strong></p>
                    <hr>
                    <p><strong>Total panier :</strong> {{ totalCart|default(total) }} TND</p>
                </div>
                <div class=\"modal-footer d-flex justify-content-between\">
                    <a href=\"{{ path('shop_home') }}\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-shop\"></i> Continuer mes achats
                    </a>
                    <a href=\"{{ path('cart_index') }}\" class=\"btn btn-primary\">
                        <i class=\"bi bi-cart\"></i> Voir le panier
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('added_to_cart')) {
                let cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
                cartModal.show();
            }
        });
    </script>
{% endblock %}
", "cart/index.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\cart\\index.html.twig");
    }
}
