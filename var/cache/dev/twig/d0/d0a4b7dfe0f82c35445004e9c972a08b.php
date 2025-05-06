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

/* product/new.html.twig */
class __TwigTemplate_5b0fe82baa4d23fa657c8761b20539e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
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

        yield "Créer un Nouveau Produit";
        
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
        <div class=\"card shadow-lg border-0\">
            <div class=\"card-header bg-dark text-white text-center py-3\">
                <h2>Créer un Nouveau Produit</h2>
            </div>
            <div class=\"card-body\" style=\"background-color: #f8f9fa; color: #343a40;\">
                ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "class" => "p-4"]]);
        yield "

                <!-- Section: Détails du Produit -->
                <h5 class=\"text-dark border-bottom pb-2 mb-4\">Détails du Produit</h5>
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prix", [], "any", false, false, false, 21), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-12\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "quantiteEnStock", [], "any", false, false, false, 27), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "dateAjout", [], "any", false, false, false, 30), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "subCategory", [], "any", false, false, false, 33), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                </div>

                <!-- Section: Vehicule -->
                <h5 class=\"text-dark border-bottom pb-2 mt-5 mb-4\">Détails Vehicule</h5>

                <div class=\"row g-4\">

                    <div class=\"col-md-6\">
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "marque", [], "any", false, false, false, 43), 'row', ["attr" => ["class" => "form-control select-marque"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "modele", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "form-control select-modele"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "motorisations", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control select-motorisations"]]);
        yield "
                    </div>

                </div>

                <!-- Section: Détails SEO -->
                <h5 class=\"text-dark border-bottom pb-2 mt-5 mb-4\">Détails SEO</h5>
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "seoTitre", [], "any", false, false, false, 58), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "seoDescription", [], "any", false, false, false, 61), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "slug", [], "any", false, false, false, 64), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "motsCles", [], "any", false, false, false, 67), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-12\">
                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "textePromotion", [], "any", false, false, false, 70), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "indexable", [], "any", false, false, false, 73), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-check-input"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "canonicalUrl", [], "any", false, false, false, 76), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                </div>

                <!-- Section: Image du Produit -->
                <h5 class=\"text-dark border-bottom pb-2 mt-5 mb-4\">Image du Produit</h5>
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "image", [], "any", false, false, false, 84), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "texteAlternatif", [], "any", false, false, false, 87), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "titreImage", [], "any", false, false, false, 90), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "descriptionImage", [], "any", false, false, false, 93), 'row', ["label_attr" => ["class" => "text-dark"], "attr" => ["class" => "form-control bg-white text-dark"]]);
        yield "
                    </div>
                </div>

                <!-- Section: Boutons -->
                <div class=\"d-flex justify-content-center mt-5\">
                    <button type=\"submit\" class=\"btn btn-danger px-5 py-2 rounded-pill\">Enregistrer</button>
                    <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" class=\"btn btn-outline-dark ms-3 px-5 py-2 rounded-pill\">Retour à la Liste</a>
                </div>

                ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
    ";
        // line 107
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 179
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        // line 108
        yield "        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const marqueSelect = document.querySelector('.select-marque');
                const modeleSelect = document.querySelector('.select-modele');
                const motorisationSelect = document.querySelector('.select-motorisations');

                // Événement pour le changement de marque
                marqueSelect.addEventListener('change', async (event) => {
                    console.log('Changement détecté dans le champ Marque.');
                    const marqueId = event.target.value;

                    // Réinitialiser les listes déroulantes dépendantes
                    modeleSelect.innerHTML = '<option value=\"\">Sélectionnez un modèle</option>';
                    motorisationSelect.innerHTML = '<option value=\"\">Sélectionnez des motorisations</option>';

                    if (marqueId) {
                        try {
                            // Requête à l'API pour récupérer les modèles
                            const response = await fetch(`/modele/api/models?marque=\${marqueId}`);
                            const models = await response.json();
                            console.log('Données reçues de l\\'API pour les modèles :', models);

                            // Ajout des options à la liste déroulante des modèles
                            models.forEach(model => {
                                if (!Array.from(modeleSelect.options).some(option => option.value == model.id)) {
                                    const option = document.createElement('option');
                                    option.value = model.id;
                                    option.textContent = model.nom;
                                    modeleSelect.appendChild(option);
                                }
                            });
                        } catch (error) {
                            console.error('Erreur lors du chargement des modèles :', error);
                        }
                    }
                });

                // Événement pour le changement de modèle
                modeleSelect.addEventListener('change', async (event) => {
                    const modeleId = event.target.value;

                    // Réinitialisation de la liste des motorisations à chaque changement de modèle
                    motorisationSelect.innerHTML = '<option value=\"\">Sélectionnez des motorisations</option>';

                    if (modeleId) {
                        try {
                            // Requête à l'API pour récupérer les motorisations associées au modèle sélectionné
                            const response = await fetch(`/motorisation/api/motorisations?modele=\${modeleId}`);
                            const motorisations = await response.json();

                            // On garde une trace des motorisations déjà ajoutées pour éviter les doublons
                            const existingOptions = Array.from(motorisationSelect.options).map(option => option.value);

                            motorisations.forEach(motorisation => {
                                // Vérifier si la motorisation est déjà présente dans la liste
                                if (!existingOptions.includes(motorisation.id.toString())) {
                                    const option = document.createElement('option');
                                    option.value = motorisation.id;
                                    option.textContent = motorisation.nom;
                                    motorisationSelect.appendChild(option);
                                }
                            });
                        } catch (error) {
                            // En cas d'erreur lors de la récupération des motorisations
                            console.error('Erreur lors du chargement des motorisations :', error);
                        }
                    }
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
        return "product/new.html.twig";
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
        return array (  300 => 108,  287 => 107,  275 => 179,  273 => 107,  266 => 103,  260 => 100,  250 => 93,  244 => 90,  238 => 87,  232 => 84,  221 => 76,  215 => 73,  209 => 70,  203 => 67,  197 => 64,  191 => 61,  185 => 58,  173 => 49,  167 => 46,  161 => 43,  148 => 33,  142 => 30,  136 => 27,  130 => 24,  124 => 21,  118 => 18,  109 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un Nouveau Produit{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"card shadow-lg border-0\">
            <div class=\"card-header bg-dark text-white text-center py-3\">
                <h2>Créer un Nouveau Produit</h2>
            </div>
            <div class=\"card-body\" style=\"background-color: #f8f9fa; color: #343a40;\">
                {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'class': 'p-4'}}) }}

                <!-- Section: Détails du Produit -->
                <h5 class=\"text-dark border-bottom pb-2 mb-4\">Détails du Produit</h5>
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        {{ form_row(form.nom, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.prix, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-12\">
                        {{ form_row(form.description, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.quantiteEnStock, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.dateAjout, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.subCategory, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                </div>

                <!-- Section: Vehicule -->
                <h5 class=\"text-dark border-bottom pb-2 mt-5 mb-4\">Détails Vehicule</h5>

                <div class=\"row g-4\">

                    <div class=\"col-md-6\">
                        {{ form_row(form.marque, {'attr': {'class': 'form-control select-marque'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.modele, {'attr': {'class': 'form-control select-modele'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.motorisations, {'attr': {'class': 'form-control select-motorisations'}}) }}
                    </div>

                </div>

                <!-- Section: Détails SEO -->
                <h5 class=\"text-dark border-bottom pb-2 mt-5 mb-4\">Détails SEO</h5>
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        {{ form_row(form.seoTitre, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.seoDescription, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.slug, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.motsCles, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-12\">
                        {{ form_row(form.textePromotion, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.indexable, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-check-input'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.canonicalUrl, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                </div>

                <!-- Section: Image du Produit -->
                <h5 class=\"text-dark border-bottom pb-2 mt-5 mb-4\">Image du Produit</h5>
                <div class=\"row g-4\">
                    <div class=\"col-md-6\">
                        {{ form_row(form.image, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.texteAlternatif, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.titreImage, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(form.descriptionImage, {'label_attr': {'class': 'text-dark'}, 'attr': {'class': 'form-control bg-white text-dark'}}) }}
                    </div>
                </div>

                <!-- Section: Boutons -->
                <div class=\"d-flex justify-content-center mt-5\">
                    <button type=\"submit\" class=\"btn btn-danger px-5 py-2 rounded-pill\">Enregistrer</button>
                    <a href=\"{{ path('app_product_index') }}\" class=\"btn btn-outline-dark ms-3 px-5 py-2 rounded-pill\">Retour à la Liste</a>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
    {% block javascripts %}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const marqueSelect = document.querySelector('.select-marque');
                const modeleSelect = document.querySelector('.select-modele');
                const motorisationSelect = document.querySelector('.select-motorisations');

                // Événement pour le changement de marque
                marqueSelect.addEventListener('change', async (event) => {
                    console.log('Changement détecté dans le champ Marque.');
                    const marqueId = event.target.value;

                    // Réinitialiser les listes déroulantes dépendantes
                    modeleSelect.innerHTML = '<option value=\"\">Sélectionnez un modèle</option>';
                    motorisationSelect.innerHTML = '<option value=\"\">Sélectionnez des motorisations</option>';

                    if (marqueId) {
                        try {
                            // Requête à l'API pour récupérer les modèles
                            const response = await fetch(`/modele/api/models?marque=\${marqueId}`);
                            const models = await response.json();
                            console.log('Données reçues de l\\'API pour les modèles :', models);

                            // Ajout des options à la liste déroulante des modèles
                            models.forEach(model => {
                                if (!Array.from(modeleSelect.options).some(option => option.value == model.id)) {
                                    const option = document.createElement('option');
                                    option.value = model.id;
                                    option.textContent = model.nom;
                                    modeleSelect.appendChild(option);
                                }
                            });
                        } catch (error) {
                            console.error('Erreur lors du chargement des modèles :', error);
                        }
                    }
                });

                // Événement pour le changement de modèle
                modeleSelect.addEventListener('change', async (event) => {
                    const modeleId = event.target.value;

                    // Réinitialisation de la liste des motorisations à chaque changement de modèle
                    motorisationSelect.innerHTML = '<option value=\"\">Sélectionnez des motorisations</option>';

                    if (modeleId) {
                        try {
                            // Requête à l'API pour récupérer les motorisations associées au modèle sélectionné
                            const response = await fetch(`/motorisation/api/motorisations?modele=\${modeleId}`);
                            const motorisations = await response.json();

                            // On garde une trace des motorisations déjà ajoutées pour éviter les doublons
                            const existingOptions = Array.from(motorisationSelect.options).map(option => option.value);

                            motorisations.forEach(motorisation => {
                                // Vérifier si la motorisation est déjà présente dans la liste
                                if (!existingOptions.includes(motorisation.id.toString())) {
                                    const option = document.createElement('option');
                                    option.value = motorisation.id;
                                    option.textContent = motorisation.nom;
                                    motorisationSelect.appendChild(option);
                                }
                            });
                        } catch (error) {
                            // En cas d'erreur lors de la récupération des motorisations
                            console.error('Erreur lors du chargement des motorisations :', error);
                        }
                    }
                });
            });
        </script>
    {% endblock %}

{% endblock %}
", "product/new.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\product\\new.html.twig");
    }
}
