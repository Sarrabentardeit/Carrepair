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

/* product/_form.html.twig */
class __TwigTemplate_9d4e8c10f2aca1bef0bcf1c2e2a6d8ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        // line 1
        yield "<div class=\"container mt-5\">
    <div class=\"card shadow-lg border-0\">
        <div class=\"card-header bg-danger  text-white\">
            <h3 class=\"card-title text-center mb-0\">Les Produits </h3>
        </div>
        <div class=\"card-body\">
            ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

            <!-- Informations générales -->
            <h4 class=\"text-danger\">Informations Générales</h4>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Nom du Produit"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Exemple : Huile moteur"]]);
        yield "
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Prix (DT)"]);
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prix", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Exemple : 120.00"]]);
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prix", [], "any", false, false, false, 21), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "quantiteEnStock", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Quantité en Stock"]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "quantiteEnStock", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Exemple : 50"]]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "quantiteEnStock", [], "any", false, false, false, 28), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateAjout", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Date d'Ajout"]);
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateAjout", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "dateAjout", [], "any", false, false, false, 33), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
            </div>
            <div class=\"mb-3\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Description du Produit"]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "rows" => "4", "placeholder" => "Description détaillée du produit"]]);
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
            </div>

            <!-- Informations SEO 1-->
            <h4 class=\"mt-4 text-danger\">Informations SEO</h4>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "seoTitre", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Titre SEO"]);
        yield "
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "seoTitre", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre optimisé pour le SEO"]]);
        yield "
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "seoTitre", [], "any", false, false, false, 49), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "seoDescription", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Meta Description"]);
        yield "
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "seoDescription", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description optimisée pour le SEO"]]);
        yield "
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "seoDescription", [], "any", false, false, false, 54), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "slug", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Slug URL"]);
        yield "
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "slug", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Exemple : huile-moteur-5w30"]]);
        yield "
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "slug", [], "any", false, false, false, 61), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "motsCles", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Mots-clés (séparés par des virgules)"]);
        yield "
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "motsCles", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Exemple : huile, moteur, vidange"]]);
        yield "
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "motsCles", [], "any", false, false, false, 66), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
            </div>

            <!-- Informations Image -->
            <h4 class=\"mt-4 text-danger\">Image du Produit</h4>
            <hr>
            <div class=\"mb-3\">
                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "image", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Télécharger une Image"]);
        yield "
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "image", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "image", [], "any", false, false, false, 76), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "nomImage", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Nom de l'image"]);
        yield "
                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "nomImage", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Exemple : huile_moteur.jpg"]]);
        yield "
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "nomImage", [], "any", false, false, false, 82), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "texteAlternatif", [], "any", false, false, false, 85), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Texte alternatif de l'image"]);
        yield "
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "texteAlternatif", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Texte alternatif pour SEO"]]);
        yield "
                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "texteAlternatif", [], "any", false, false, false, 87), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "titreImage", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Titre de l'image"]);
        yield "
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "titreImage", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre associé à l'image"]]);
        yield "
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "titreImage", [], "any", false, false, false, 94), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "descriptionImage", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Description de l'image"]);
        yield "
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "descriptionImage", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description détaillée de l'image"]]);
        yield "
                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "descriptionImage", [], "any", false, false, false, 99), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
            </div>
            <!-- Informations SEO 2-->
            <h4 class=\"mt-4 text-danger\">Options de Promotion et Référencement</h4>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "textePromotion", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Texte Promotionnel"]);
        yield "
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "textePromotion", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Texte promotionnel"]]);
        yield "
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "textePromotion", [], "any", false, false, false, 109), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "indexable", [], "any", false, false, false, 112), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Indexable par les moteurs de recherche"]);
        yield "
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "indexable", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                    ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "indexable", [], "any", false, false, false, 114), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
                <div class=\"col-md-12 mb-3\">
                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "canonicalUrl", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "URL Canonique"]);
        yield "
                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "canonicalUrl", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "https://example.com/produit"]]);
        yield "
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "canonicalUrl", [], "any", false, false, false, 119), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                </div>
            </div>

            <!-- Boutons -->
            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-arrow-left\"></i> Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i class=\"bi bi-save\"></i> Enregistrer
                </button>
            </div>

            ";
        // line 133
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
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
        return "product/_form.html.twig";
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
        return array (  341 => 133,  330 => 125,  321 => 119,  317 => 118,  313 => 117,  307 => 114,  303 => 113,  299 => 112,  293 => 109,  289 => 108,  285 => 107,  274 => 99,  270 => 98,  266 => 97,  260 => 94,  256 => 93,  252 => 92,  244 => 87,  240 => 86,  236 => 85,  230 => 82,  226 => 81,  222 => 80,  215 => 76,  211 => 75,  207 => 74,  196 => 66,  192 => 65,  188 => 64,  182 => 61,  178 => 60,  174 => 59,  166 => 54,  162 => 53,  158 => 52,  152 => 49,  148 => 48,  144 => 47,  133 => 39,  129 => 38,  125 => 37,  118 => 33,  114 => 32,  110 => 31,  104 => 28,  100 => 27,  96 => 26,  88 => 21,  84 => 20,  80 => 19,  74 => 16,  70 => 15,  66 => 14,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container mt-5\">
    <div class=\"card shadow-lg border-0\">
        <div class=\"card-header bg-danger  text-white\">
            <h3 class=\"card-title text-center mb-0\">Les Produits </h3>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

            <!-- Informations générales -->
            <h4 class=\"text-danger\">Informations Générales</h4>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.nom, 'Nom du Produit', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Exemple : Huile moteur'}}) }}
                    {{ form_errors(form.nom, {'attr': {'class': 'text-danger'}}) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.prix, 'Prix (DT)', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Exemple : 120.00'}}) }}
                    {{ form_errors(form.prix, {'attr': {'class': 'text-danger'}}) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.quantiteEnStock, 'Quantité en Stock', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.quantiteEnStock, {'attr': {'class': 'form-control', 'placeholder': 'Exemple : 50'}}) }}
                    {{ form_errors(form.quantiteEnStock, {'attr': {'class': 'text-danger'}}) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.dateAjout, 'Date d\\'Ajout', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.dateAjout, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.dateAjout, {'attr': {'class': 'text-danger'}}) }}
                </div>
            </div>
            <div class=\"mb-3\">
                {{ form_label(form.description, 'Description du Produit', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': '4', 'placeholder': 'Description détaillée du produit'}}) }}
                {{ form_errors(form.description, {'attr': {'class': 'text-danger'}}) }}
            </div>

            <!-- Informations SEO 1-->
            <h4 class=\"mt-4 text-danger\">Informations SEO</h4>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.seoTitre, 'Titre SEO', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.seoTitre, {'attr': {'class': 'form-control', 'placeholder': 'Titre optimisé pour le SEO'}}) }}
                    {{ form_errors(form.seoTitre, {'attr': {'class': 'text-danger'}}) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.seoDescription, 'Meta Description', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.seoDescription, {'attr': {'class': 'form-control', 'placeholder': 'Description optimisée pour le SEO'}}) }}
                    {{ form_errors(form.seoDescription, {'attr': {'class': 'text-danger'}}) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.slug, 'Slug URL', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.slug, {'attr': {'class': 'form-control', 'placeholder': 'Exemple : huile-moteur-5w30'}}) }}
                    {{ form_errors(form.slug, {'attr': {'class': 'text-danger'}}) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.motsCles, 'Mots-clés (séparés par des virgules)', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.motsCles, {'attr': {'class': 'form-control', 'placeholder': 'Exemple : huile, moteur, vidange'}}) }}
                    {{ form_errors(form.motsCles, {'attr': {'class': 'text-danger'}}) }}
                </div>
            </div>

            <!-- Informations Image -->
            <h4 class=\"mt-4 text-danger\">Image du Produit</h4>
            <hr>
            <div class=\"mb-3\">
                {{ form_label(form.image, 'Télécharger une Image', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.image, {'attr': {'class': 'text-danger'}}) }}
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.nomImage, 'Nom de l\\'image', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.nomImage, {'attr': {'class': 'form-control', 'placeholder': 'Exemple : huile_moteur.jpg'}}) }}
                    {{ form_errors(form.nomImage, {'attr': {'class': 'text-danger'}}) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.texteAlternatif, 'Texte alternatif de l\\'image', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.texteAlternatif, {'attr': {'class': 'form-control', 'placeholder': 'Texte alternatif pour SEO'}}) }}
                    {{ form_errors(form.texteAlternatif, {'attr': {'class': 'text-danger'}}) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.titreImage, 'Titre de l\\'image', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.titreImage, {'attr': {'class': 'form-control', 'placeholder': 'Titre associé à l\\'image'}}) }}
                    {{ form_errors(form.titreImage, {'attr': {'class': 'text-danger'}}) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.descriptionImage, 'Description de l\\'image', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.descriptionImage, {'attr': {'class': 'form-control', 'placeholder': 'Description détaillée de l\\'image'}}) }}
                    {{ form_errors(form.descriptionImage, {'attr': {'class': 'text-danger'}}) }}
                </div>
            </div>
            <!-- Informations SEO 2-->
            <h4 class=\"mt-4 text-danger\">Options de Promotion et Référencement</h4>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.textePromotion, 'Texte Promotionnel', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.textePromotion, {'attr': {'class': 'form-control', 'placeholder': 'Texte promotionnel'}}) }}
                    {{ form_errors(form.textePromotion, {'attr': {'class': 'text-danger'}}) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.indexable, 'Indexable par les moteurs de recherche', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.indexable, {'attr': {'class': 'form-check-input'}}) }}
                    {{ form_errors(form.indexable, {'attr': {'class': 'text-danger'}}) }}
                </div>
                <div class=\"col-md-12 mb-3\">
                    {{ form_label(form.canonicalUrl, 'URL Canonique', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.canonicalUrl, {'attr': {'class': 'form-control', 'placeholder': 'https://example.com/produit'}}) }}
                    {{ form_errors(form.canonicalUrl, {'attr': {'class': 'text-danger'}}) }}
                </div>
            </div>

            <!-- Boutons -->
            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"{{ path('app_product_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-arrow-left\"></i> Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-danger\">
                    <i class=\"bi bi-save\"></i> Enregistrer
                </button>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>
", "product/_form.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\product\\_form.html.twig");
    }
}
