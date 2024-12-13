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

/* testimonial/testimonials.html.twig */
class __TwigTemplate_e053a3e56ab0ad544d464c0c6fce3425 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "testimonial/testimonials.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "testimonial/testimonials.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "testimonial/testimonials.html.twig", 1);
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

        yield "Testimonials";
        
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
        yield "    <!-- Start Page Preloader Area -->
    <div class=\"preloader\" id=\"kar-theme-preloader\">
        <div class=\"preloader-wapper\">
            <div>
                <div class=\"spinner-loader\">
                    <img src=\"assets/images/loader.svg\" alt=\"laoder\">
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Preloader Area -->

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
                <a class=\"navbar-brand js-scroll\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\">
                    <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" class=\"white-logo\" alt=\"logo\">
                    <img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-black.png"), "html", null, true);
        yield "\" class=\"black-logo\" alt=\"logo\">
                </a>
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span></span>  <span></span>  <span></span>
                </button>
                <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarDefault\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll active\" href=\"";
        // line 51
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
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\">Review</a></li>
                        <li class=\"nav-item book-now\"><a class=\"nav-link js-scroll\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_new");
        yield "\"><i class=\"fa fa-calendar-check-o\"></i> Book Appointment</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"contact.html\">Contact</a></li>
                        <!-- Add Create Account and Login buttons -->
                        <!-- Boutons \"Créer un compte\" et \"Se connecter\" -->
                        <li class=\"nav-item ms-auto\">
                            <div class=\"d-flex\">
                                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-custom me-2\">Créer un compte</a>
                                <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-custom\">Se connecter</a>
                            </div>
                        </li>
                        <!-- Icône Espace Client -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) ? ("espace_client") : ("app_login")));
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


    <div class=\"single-page\">
        <div class=\"container\">
            <nav aria-label=\"breadcrumb single-page\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Testimonials</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Testimonials Section Start -->
    <section id=\"review\" class=\"testimonial-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Testimonials</h2>
                        <h5>People love us</h5>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div id=\"testimonial-slides\" class=\"owl-carousel owl-theme owl-loaded owl-drag\">
                        <!-- testimonials item -->
                        <div class=\"single-testimonial\">
                            <div class=\"testi-content-inner\">
                                <div class=\"testimonial-bio\">
                                    <div class=\"avatar\">
                                        <img src=\"assets/images/clients/testimonial-2.jpg\" alt=\"testimonial\">
                                    </div>
                                </div>
                                <div class=\"testimonial-content\">
                                    <p>Thank you very much. Very Awesome Template. I’m impressed with your service. I’ve already told my friends about your template and your quick response, thanks again!</p>
                                </div>
                                <div class=\"testimonial-bio\">
                                    <div class=\"bio-info\">
                                        <h3 class=\"name\">Elizabeth Will</h3>
                                    </div>
                                </div>
                                <div class=\"rating-box\">
                                    <ul>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class=\"single-testimonial\">
                            <div class=\"testi-content-inner\">
                                <div class=\"testimonial-bio\">
                                    <div class=\"avatar\">
                                        <img src=\"assets/images/clients/testimonial-3.jpg\" alt=\"testimonial\">
                                    </div>
                                </div>
                                <div class=\"testimonial-content\">
                                    <p>Great Support, I would just like to say thank you for your prompt and effective service, for your friendly and professional support staff! I will recommend your expert company to all my friends.</p>
                                </div>
                                <div class=\"testimonial-bio\">
                                    <div class=\"bio-info\">
                                        <h3 class=\"name\">William Hoy</h3>
                                    </div>
                                </div>
                                <div class=\"rating-box\">
                                    <ul>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class=\"single-testimonial\">
                            <div class=\"testi-content-inner\">
                                <div class=\"testimonial-bio\">
                                    <div class=\"avatar\">
                                        <img src=\"assets/images/clients/testimonial-4.jpg\" alt=\"testimonial\">
                                    </div>
                                </div>
                                <div class=\"testimonial-content\">
                                    <p>Wow Very Nice Team, I'm so happy with your service. You managed to exceed my expectations! You guys are very efficient and I will refer more people and my social media to your company!</p>
                                </div>
                                <div class=\"testimonial-bio\">
                                    <div class=\"bio-info\">
                                        <h3 class=\"name\">Sara William</h3>
                                    </div>
                                </div>
                                <div class=\"rating-box\">
                                    <ul>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

    <!-- Footer -->
    <footer id=\"footer\" class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-content\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <a href=\"index.html\" class=\"logo d-flex align-items-center\">
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
                                <li><a href=\"index.html\"><i class=\"fa fa-angle-double-right\"
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
                                <li><a href=\"appointment.html\"><i class=\"fa fa-angle-double-right\"
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
        return "testimonial/testimonials.html.twig";
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
        return array (  196 => 76,  188 => 71,  184 => 70,  175 => 64,  171 => 63,  156 => 51,  147 => 45,  143 => 44,  139 => 43,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Testimonials{% endblock %}

{% block body %}
    <!-- Start Page Preloader Area -->
    <div class=\"preloader\" id=\"kar-theme-preloader\">
        <div class=\"preloader-wapper\">
            <div>
                <div class=\"spinner-loader\">
                    <img src=\"assets/images/loader.svg\" alt=\"laoder\">
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Preloader Area -->

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


    <div class=\"single-page\">
        <div class=\"container\">
            <nav aria-label=\"breadcrumb single-page\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Testimonials</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Testimonials Section Start -->
    <section id=\"review\" class=\"testimonial-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title\">
                        <h2>Testimonials</h2>
                        <h5>People love us</h5>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div id=\"testimonial-slides\" class=\"owl-carousel owl-theme owl-loaded owl-drag\">
                        <!-- testimonials item -->
                        <div class=\"single-testimonial\">
                            <div class=\"testi-content-inner\">
                                <div class=\"testimonial-bio\">
                                    <div class=\"avatar\">
                                        <img src=\"assets/images/clients/testimonial-2.jpg\" alt=\"testimonial\">
                                    </div>
                                </div>
                                <div class=\"testimonial-content\">
                                    <p>Thank you very much. Very Awesome Template. I’m impressed with your service. I’ve already told my friends about your template and your quick response, thanks again!</p>
                                </div>
                                <div class=\"testimonial-bio\">
                                    <div class=\"bio-info\">
                                        <h3 class=\"name\">Elizabeth Will</h3>
                                    </div>
                                </div>
                                <div class=\"rating-box\">
                                    <ul>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class=\"single-testimonial\">
                            <div class=\"testi-content-inner\">
                                <div class=\"testimonial-bio\">
                                    <div class=\"avatar\">
                                        <img src=\"assets/images/clients/testimonial-3.jpg\" alt=\"testimonial\">
                                    </div>
                                </div>
                                <div class=\"testimonial-content\">
                                    <p>Great Support, I would just like to say thank you for your prompt and effective service, for your friendly and professional support staff! I will recommend your expert company to all my friends.</p>
                                </div>
                                <div class=\"testimonial-bio\">
                                    <div class=\"bio-info\">
                                        <h3 class=\"name\">William Hoy</h3>
                                    </div>
                                </div>
                                <div class=\"rating-box\">
                                    <ul>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- testimonials item -->
                        <div class=\"single-testimonial\">
                            <div class=\"testi-content-inner\">
                                <div class=\"testimonial-bio\">
                                    <div class=\"avatar\">
                                        <img src=\"assets/images/clients/testimonial-4.jpg\" alt=\"testimonial\">
                                    </div>
                                </div>
                                <div class=\"testimonial-content\">
                                    <p>Wow Very Nice Team, I'm so happy with your service. You managed to exceed my expectations! You guys are very efficient and I will refer more people and my social media to your company!</p>
                                </div>
                                <div class=\"testimonial-bio\">
                                    <div class=\"bio-info\">
                                        <h3 class=\"name\">Sara William</h3>
                                    </div>
                                </div>
                                <div class=\"rating-box\">
                                    <ul>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                        <li><i class=\"fa fa-star\"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

    <!-- Footer -->
    <footer id=\"footer\" class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-content\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <a href=\"index.html\" class=\"logo d-flex align-items-center\">
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
                                <li><a href=\"index.html\"><i class=\"fa fa-angle-double-right\"
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
                                <li><a href=\"appointment.html\"><i class=\"fa fa-angle-double-right\"
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
{% endblock %}", "testimonial/testimonials.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\testimonial\\testimonials.html.twig");
    }
}