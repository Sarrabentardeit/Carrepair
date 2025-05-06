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

/* shop/search.html.twig */
class __TwigTemplate_3310996f0b2c7b4995f29113bc267b96 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/search.html.twig"));

        // line 1
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Recherche dans la catégorie : ";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subCategory"]) || array_key_exists("subCategory", $context) ? $context["subCategory"] : (function () { throw new RuntimeError('Variable "subCategory" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        yield "</h1>

    <form method=\"get\" action=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subcategory_search", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["subCategory"]) || array_key_exists("subCategory", $context) ? $context["subCategory"] : (function () { throw new RuntimeError('Variable "subCategory" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
        yield "\" class=\"row g-3 mb-4\">
        <div class=\"col-md-4\">
            <label for=\"marque\" class=\"form-label\">Marque</label>
            <select id=\"marque\" name=\"marque\" class=\"form-select\">
                <option value=\"\">-- Toutes les marques --</option>
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 10
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "id", [], "any", false, false, false, 10), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 10, $this->source); })()), "marque", [], "any", false, false, false, 10) == CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "id", [], "any", false, false, false, 10))) {
                yield "selected";
            }
            yield ">
                        ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "nom", [], "any", false, false, false, 11), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['marque'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "            </select>
        </div>
        <div class=\"col-md-4\">
            <label for=\"modele\" class=\"form-label\">Modèle</label>
            <select id=\"modele\" name=\"modele\" class=\"form-select\">
                <option value=\"\">-- Tous les modèles --</option>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modeles"]) || array_key_exists("modeles", $context) ? $context["modeles"] : (function () { throw new RuntimeError('Variable "modeles" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 21
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 21, $this->source); })()), "modele", [], "any", false, false, false, 21) == CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "id", [], "any", false, false, false, 21))) {
                yield "selected";
            }
            yield ">
                        ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modele"], "nom", [], "any", false, false, false, 22), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['modele'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "            </select>
        </div>
        <div class=\"col-md-4\">
            <label for=\"motorisation\" class=\"form-label\">Motorisation</label>
            <select id=\"motorisation\" name=\"motorisation\" class=\"form-select\">
                <option value=\"\">-- Toutes les motorisations --</option>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motorisations"]) || array_key_exists("motorisations", $context) ? $context["motorisations"] : (function () { throw new RuntimeError('Variable "motorisations" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["motorisation"]) {
            // line 32
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 32, $this->source); })()), "motorisation", [], "any", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "id", [], "any", false, false, false, 32))) {
                yield "selected";
            }
            yield ">
                        ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motorisation"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motorisation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "            </select>
        </div>
        <div class=\"col-12\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>

    <h2>Produits compatibles</h2>
    ";
        // line 44
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 44, $this->source); })()))) {
            // line 45
            yield "        <div class=\"row\">
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 47
                yield "                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img src=\"/uploads/";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 49), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 49), "html", null, true);
                yield "\" onerror=\"this.style.display='none'\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 51), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 52), "html", null, true);
                yield "</p>
                            <p class=\"card-text\"><strong>Prix :</strong> ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 53), "html", null, true);
                yield " TND</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "        </div>
    ";
        } else {
            // line 60
            yield "        <p>Aucun produit compatible trouvé.</p>
    ";
        }
        // line 62
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shop/search.html.twig";
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
        return array (  203 => 62,  199 => 60,  195 => 58,  184 => 53,  180 => 52,  176 => 51,  169 => 49,  165 => 47,  161 => 46,  158 => 45,  156 => 44,  146 => 36,  137 => 33,  128 => 32,  124 => 31,  116 => 25,  107 => 22,  98 => 21,  94 => 20,  86 => 14,  77 => 11,  68 => 10,  64 => 9,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Recherche dans la catégorie : {{ subCategory.name }}</h1>

    <form method=\"get\" action=\"{{ path('subcategory_search', { id: subCategory.id }) }}\" class=\"row g-3 mb-4\">
        <div class=\"col-md-4\">
            <label for=\"marque\" class=\"form-label\">Marque</label>
            <select id=\"marque\" name=\"marque\" class=\"form-select\">
                <option value=\"\">-- Toutes les marques --</option>
                {% for marque in marques %}
                    <option value=\"{{ marque.id }}\" {% if criteria.marque == marque.id %}selected{% endif %}>
                        {{ marque.nom }}
                    </option>
                {% endfor %}
            </select>
        </div>
        <div class=\"col-md-4\">
            <label for=\"modele\" class=\"form-label\">Modèle</label>
            <select id=\"modele\" name=\"modele\" class=\"form-select\">
                <option value=\"\">-- Tous les modèles --</option>
                {% for modele in modeles %}
                    <option value=\"{{ modele.id }}\" {% if criteria.modele == modele.id %}selected{% endif %}>
                        {{ modele.nom }}
                    </option>
                {% endfor %}
            </select>
        </div>
        <div class=\"col-md-4\">
            <label for=\"motorisation\" class=\"form-label\">Motorisation</label>
            <select id=\"motorisation\" name=\"motorisation\" class=\"form-select\">
                <option value=\"\">-- Toutes les motorisations --</option>
                {% for motorisation in motorisations %}
                    <option value=\"{{ motorisation.id }}\" {% if criteria.motorisation == motorisation.id %}selected{% endif %}>
                        {{ motorisation.nom }}
                    </option>
                {% endfor %}
            </select>
        </div>
        <div class=\"col-12\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>

    <h2>Produits compatibles</h2>
    {% if products is not empty %}
        <div class=\"row\">
            {% for product in products %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img src=\"/uploads/{{ product.image }}\" class=\"card-img-top\" alt=\"{{ product.nom }}\" onerror=\"this.style.display='none'\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ product.nom }}</h5>
                            <p class=\"card-text\">{{ product.description }}</p>
                            <p class=\"card-text\"><strong>Prix :</strong> {{ product.prix }} TND</p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p>Aucun produit compatible trouvé.</p>
    {% endif %}
</div>
", "shop/search.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\shop\\search.html.twig");
    }
}
