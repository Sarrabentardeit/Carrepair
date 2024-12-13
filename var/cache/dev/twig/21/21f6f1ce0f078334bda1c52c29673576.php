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

/* vehicle/new.html.twig */
class __TwigTemplate_be9be67fa71661a5ea7f48982eef5e3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vehicle/new.html.twig", 1);
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

        yield "Create New Vehicle";
        
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
        yield "    <!-- Start Header Navbar Area -->
    <header id=\"zr-theme-menu\" class=\"zr-theme-menu-header-navber-area\">
        <div class=\"nav-top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <ul class=\"top-social\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"call-to-action\">
                            <p><i class=\"fa fa-map\"></i> 11 West Town, PB0 12345, United States</p>
                            <p><i class=\"fa fa-phone\"></i> Phone: +1 1234 56 780</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class=\"navbar navbar-b navbar-trans navbar-expand-lg\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand js-scroll\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\">
                    <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" class=\"white-logo\" alt=\"logo\">
                    <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-black.png"), "html", null, true);
        yield "\" class=\"black-logo\" alt=\"logo\">
                </a>
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span></span>  <span></span>  <span></span>
                </button>
                <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarDefault\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll active\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\">Home</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"services.html\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"products.html\">Products</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"packages.html\">Packages</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Menu </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                                <li><a href=\"gallery.html\">Gallery</a></li>
                                <li><a href=\"team.html\">Team</a></li>
                                <li><a href=\"page.html\">Page</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"testimonials.html\">Review</a></li>
                        <li class=\"nav-item book-now\"><a class=\"nav-link js-scroll\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_new");
        yield "\"><i class=\"fa fa-calendar-check-o\"></i> Book Appointment</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"contact.html\">Contact</a></li>
                        <!-- Add Create Account and Login buttons -->
                        <!-- Boutons \"Créer un compte\" et \"Se connecter\" -->
                        <li class=\"nav-item ms-auto\">
                            <div class=\"d-flex\">
                                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-custom me-2\">Créer un compte</a>
                                <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-custom\">Se connecter</a>
                            </div>
                        </li>

                        <!-- Icône Espace Client -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center\" href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65)) ? ("espace_client") : ("app_login")));
        yield "\" id=\"espace-client-link\">
                                <i class=\"fa fa-user-circle fa-2x\"></i>
                                <span class=\"espace-client-text ms-2\">Mon Espace</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Navbar Area -->

    <!-- Breadcrumb -->
    <div class=\"single-page\">
        <div class=\"container\">
            <nav aria-label=\"breadcrumb single-page\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Create New Vehicle</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <section id=\"contact\" class=\"contact-area bg-grey section-padding\">
        <div class=\"container mt-4\">
            <form method=\"post\" class=\"vehicle-form\">
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"marque\" class=\"form-label\">Marque</label>
                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "marque", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez la marque"]]);
        yield "
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"modele\" class=\"form-label\">Modèle</label>
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "modele", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le modèle"]]);
        yield "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"motorisation\" class=\"form-label\">Motorisation</label>
                        ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "motorisation", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type de motorisation"]]);
        yield "
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"immatriculation\" class=\"form-label\">Immatriculation</label>
                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "immatriculation", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro d'immatriculation"]]);
        yield "
                    </div>
                </div>

                <div class=\"text-center mt-4\">
                    <button class=\"btn btn-custom\" type=\"submit\">Enregistrer</button>
                    <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_index");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                </div>

                ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'rest');
        yield "
            </form>
        </div>

    </section>

    <!-- Footer -->
    <footer id=\"footer\" class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-content\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"logo d-flex align-items-center\">
                                    <img src=\"assets/images/logo.png\" class=\"white-logo\" alt=\"logo\">
                                </a>
                            </div>
                            <div class=\"footer-text\">
                                <p>At CarShine, we're committed to earning your trust by providing the highest quality car repair services at a fair price.</p>
                            </div>

                            <div class=\"footer-social-icon\">
                                <a href=\"#\"><i class=\"fa fa-facebook facebook-bg\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter twitter-bg\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-google google-bg\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\"><i class=\"fa fa-angle-double-right\"
                                                                        aria-hidden=\"true\"></i>Home</a></li>
                                <li><a href=\"about.html\"><i class=\"fa fa-angle-double-right\"
                                                            aria-hidden=\"true\"></i>About</a></li>
                                <li><a href=\"services.html\"><i class=\"fa fa-angle-double-right\"
                                                               aria-hidden=\"true\"></i>Services</a></li>
                                <li><a href=\"gallery.html\"><i class=\"fa fa-angle-double-right\"
                                                              aria-hidden=\"true\"></i>Gallery</a></li>
                                <li><a href=\"contact.html\"><i class=\"fa fa-angle-double-right\"
                                                              aria-hidden=\"true\"></i>Contact</a></li>
                                <li><a href=\"team.html\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>Our
                                        Team</a></li>
                                <li><a href=\"testimonials.html\"><i class=\"fa fa-angle-double-right\"
                                                                   aria-hidden=\"true\"></i>Our Reviews</a></li>
                                <li><a href=\"packages.html\"><i class=\"fa fa-angle-double-right\"
                                                               aria-hidden=\"true\"></i>Packages</a></li>
                                <li><a href=\"products.html\"><i class=\"fa fa-angle-double-right\"
                                                               aria-hidden=\"true\"></i>Products</a></li>
                                <li><a href=\"blogs.html\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>Our
                                        News</a></li>
                                <li><a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_new");
        yield "\"><i class=\"fa fa-angle-double-right\"
                                                                                   aria-hidden=\"true\"></i>Book Appointment</a></li>
                                <li><a href=\"contact.html\"><i class=\"fa fa-angle-double-right\"
                                                              aria-hidden=\"true\"></i>Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <h3>Contact:</h3>
                            </div>
                            <div class=\"contact-info\">
                                <h6>Address:</h6>
                                <p><i class=\"fa fa-map\"></i> 11 West Town, PB 12345, United States</p>
                                <!-- Change  'Wall%20Street,%20NYC' with your own business name -->
                                <p><a href=\"https://www.google.com/maps/dir//Wall%20Street,%20NYC\" target=\"_blank\">Get Directions</a></p>
                            </div>
                            <div class=\"contact-info\">
                                <h6>Phone:</h6>
                                <p><i class=\"fa fa-phone\"></i> +1 1234 56 789</p>
                                <p><i class=\"fa fa-phone\"></i> +1 1234 56 780</p>
                            </div>
                            <div class=\"contact-info\">
                                <h6>Email:</h6>
                                <p><i class=\"fa fa-envelope\"></i> info@example.com</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-8 col-lg-8 col-md-6 mb-50\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 text-left text-lg-left\">
                        <div class=\"copyright-text\">
                            <p>CarShine - Auto Repair Service © 2023 - Designed by Zr Themes.</p>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 d-none d-lg-block\">
                        <div class=\"footer-menu text-right\">
                            <ul>
                                <li><a href=\"page.html\">Terms & Conditions</a></li>
                                <li><a href=\"page.html\">Privacy Policy</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Back to Top Start -->
    <div class=\"back-to-top\">
        <i class=\"fa fa-caret-up\"></i><i class=\"fa fa-caret-up\"></i>
    </div>
    <!-- Back to Top End -->
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
        return "vehicle/new.html.twig";
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
        return array (  323 => 176,  300 => 156,  276 => 135,  259 => 121,  253 => 118,  244 => 112,  237 => 108,  227 => 101,  220 => 97,  203 => 83,  182 => 65,  173 => 59,  169 => 58,  160 => 52,  144 => 39,  135 => 33,  131 => 32,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create New Vehicle{% endblock %}

{% block body %}
    <!-- Start Header Navbar Area -->
    <header id=\"zr-theme-menu\" class=\"zr-theme-menu-header-navber-area\">
        <div class=\"nav-top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <ul class=\"top-social\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"call-to-action\">
                            <p><i class=\"fa fa-map\"></i> 11 West Town, PB0 12345, United States</p>
                            <p><i class=\"fa fa-phone\"></i> Phone: +1 1234 56 780</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class=\"navbar navbar-b navbar-trans navbar-expand-lg\" id=\"mainNav\">
            <div class=\"container\">
                <a class=\"navbar-brand js-scroll\" href=\"{{ path('app_page') }}\">
                    <img src=\"{{ asset('assets/images/logo.png') }}\" class=\"white-logo\" alt=\"logo\">
                    <img src=\"{{ asset('assets/images/logo-black.png') }}\" class=\"black-logo\" alt=\"logo\">
                </a>
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span></span>  <span></span>  <span></span>
                </button>
                <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarDefault\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll active\" href=\"{{ path('app_page') }}\">Home</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"services.html\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"products.html\">Products</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"packages.html\">Packages</a></li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Menu </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                                <li><a href=\"gallery.html\">Gallery</a></li>
                                <li><a href=\"team.html\">Team</a></li>
                                <li><a href=\"page.html\">Page</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"testimonials.html\">Review</a></li>
                        <li class=\"nav-item book-now\"><a class=\"nav-link js-scroll\" href=\"{{ path('app_appointment_new') }}\"><i class=\"fa fa-calendar-check-o\"></i> Book Appointment</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"contact.html\">Contact</a></li>
                        <!-- Add Create Account and Login buttons -->
                        <!-- Boutons \"Créer un compte\" et \"Se connecter\" -->
                        <li class=\"nav-item ms-auto\">
                            <div class=\"d-flex\">
                                <a href=\"{{ path('app_register') }}\" class=\"btn btn-custom me-2\">Créer un compte</a>
                                <a href=\"{{ path('app_login') }}\" class=\"btn btn-custom\">Se connecter</a>
                            </div>
                        </li>

                        <!-- Icône Espace Client -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center\" href=\"{{ path(app.user ? 'espace_client' : 'app_login') }}\" id=\"espace-client-link\">
                                <i class=\"fa fa-user-circle fa-2x\"></i>
                                <span class=\"espace-client-text ms-2\">Mon Espace</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Navbar Area -->

    <!-- Breadcrumb -->
    <div class=\"single-page\">
        <div class=\"container\">
            <nav aria-label=\"breadcrumb single-page\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_page') }}\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Create New Vehicle</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <section id=\"contact\" class=\"contact-area bg-grey section-padding\">
        <div class=\"container mt-4\">
            <form method=\"post\" class=\"vehicle-form\">
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"marque\" class=\"form-label\">Marque</label>
                        {{ form_widget(form.marque, {'attr': {'class': 'form-control', 'placeholder': 'Entrez la marque'}}) }}
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"modele\" class=\"form-label\">Modèle</label>
                        {{ form_widget(form.modele, {'attr': {'class': 'form-control', 'placeholder': 'Entrez le modèle'}}) }}
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"motorisation\" class=\"form-label\">Motorisation</label>
                        {{ form_widget(form.motorisation, {'attr': {'class': 'form-control', 'placeholder': 'Type de motorisation'}}) }}
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"immatriculation\" class=\"form-label\">Immatriculation</label>
                        {{ form_widget(form.immatriculation, {'attr': {'class': 'form-control', 'placeholder': 'Numéro d\\'immatriculation'}}) }}
                    </div>
                </div>

                <div class=\"text-center mt-4\">
                    <button class=\"btn btn-custom\" type=\"submit\">Enregistrer</button>
                    <a href=\"{{ path('app_vehicle_index') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                </div>

                {{ form_rest(form) }}
            </form>
        </div>

    </section>

    <!-- Footer -->
    <footer id=\"footer\" class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-content\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <a href=\"{{ path('app_page') }}\" class=\"logo d-flex align-items-center\">
                                    <img src=\"assets/images/logo.png\" class=\"white-logo\" alt=\"logo\">
                                </a>
                            </div>
                            <div class=\"footer-text\">
                                <p>At CarShine, we're committed to earning your trust by providing the highest quality car repair services at a fair price.</p>
                            </div>

                            <div class=\"footer-social-icon\">
                                <a href=\"#\"><i class=\"fa fa-facebook facebook-bg\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter twitter-bg\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-google google-bg\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href=\"{{ path('app_page') }}\"><i class=\"fa fa-angle-double-right\"
                                                                        aria-hidden=\"true\"></i>Home</a></li>
                                <li><a href=\"about.html\"><i class=\"fa fa-angle-double-right\"
                                                            aria-hidden=\"true\"></i>About</a></li>
                                <li><a href=\"services.html\"><i class=\"fa fa-angle-double-right\"
                                                               aria-hidden=\"true\"></i>Services</a></li>
                                <li><a href=\"gallery.html\"><i class=\"fa fa-angle-double-right\"
                                                              aria-hidden=\"true\"></i>Gallery</a></li>
                                <li><a href=\"contact.html\"><i class=\"fa fa-angle-double-right\"
                                                              aria-hidden=\"true\"></i>Contact</a></li>
                                <li><a href=\"team.html\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>Our
                                        Team</a></li>
                                <li><a href=\"testimonials.html\"><i class=\"fa fa-angle-double-right\"
                                                                   aria-hidden=\"true\"></i>Our Reviews</a></li>
                                <li><a href=\"packages.html\"><i class=\"fa fa-angle-double-right\"
                                                               aria-hidden=\"true\"></i>Packages</a></li>
                                <li><a href=\"products.html\"><i class=\"fa fa-angle-double-right\"
                                                               aria-hidden=\"true\"></i>Products</a></li>
                                <li><a href=\"blogs.html\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>Our
                                        News</a></li>
                                <li><a href=\"{{ path('app_appointment_new') }}\"><i class=\"fa fa-angle-double-right\"
                                                                                   aria-hidden=\"true\"></i>Book Appointment</a></li>
                                <li><a href=\"contact.html\"><i class=\"fa fa-angle-double-right\"
                                                              aria-hidden=\"true\"></i>Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <h3>Contact:</h3>
                            </div>
                            <div class=\"contact-info\">
                                <h6>Address:</h6>
                                <p><i class=\"fa fa-map\"></i> 11 West Town, PB 12345, United States</p>
                                <!-- Change  'Wall%20Street,%20NYC' with your own business name -->
                                <p><a href=\"https://www.google.com/maps/dir//Wall%20Street,%20NYC\" target=\"_blank\">Get Directions</a></p>
                            </div>
                            <div class=\"contact-info\">
                                <h6>Phone:</h6>
                                <p><i class=\"fa fa-phone\"></i> +1 1234 56 789</p>
                                <p><i class=\"fa fa-phone\"></i> +1 1234 56 780</p>
                            </div>
                            <div class=\"contact-info\">
                                <h6>Email:</h6>
                                <p><i class=\"fa fa-envelope\"></i> info@example.com</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-8 col-lg-8 col-md-6 mb-50\">
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-6 text-left text-lg-left\">
                        <div class=\"copyright-text\">
                            <p>CarShine - Auto Repair Service © 2023 - Designed by Zr Themes.</p>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6 d-none d-lg-block\">
                        <div class=\"footer-menu text-right\">
                            <ul>
                                <li><a href=\"page.html\">Terms & Conditions</a></li>
                                <li><a href=\"page.html\">Privacy Policy</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Back to Top Start -->
    <div class=\"back-to-top\">
        <i class=\"fa fa-caret-up\"></i><i class=\"fa fa-caret-up\"></i>
    </div>
    <!-- Back to Top End -->
{% endblock %}
", "vehicle/new.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\vehicle\\new.html.twig");
    }
}
