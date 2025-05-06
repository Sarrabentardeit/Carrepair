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

/* appointment/show.html.twig */
class __TwigTemplate_77042179004b607ed2c3b44b277bf0a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/show.html.twig", 1);
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

        yield "Détails du Rendez-vous";
        
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
        yield "    <div class=\"appointment-details-page container mt-5\">
        <h1 class=\"text-center mb-4\">Détails du Rendez-vous</h1>

        <div class=\"card shadow-lg p-3 mb-5 bg-white rounded\">
            <table class=\"table table-borderless\">
                <tbody>
                <tr>
                    <th scope=\"row\" class=\"text-primary\">Id</th>
                    <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th scope=\"row\" class=\"text-primary\">Date du Rendez-vous</th>
                    <td>";
        // line 18
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr>
                    <th scope=\"row\" class=\"text-primary\">Service Demandé</th>
                    <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 22, $this->source); })()), "service", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th scope=\"row\" class=\"text-primary\">Statut</th>
                    <td><span class=\"badge badge-warning\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 26, $this->source); })()), "statut", [], "any", false, false, false, 26), "html", null, true);
        yield "</span></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_index");
        yield "\" class=\"btn btn-outline-dark\">
                <i class=\"fa fa-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"fa fa-pencil\"></i> Modifier
            </a>
            ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "appointment/_delete_form.html.twig", ["class" => "btn btn-danger"]);
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
        return "appointment/show.html.twig";
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
        return array (  153 => 39,  147 => 36,  141 => 33,  131 => 26,  124 => 22,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Rendez-vous{% endblock %}

{% block body %}
    <div class=\"appointment-details-page container mt-5\">
        <h1 class=\"text-center mb-4\">Détails du Rendez-vous</h1>

        <div class=\"card shadow-lg p-3 mb-5 bg-white rounded\">
            <table class=\"table table-borderless\">
                <tbody>
                <tr>
                    <th scope=\"row\" class=\"text-primary\">Id</th>
                    <td>{{ appointment.id }}</td>
                </tr>
                <tr>
                    <th scope=\"row\" class=\"text-primary\">Date du Rendez-vous</th>
                    <td>{{ appointment.date ? appointment.date|date('Y-m-d H:i:s') : '' }}</td>
                </tr>
                <tr>
                    <th scope=\"row\" class=\"text-primary\">Service Demandé</th>
                    <td>{{ appointment.service }}</td>
                </tr>
                <tr>
                    <th scope=\"row\" class=\"text-primary\">Statut</th>
                    <td><span class=\"badge badge-warning\">{{ appointment.statut }}</span></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"{{ path('app_appointment_index') }}\" class=\"btn btn-outline-dark\">
                <i class=\"fa fa-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"{{ path('app_appointment_edit', {'id': appointment.id}) }}\" class=\"btn btn-primary\">
                <i class=\"fa fa-pencil\"></i> Modifier
            </a>
            {{ include('appointment/_delete_form.html.twig', { 'class': 'btn btn-danger' }) }}
        </div>
    </div>
{% endblock %}
", "appointment/show.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\appointment\\show.html.twig");
    }
}
