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

/* subcategory/index.html.twig */
class __TwigTemplate_350a66fea1273f0eca633209655b035f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subcategory/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subcategory/index.html.twig"));

        // line 1
        yield "<div class=\"container\">
    <h1>Liste des sous-catégories</h1>

    <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subcategory_new");
        yield "\" class=\"btn btn-primary mb-3\">Créer une nouvelle sous-catégorie</a>

    <table class=\"table\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["subcategories"]) || array_key_exists("subcategories", $context) ? $context["subcategories"] : (function () { throw new RuntimeError('Variable "subcategories" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
            // line 16
            yield "            <tr>
                <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                <td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subCategory"], "name", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subcategory_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Afficher</a>
                    <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subcategory_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                    <form method=\"post\" action=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subcategory_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\" style=\"display: inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["subCategory"], "id", [], "any", false, false, false, 23))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            yield "            <tr>
                <td colspan=\"3\">Aucune sous-catégorie trouvée.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subCategory'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </tbody>
    </table>
</div>
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
        return "subcategory/index.html.twig";
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
        return array (  116 => 33,  107 => 29,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  79 => 18,  75 => 17,  72 => 16,  67 => 15,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
    <h1>Liste des sous-catégories</h1>

    <a href=\"{{ path('subcategory_new') }}\" class=\"btn btn-primary mb-3\">Créer une nouvelle sous-catégorie</a>

    <table class=\"table\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for subCategory in subcategories %}
            <tr>
                <td>{{ subCategory.id }}</td>
                <td>{{ subCategory.name }}</td>
                <td>
                    <a href=\"{{ path('subcategory_show', { id: subCategory.id }) }}\" class=\"btn btn-info\">Afficher</a>
                    <a href=\"{{ path('subcategory_edit', { id: subCategory.id }) }}\" class=\"btn btn-warning\">Modifier</a>
                    <form method=\"post\" action=\"{{ path('subcategory_delete', { id: subCategory.id }) }}\" style=\"display: inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ subCategory.id) }}\">
                        <button class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Aucune sous-catégorie trouvée.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "subcategory/index.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\subcategory\\index.html.twig");
    }
}
