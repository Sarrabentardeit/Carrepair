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
class __TwigTemplate_87f4d084eacda903af3aa83e4a186a00 extends Template
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
        yield "    <div class=\"container\">
        <h1 class=\"my-5\">Votre Panier</h1>

        ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <p>Votre panier est vide.</p>
        ";
        } else {
            // line 12
            yield "            <table class=\"table\">
                <thead>
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
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                yield "                    <tr>
                        <td>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true);
                yield "</td>
                        <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
                        <td>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "prix", [], "any", false, false, false, 27), "html", null, true);
                yield " TND</td>
                        <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 28), "html", null, true);
                yield " TND</td>
                        <td>
                            <a href=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm\">Retirer</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "                </tbody>
            </table>
            <h3>Total : ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 36, $this->source); })()), "html", null, true);
            yield " TND</h3>
            <a href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_clear");
            yield "\" class=\"btn btn-warning\">Vider le panier</a>
            <a href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_new");
            yield "\" class=\"btn btn-primary\">Commander</a>
        ";
        }
        // line 40
        yield "    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"cartModal\" tabindex=\"-1\" aria-labelledby=\"cartModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-success text-white\">
                    <h5 class=\"modal-title\" id=\"cartModalLabel\">Produit ajouté au panier</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p><strong>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("productName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["productName"]) || array_key_exists("productName", $context) ? $context["productName"] : (function () { throw new RuntimeError('Variable "productName" does not exist.', 51, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</strong> a été ajouté à votre panier.</p>
                    <p>Prix unitaire : ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("productPrice", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["productPrice"]) || array_key_exists("productPrice", $context) ? $context["productPrice"] : (function () { throw new RuntimeError('Variable "productPrice" does not exist.', 52, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield " TND</p>
                    <p>Quantité : ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("productQuantity", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["productQuantity"]) || array_key_exists("productQuantity", $context) ? $context["productQuantity"] : (function () { throw new RuntimeError('Variable "productQuantity" does not exist.', 53, $this->source); })()), "1")) : ("1")), "html", null, true);
        yield "</p>
                    <hr>
                    <p><strong>Total panier :</strong> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("totalCart", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["totalCart"]) || array_key_exists("totalCart", $context) ? $context["totalCart"] : (function () { throw new RuntimeError('Variable "totalCart" does not exist.', 55, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()))) : ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()))), "html", null, true);
        yield " TND</p>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_home");
        yield "\" class=\"btn btn-secondary\">Continuer mes achats</a>
                    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\" class=\"btn btn-primary\">Voir le panier</a>
                </div>
            </div>
        </div>
    </div>

    <script>
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
        return array (  211 => 59,  207 => 58,  201 => 55,  196 => 53,  192 => 52,  188 => 51,  175 => 40,  170 => 38,  166 => 37,  162 => 36,  158 => 34,  148 => 30,  143 => 28,  139 => 27,  135 => 26,  131 => 25,  128 => 24,  124 => 23,  111 => 12,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre Panier{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"my-5\">Votre Panier</h1>

        {% if cartItems is empty %}
            <p>Votre panier est vide.</p>
        {% else %}
            <table class=\"table\">
                <thead>
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
                        <td>{{ item.product.nom }}</td>
                        <td>{{ item.quantity }}</td>
                        <td>{{ item.product.prix }} TND</td>
                        <td>{{ item.total }} TND</td>
                        <td>
                            <a href=\"{{ path('cart_remove', {id: item.product.id}) }}\" class=\"btn btn-danger btn-sm\">Retirer</a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <h3>Total : {{ total }} TND</h3>
            <a href=\"{{ path('cart_clear') }}\" class=\"btn btn-warning\">Vider le panier</a>
            <a href=\"{{ path('app_order_new') }}\" class=\"btn btn-primary\">Commander</a>
        {% endif %}
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"cartModal\" tabindex=\"-1\" aria-labelledby=\"cartModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-success text-white\">
                    <h5 class=\"modal-title\" id=\"cartModalLabel\">Produit ajouté au panier</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p><strong>{{ productName|default('') }}</strong> a été ajouté à votre panier.</p>
                    <p>Prix unitaire : {{ productPrice|default('0') }} TND</p>
                    <p>Quantité : {{ productQuantity|default('1') }}</p>
                    <hr>
                    <p><strong>Total panier :</strong> {{ totalCart|default(total) }} TND</p>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"{{ path('shop_home') }}\" class=\"btn btn-secondary\">Continuer mes achats</a>
                    <a href=\"{{ path('cart_index') }}\" class=\"btn btn-primary\">Voir le panier</a>
                </div>
            </div>
        </div>
    </div>

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
