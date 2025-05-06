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

/* appointment/new.html.twig */
class __TwigTemplate_6a9ee94739492aa5a19106e7b069e298 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/new.html.twig", 1);
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

        yield "Make an Appointment";
        
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
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
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
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\">Review</a></li>
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
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) ? ("espace_client") : ("app_login")));
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
    <!-- Page Preloader -->
    <div class=\"preloader\" id=\"kar-theme-preloader\">
        <div class=\"preloader-wapper\">
            <div>
                <div class=\"spinner-loader\">
                    <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/loader.svg"), "html", null, true);
        yield "\" alt=\"loader\">
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header id=\"zr-theme-menu\" class=\"zr-theme-menu-header-navber-area\">
        <!-- Your header code remains unchanged -->
    </header>

    <!-- Breadcrumb -->
    <div class=\"single-page\">
        <div class=\"container\">
            <nav aria-label=\"breadcrumb single-page\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Appointment Section -->
    <section id=\"contact\" class=\"contact-area bg-grey section-padding\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"section-title\">
                        <h2>Make an Appointment</h2>
                        <h5>We Make Car Repairs Easy, Book Your Car Repair Service</h5>

                    </div>
                </div>
            </div>
            <!-- Ligne contenant le bouton \"Ajouter Voiture\" -->
            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_new");
        yield "\" class=\"btn btn-ajout\">Ajouter Voiture</a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"form-container-box\">
                        <!-- Start Symfony Form -->
                        ";
        // line 128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form form"]]);
        yield "
                        <div class=\"controls\">
                            <div class=\"row\">

                                <div class=\"col-md-4\">
                                    <div class=\"form-group\">
                                        ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "name", [], "any", false, false, false, 134), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Name*"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-group\">
                                        ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "email", [], "any", false, false, false, 139), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email*"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-group\">
                                        ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "phone", [], "any", false, false, false, 144), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Phone*"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "date", [], "any", false, false, false, 149), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Date*"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "service", [], "any", false, false, false, 154), 'row', ["attr" => ["class" => "form-control custom-select"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "message", [], "any", false, false, false, 159), 'row', ["attr" => ["class" => "form-control", "rows" => 6, "placeholder" => "Write Your Message*"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "vehicule", [], "any", false, false, false, 164), 'row', ["attr" => ["class" => "form-control custom-select"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"col-md-12 text-center\">
                                    <button type=\"submit\" class=\"button\" data-text=\"Send Message\">Make an Appointment</button>
                                </div>
                            </div>
                        </div>
                        ";
        // line 172
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), 'form_end');
        yield "
                        <!-- End Symfony Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id=\"footer\" class=\"footer-section\">
        <!-- Your footer code remains unchanged -->
    </footer>
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
        return "appointment/new.html.twig";
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
        return array (  331 => 172,  320 => 164,  312 => 159,  304 => 154,  296 => 149,  288 => 144,  280 => 139,  272 => 134,  263 => 128,  253 => 121,  227 => 98,  208 => 82,  187 => 64,  179 => 59,  175 => 58,  166 => 52,  162 => 51,  148 => 40,  144 => 39,  135 => 33,  131 => 32,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Make an Appointment{% endblock %}

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
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"{{ path('app_services') }}\">Services</a></li>
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
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"{{ path('app_testimonial') }}\">Review</a></li>
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
    <!-- Page Preloader -->
    <div class=\"preloader\" id=\"kar-theme-preloader\">
        <div class=\"preloader-wapper\">
            <div>
                <div class=\"spinner-loader\">
                    <img src=\"{{ asset('assets/images/loader.svg') }}\" alt=\"loader\">
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header id=\"zr-theme-menu\" class=\"zr-theme-menu-header-navber-area\">
        <!-- Your header code remains unchanged -->
    </header>

    <!-- Breadcrumb -->
    <div class=\"single-page\">
        <div class=\"container\">
            <nav aria-label=\"breadcrumb single-page\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_page') }}\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Appointment Section -->
    <section id=\"contact\" class=\"contact-area bg-grey section-padding\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"section-title\">
                        <h2>Make an Appointment</h2>
                        <h5>We Make Car Repairs Easy, Book Your Car Repair Service</h5>

                    </div>
                </div>
            </div>
            <!-- Ligne contenant le bouton \"Ajouter Voiture\" -->
            <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                    <a href=\"{{ path('app_vehicle_new') }}\" class=\"btn btn-ajout\">Ajouter Voiture</a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"form-container-box\">
                        <!-- Start Symfony Form -->
                        {{ form_start(form, {'attr': {'class': 'contact-form form'}}) }}
                        <div class=\"controls\">
                            <div class=\"row\">

                                <div class=\"col-md-4\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.name, {'attr': {'class': 'form-control', 'placeholder': 'Name*'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email*'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.phone, {'attr': {'class': 'form-control', 'placeholder': 'Phone*'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.date, {'attr': {'class': 'form-control', 'placeholder': 'Date*'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.service, {'attr': {'class': 'form-control custom-select'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.message, {'attr': {'class': 'form-control', 'rows': 6, 'placeholder': 'Write Your Message*'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.vehicule, {'attr': {'class': 'form-control custom-select'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-md-12 text-center\">
                                    <button type=\"submit\" class=\"button\" data-text=\"Send Message\">Make an Appointment</button>
                                </div>
                            </div>
                        </div>
                        {{ form_end(form) }}
                        <!-- End Symfony Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id=\"footer\" class=\"footer-section\">
        <!-- Your footer code remains unchanged -->
    </footer>
{% endblock %}
", "appointment/new.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\appointment\\new.html.twig");
    }
}
