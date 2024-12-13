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

/* appointment/appointment.html.twig */
class __TwigTemplate_27f2177cc3044b084ffef1e29e54df50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/appointment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/appointment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/appointment.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "
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
                <a class=\"navbar-brand js-scroll\" href=\"index.html\">
                    <img src=\"assets/images/logo.png\" class=\"white-logo\" alt=\"logo\">
                    <img src=\"assets/images/logo-black.png\" class=\"black-logo\" alt=\"logo\">
                </a>
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span></span>  <span></span>  <span></span>
                </button>
                <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarDefault\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll active\" href=\"index.html\">Home</a></li>
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
                        <li class=\"nav-item book-now\"><a class=\"nav-link js-scroll\" href=\"appointment.html\"><i
                                        class=\"fa fa-calendar-check-o\"></i> Book Appointment</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"contact.html\">Contact</a></li>
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
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Appointment Section Start -->
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
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"form-container-box\">
                        <form class=\"contact-form form\" id=\"ajax-contact\" method=\"post\"
                              action=\"assets/phpscripts/appointment.php\">
                            <div class=\"controls\">
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\"
                                                   placeholder=\"Name*\" required=\"required\" data-error=\"Name is required.\">
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                                   placeholder=\"Email*\" required=\"required\"
                                                   data-error=\"Email is required.\">
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <input type=\"number\" class=\"form-control\" id=\"phone\" name=\"phone\"
                                                   placeholder=\"Phone*\" required=\"required\"
                                                   data-error=\"Phone is required.\">
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date\"
                                                   placeholder=\"Date*\" required=\"required\"
                                                   data-error=\"Date is required.\">
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <select class=\"form-control custom-select mr-sm-2\" id=\"service\" name=\"service\"
                                                    required=\"required\" data-error=\"Please select doctor.\">
                                                <option value=\"\" selected disabled>Select Service*</option>
                                                <option value=\"car repair\">Car Repair</option>
                                                <option value=\"car paint\">Car Paint</option>
                                                <option value=\"car maintainace\">Car Maintainace</option>
                                                <option value=\"car detailing\">Car Detailing</option>
                                                <option value=\"car wash\">Car Wash</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>

                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"6\"
                                                      placeholder=\"Write Your Message*\" required=\"required\"
                                                      data-error=\"Please, leave us a message.\"></textarea>
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 text-center\">
                                        <button type=\"submit\" class=\"button\" data-text=\"Send Message\">Make an Appointment</button>
                                    </div>
                                    <div class=\"messages text-center\" style=\"margin-top:15px; margin-left:15px;\">
                                        <div class=\"alert alert alert-success alert-dismissable alert-dismissable hidden\"
                                             id=\"msgSubmit\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"
                                                                    aria-hidden=\"true\">&times;</button> Thank You! your message has been
                                            sent. </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment Section End -->

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
        return "appointment/appointment.html.twig";
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
        return array (  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
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
                <a class=\"navbar-brand js-scroll\" href=\"index.html\">
                    <img src=\"assets/images/logo.png\" class=\"white-logo\" alt=\"logo\">
                    <img src=\"assets/images/logo-black.png\" class=\"black-logo\" alt=\"logo\">
                </a>
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span></span>  <span></span>  <span></span>
                </button>
                <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarDefault\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll active\" href=\"index.html\">Home</a></li>
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
                        <li class=\"nav-item book-now\"><a class=\"nav-link js-scroll\" href=\"appointment.html\"><i
                                        class=\"fa fa-calendar-check-o\"></i> Book Appointment</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"contact.html\">Contact</a></li>
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
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Appointment Section Start -->
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
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 wow fadeInUp\" data-wow-delay=\"0.2s\">
                    <div class=\"form-container-box\">
                        <form class=\"contact-form form\" id=\"ajax-contact\" method=\"post\"
                              action=\"assets/phpscripts/appointment.php\">
                            <div class=\"controls\">
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\"
                                                   placeholder=\"Name*\" required=\"required\" data-error=\"Name is required.\">
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                                   placeholder=\"Email*\" required=\"required\"
                                                   data-error=\"Email is required.\">
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"form-group\">
                                            <input type=\"number\" class=\"form-control\" id=\"phone\" name=\"phone\"
                                                   placeholder=\"Phone*\" required=\"required\"
                                                   data-error=\"Phone is required.\">
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <input type=\"date\" class=\"form-control\" id=\"date\" name=\"date\"
                                                   placeholder=\"Date*\" required=\"required\"
                                                   data-error=\"Date is required.\">
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <select class=\"form-control custom-select mr-sm-2\" id=\"service\" name=\"service\"
                                                    required=\"required\" data-error=\"Please select doctor.\">
                                                <option value=\"\" selected disabled>Select Service*</option>
                                                <option value=\"car repair\">Car Repair</option>
                                                <option value=\"car paint\">Car Paint</option>
                                                <option value=\"car maintainace\">Car Maintainace</option>
                                                <option value=\"car detailing\">Car Detailing</option>
                                                <option value=\"car wash\">Car Wash</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>

                                    <div class=\"col-12\">
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"6\"
                                                      placeholder=\"Write Your Message*\" required=\"required\"
                                                      data-error=\"Please, leave us a message.\"></textarea>
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 text-center\">
                                        <button type=\"submit\" class=\"button\" data-text=\"Send Message\">Make an Appointment</button>
                                    </div>
                                    <div class=\"messages text-center\" style=\"margin-top:15px; margin-left:15px;\">
                                        <div class=\"alert alert alert-success alert-dismissable alert-dismissable hidden\"
                                             id=\"msgSubmit\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"
                                                                    aria-hidden=\"true\">&times;</button> Thank You! your message has been
                                            sent. </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment Section End -->

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
{% endblock %}", "appointment/appointment.html.twig", "C:\\xampp\\htdocs\\Carservice-main\\templates\\appointment\\appointment.html.twig");
    }
}