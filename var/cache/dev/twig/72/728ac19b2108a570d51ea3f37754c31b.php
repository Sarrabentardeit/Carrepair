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

/* page/index.html.twig */
class __TwigTemplate_c50760133c9448dd3f8ffda2a89d406b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    <!-- Start Page Preloader Area -->
    <div class=\"preloader\" id=\"kar-theme-preloader\">
        <div class=\"preloader-wapper\">
            <div>
                <div class=\"spinner-loader\">
                    <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/loader.svg"), "html", null, true);
        yield "\" alt=\"laoder\">
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
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\">
                    <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" class=\"white-logo\" alt=\"logo\">
                    <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-black.png"), "html", null, true);
        yield "\" class=\"black-logo\" alt=\"logo\">
                </a>
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span></span>  <span></span>  <span></span>
                </button>
                <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbarDefault\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll active\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\">Home</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop_home");
        yield "\">Products</a></li>
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
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\">Review</a></li>
                        <li class=\"nav-item book-now\"><a class=\"nav-link js-scroll\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_new");
        yield "\"><i class=\"fa fa-calendar-check-o\"></i> Book Appointment</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"contact.html\">Contact</a></li>
                        <!-- Add Create Account and Login buttons -->
                        <!-- Boutons \"Créer un compte\" et \"Se connecter\" -->
                        <li class=\"nav-item ms-auto\">
                            <div class=\"d-flex\">
                                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-custom me-2\">Créer un compte</a>
                                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-custom\">Se connecter</a>
                            </div>
                        </li>
                        <!-- Icône Espace Client -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center\" href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75)) ? ("espace_client") : ("app_login")));
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

    <!-- Start Slider Are -->
    <header id=\"slider-home\" class=\"slider slider-prlx bg-b\">
        <div class=\"swiper-container parallax-slider\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                    <div class=\"bg-img valign\" data-background=\"assets/images/slider-1.jpg\" data-overlay-dark=\"0\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-12\">
                                    <div class=\"caption\">
                                        <h2>Best car maintenance</h2>
                                        <h1>Service and Repair</h1>
                                        <p style=\"max-width: 700px; margin: 0 auto;\">At CarShine, we're committed to earning your trust by providing the highest quality car repair services at a fair price.</p>
                                        <h3>+1 1234 56 780</h3>
                                        <div class=\"home-button-box home-slider-btn\">
                                            <a href=\"#0\" class=\"button home-btn js-scroll\">Contact Us</a>
                                        </div>
                                        <div class=\"features\">
                                            <span><img src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/fast.jpg"), "html", null, true);
        yield "\" alt=\"icon\">fast</span>
                                            <span><img src=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/reliably.jpg"), "html", null, true);
        yield "\" alt=\"icon\">reliably</span>
                                            <span><img src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/safely.jpg"), "html", null, true);
        yield "\" alt=\"icon\">safely</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"bg-img valign\" data-background=\"assets/images/slider-2.jpg\" data-overlay-dark=\"0\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-12\">
                                    <div class=\"caption\">
                                        <h2>Best car detailing services</h2>
                                        <h1>Car Detailing</h1>
                                        <p style=\"max-width: 700px; margin: 0 auto;\">At CarShine, we're committed to earning your trust by providing the highest quality car repair services at a fair price.</p>
                                        <h3>+1 1234 56 780</h3>
                                        <div class=\"home-button-box home-slider-btn\">
                                            <a href=\"#0\" class=\"button home-btn js-scroll\">Contact Us</a>
                                        </div>
                                        <div class=\"features\">
                                            <span><img src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/fast.jpg"), "html", null, true);
        yield "\" alt=\"icon\">fast</span>
                                            <span><img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/reliably.jpg"), "html", null, true);
        yield "\" alt=\"icon\">reliably</span>
                                            <span><img src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/safely.jpg"), "html", null, true);
        yield "\" alt=\"icon\">safely</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </header>
    <!-- End Slider Area -->



    <!-- End CarShine Offer -->

    <!-- Services Section Start -->
    <section id=\"services\" class=\"theme-repair-services section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"section-title\">
                        <h2>AUTO REPAIR SERVICES</h2>
                        <h5>We offer a wide range of services to help you get back on the road quickly and safely.</h5>
                    </div>
                </div>
            </div>
            <div class=\"row d-flex align-items-center\">
                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/oil.svg"), "html", null, true);
        yield "\" alt=\"image\">
                        <h5>OIL CHANGES</h5>
                        <p>Regular oil and filter changes help your engine run smoothly and efficiently.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/brakes.svg"), "html", null, true);
        yield " \" alt=\"image\">
                        <h5>ABS BRAKES</h5>
                        <p>Brake maintenance is essential for safe vehicle operation and longevity.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/transmission.svg"), "html", null, true);
        yield "\" alt=\"image\">
                        <h5>TRANSMISSION SERVICE</h5>
                        <p>A well-maintained transmission can extend your vehicle's life and save money.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/tire.svg"), "html", null, true);
        yield "\" alt=\"image\">
                        <h5>TIRES & WHEELS</h5>
                        <p>Regular tire inspections and service can prevent accidents and save you money.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/carwash.svg"), "html", null, true);
        yield "\" alt=\"image\">
                        <h5>WASH AND CLEAN</h5>
                        <p>Keeping your car clean, washing regularly can improve gas mileage, extend paint life.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icons/engine.svg"), "html", null, true);
        yield "\" alt=\"image\">
                        <h5>ENGINE PERFORMANCE</h5>
                        <p>A well-tuned engine delivers optimal performance and fuel efficiency.</p>
                    </div>
                </div>
                <!-- single service -->
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Shop Now Section Start -->
    <section id=\"products\" class=\"shop-area section-padding\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Our Products</h2>
                <h5>Limited-time discount on all products and services Consectetur Adipiscing Elit</h5>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"product-shop-slide\" class=\"owl-carousel owl-theme owl-loaded owl-drag\">

                        <!-- shop item -->
                        <div class=\"kar-theme-product-shop-item\">
                            <div class=\"product-item-content\">
                                <div class=\"product\">
                                    <img class=\"product-image\" src=\"assets/images/store/product-1.jpg\" alt=\"image\">
                                    <div class=\"product-description\">
                                        <h3 class=\"product-title\">Leather Stearing</h3>
                                        <span class=\"product-price\">\$120</span>
                                        <p>Make your car beautifull with Leather stearing wheel cover</p>
                                        <a href=\"#\" class=\"product-btn btn\">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop item -->
                        <div class=\"kar-theme-product-shop-item\">
                            <div class=\"product-item-content\">
                                <div class=\"product\">
                                    <img class=\"product-image\" src=\"assets/images/store/product-2.jpg\" alt=\"image\">
                                    <div class=\"product-description\">
                                        <h3 class=\"product-title\">Doors and Paint</h3>
                                        <span class=\"product-price\">\$120</span>
                                        <p>Order Any color paint for your doors or you can buy new doors</p>
                                        <a href=\"#\" class=\"product-btn btn\">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop item -->
                        <div class=\"kar-theme-product-shop-item\">
                            <div class=\"product-item-content\">
                                <div class=\"product\">
                                    <img class=\"product-image\" src=\"assets/images/store/product-3.jpg\" alt=\"image\">
                                    <div class=\"product-description\">
                                        <h3 class=\"product-title\">Custom Interior</h3>
                                        <span class=\"product-price\">\$120</span>
                                        <p>Order Leathar Custom Interior Designs for your cars any color</p>
                                        <a href=\"#\" class=\"product-btn btn\">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop item -->
                        <div class=\"kar-theme-product-shop-item\">
                            <div class=\"product-item-content\">
                                <div class=\"product\">
                                    <img class=\"product-image\" src=\"assets/images/store/product-4.jpg\" alt=\"image\">
                                    <div class=\"product-description\">
                                        <h3 class=\"product-title\">Leather Pushes</h3>
                                        <span class=\"product-price\">\$120</span>
                                        <p>Order Leathar Leather Pushes for interior Designs for your cars</p>
                                        <a href=\"#\" class=\"product-btn btn\">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Now Section End -->

    <!-- Our Deals Section Start -->
    <section id=\"packages\" class=\"menu-day-area bg-grey section-padding\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>SERVICE PACKAGES</h2>
                <h5>Cheap and top qiality products. Regular oil and filter changes are essential for engine health.</h5>
            </div>

            <div class=\"row\">

                <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 \">
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">FREE SERVICES</a>
                        </h4>
                        <div class=\"main-price\">Free</div>
                        <div class=\"menu-product-description\">
                            <p>Wiper Blade Installation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Check Engine Light Code Retrieval</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Air Filter Replacement Installation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Starting and Charging System Evaluation</p>
                        </div>
                    </div>
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">FLUID SERVICES</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>Engine Flush Service</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Transmission Fluid Service</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Brake Fluid Exchange</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Coolant Drain and Fill</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Power Steering Flush</p>
                        </div>
                    </div>
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">MAINTENANCE SERVICES</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>Headlight Restoration</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Small Bulb Installation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Cabin Air Filter Install</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Spring Maintenance Package</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 \">
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">HOME WASH SERVICES</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>Spring Maintenance Package</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Summer Maintenance Package</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Winter Maintenance Package</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Smoke Test Diagnostic Service</p>
                        </div>
                    </div>
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">SYSTEM EVALUATIONS</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>A/C System Leak Evaluation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Steering and Suspension System Evaluation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Coolant System Evaluation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Cranks No Start Diagnostic Service</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>2nd A/C System Reapir Evaluation</p>
                        </div>
                    </div>
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">TUNE UPS</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>Small Bulb Installation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Cranks No Start Diagnostic Service</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Engine Cooling System Check</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Headlight Restoration</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Our Deals Section End -->


    <!-- Start Reservation Area -->
    <section id=\"reservation\" class=\"kar-theme-reservation-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center\">
                    <h2>24/7 SERVICES</h2>
                    <h5>We are committed to providing our customers with quality repairs at a fair price.</h5>
                    <h2>+1 1234 56 780</h2>
                    <div class=\"mt-20\"><a class=\"reservation-btn\" href=\"";
        // line 438
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_new");
        yield "\"><i class=\"fa fa-calendar-check-o\"></i> Schedule an Appointment</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Reservation Area -->




    <!-- Gallery Section Start -->
    <section id=\"gallery\" class=\"gallery-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"section-title\">
                        <h2>Our Gallery</h2>
                        <h5>We have best car images collections</h5>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"gallery-list\">
                        <ul class=\"nav\" id=\"gallery-flters\">
                            <li class=\"filter filter-active\" data-filter=\".all\">All</li>
                            <li class=\"filter\" data-filter=\".repairing\">Repairing</li>
                            <li class=\"filter\" data-filter=\".carWash\">Car Wash</li>
                            <li class=\"filter\" data-filter=\".paint\">Paint</li>
                            <li class=\"filter\" data-filter=\".new\">New</li>
                        </ul>
                    </div>
                </div>
                <div class=\"gallery-container\">
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-1.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-1.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash repairing\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-2.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-2.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-3.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-3.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash webdesig repairingn\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-4.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-4.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new repairing\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-5.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-5.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new paint\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-6.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-6.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new paint\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-7.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-7.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- gallery more button -->
                <div class=\"col-md-12\">
                    <div class=\"gallery-more-btn text-center mt-15\">
                        <a class=\"button\" href=\"index.html\">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Team Section Start -->
    <section id=\"team\" class=\"team bg-grey section-padding\">
        <div class=\"container aos-init aos-animate\" data-aos=\"fade-up\">

            <div class=\"section-title\">
                <h2>Our Team</h2>
                <h5>Our team of experienced professionals is committed to understanding your car problems</h5>
            </div>

            <div class=\"row gy-4\">

                <div class=\"col-xl-3 col-md-6 d-flex aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                    <div class=\"member\">
                        <img src=\"";
        // line 588
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                        <h4>Jhone Bi</h4>
                        <span>Application Manager</span>
                    </div>
                </div><!-- End Team Member -->

                <div class=\"col-xl-3 col-md-6 d-flex aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                    <div class=\"member\">
                        <img src=\"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                        <h4>Sani Awesome</h4>
                        <span>Social Media</span>
                    </div>
                </div><!-- End Team Member -->

                <div class=\"col-xl-3 col-md-6 d-flex aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                    <div class=\"member\">
                        <img src=\"";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/team/team-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                        <h4>Andrio Willi</h4>
                        <span>Content Writer</span>
                    </div>
                </div><!-- End Team Member -->

                <div class=\"col-xl-3 col-md-6 d-flex aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <div class=\"member\">
                        <img src=\"assets/images/team/team-4.jpg\" class=\"img-fluid\" alt=\"\">
                        <h4>Afa Jonson</h4>
                        <span>Business Manager</span>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </section>
    <!-- Team Section End -->


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
                    <div id=\"testimonial-slide\" class=\"owl-carousel owl-theme owl-loaded owl-drag\">
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


    <!-- Partner Section Start -->
    <div class=\"theme-partner-area bg-grey section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-1.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-2.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-3.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-4.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-5.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-6.jpg\" alt=\"image\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Section End -->


    <!-- Blog Section Start -->
    <section id=\"blog\" class=\"blog-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"section-title\">
                        <h2>Our Blog</h2>
                        <h5>Read our latest news</h5>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-sm-8 col-md-6 col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <a href=\"single-blog.html\">
                        <div class=\"card\">
                            <img class=\"card-img\" src=\"assets/images/news/blog-1.jpg\" alt=\"blog image\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Which oil make our car performance better?</h4>
                                <div class=\"blog-text\">
                                    <p>Viscosity is the thickness of the oil. Thinner oils flow more easily and can help improve fuel economy, but they may not provide enough protection for high-performance...</p>
                                </div>
                                <div class=\"blog-bottom-text-link\">
                                    <span>October 10, 2024</span>
                                    <span class=\"red-text\">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class=\"col-12 col-sm-8 col-md-6 col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <a href=\"single-blog.html\">
                        <div class=\"card\">
                            <img class=\"card-img\" src=\"assets/images/news/blog-2.jpg\" alt=\"blog image\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">How we make our car cool and clean?</h4>
                                <div class=\"blog-text\">
                                    <p>Park in the shade whenever possible. Use a windshield sunshade to reflect sunlight away from the interior of your car. Keep your air conditioner in good working order...</p>
                                </div>
                                <div class=\"blog-bottom-text-link\">
                                    <span>October 10, 2024</span>
                                    <span class=\"red-text\">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class=\"col-12 col-sm-8 col-md-6 col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <a href=\"single-blog.html\">
                        <div class=\"card\">
                            <img class=\"card-img\" src=\"assets/images/news/blog-3.jpg\" alt=\"blog image\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">After how much time need to change Oil Filter?</h4>
                                <div class=\"blog-text\">
                                    <p>
                                        It is generally recommended to change your oil filter every time you change your oil. This is because the oil filter traps dirt, debris, and metal particles that can damage your...</p>
                                </div>
                                <div class=\"blog-bottom-text-link\">
                                    <span>October 10, 2024</span>
                                    <span class=\"red-text\">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"blog-more-btn text-center mt-15\">
                        <a class=\"button\" href=\"blogs.html\">View More Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->


    <!-- Footer -->
    <footer id=\"footer\" class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-content\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 mb-50\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <a href=\"";
        // line 854
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
        // line 875
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
        // line 895
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
        return "page/index.html.twig";
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
        return array (  1058 => 895,  1035 => 875,  1011 => 854,  758 => 604,  747 => 596,  736 => 588,  583 => 438,  358 => 216,  345 => 206,  332 => 196,  319 => 186,  306 => 176,  293 => 166,  257 => 133,  253 => 132,  249 => 131,  224 => 109,  220 => 108,  216 => 107,  181 => 75,  173 => 70,  169 => 69,  160 => 63,  156 => 62,  143 => 52,  139 => 51,  135 => 50,  126 => 44,  122 => 43,  118 => 42,  83 => 10,  76 => 5,  63 => 4,  40 => 1,);
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
                    <img src=\"{{ asset('assets/images/loader.svg') }}\" alt=\"laoder\">
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
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"{{ path('app_services') }}\">Services</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll\" href=\"{{ path('shop_home') }}\">Products</a></li>
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

    <!-- Start Slider Are -->
    <header id=\"slider-home\" class=\"slider slider-prlx bg-b\">
        <div class=\"swiper-container parallax-slider\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                    <div class=\"bg-img valign\" data-background=\"assets/images/slider-1.jpg\" data-overlay-dark=\"0\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-12\">
                                    <div class=\"caption\">
                                        <h2>Best car maintenance</h2>
                                        <h1>Service and Repair</h1>
                                        <p style=\"max-width: 700px; margin: 0 auto;\">At CarShine, we're committed to earning your trust by providing the highest quality car repair services at a fair price.</p>
                                        <h3>+1 1234 56 780</h3>
                                        <div class=\"home-button-box home-slider-btn\">
                                            <a href=\"#0\" class=\"button home-btn js-scroll\">Contact Us</a>
                                        </div>
                                        <div class=\"features\">
                                            <span><img src=\"{{ asset('assets/images/icons/fast.jpg') }}\" alt=\"icon\">fast</span>
                                            <span><img src=\"{{ asset('assets/images/icons/reliably.jpg') }}\" alt=\"icon\">reliably</span>
                                            <span><img src=\"{{ asset('assets/images/icons/safely.jpg') }}\" alt=\"icon\">safely</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"bg-img valign\" data-background=\"assets/images/slider-2.jpg\" data-overlay-dark=\"0\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-md-12\">
                                    <div class=\"caption\">
                                        <h2>Best car detailing services</h2>
                                        <h1>Car Detailing</h1>
                                        <p style=\"max-width: 700px; margin: 0 auto;\">At CarShine, we're committed to earning your trust by providing the highest quality car repair services at a fair price.</p>
                                        <h3>+1 1234 56 780</h3>
                                        <div class=\"home-button-box home-slider-btn\">
                                            <a href=\"#0\" class=\"button home-btn js-scroll\">Contact Us</a>
                                        </div>
                                        <div class=\"features\">
                                            <span><img src=\"{{ asset('assets/images/icons/fast.jpg') }}\" alt=\"icon\">fast</span>
                                            <span><img src=\"{{ asset('assets/images/icons/reliably.jpg') }}\" alt=\"icon\">reliably</span>
                                            <span><img src=\"{{ asset('assets/images/icons/safely.jpg') }}\" alt=\"icon\">safely</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-pagination\"></div>
        </div>
    </header>
    <!-- End Slider Area -->



    <!-- End CarShine Offer -->

    <!-- Services Section Start -->
    <section id=\"services\" class=\"theme-repair-services section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"section-title\">
                        <h2>AUTO REPAIR SERVICES</h2>
                        <h5>We offer a wide range of services to help you get back on the road quickly and safely.</h5>
                    </div>
                </div>
            </div>
            <div class=\"row d-flex align-items-center\">
                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"{{ asset('assets/images/icons/oil.svg') }}\" alt=\"image\">
                        <h5>OIL CHANGES</h5>
                        <p>Regular oil and filter changes help your engine run smoothly and efficiently.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"{{ asset('assets/images/icons/brakes.svg') }} \" alt=\"image\">
                        <h5>ABS BRAKES</h5>
                        <p>Brake maintenance is essential for safe vehicle operation and longevity.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"{{ asset('assets/images/icons/transmission.svg') }}\" alt=\"image\">
                        <h5>TRANSMISSION SERVICE</h5>
                        <p>A well-maintained transmission can extend your vehicle's life and save money.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"{{ asset('assets/images/icons/tire.svg') }}\" alt=\"image\">
                        <h5>TIRES & WHEELS</h5>
                        <p>Regular tire inspections and service can prevent accidents and save you money.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"{{ asset('assets/images/icons/carwash.svg') }}\" alt=\"image\">
                        <h5>WASH AND CLEAN</h5>
                        <p>Keeping your car clean, washing regularly can improve gas mileage, extend paint life.</p>
                    </div>
                </div>
                <!-- single service -->

                <!-- single service -->
                <div class=\"col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center\" data-wow-delay=\"0.2s\">
                    <div class=\"kar-theme-single-service-card\">
                        <img src=\"{{ asset('assets/images/icons/engine.svg') }}\" alt=\"image\">
                        <h5>ENGINE PERFORMANCE</h5>
                        <p>A well-tuned engine delivers optimal performance and fuel efficiency.</p>
                    </div>
                </div>
                <!-- single service -->
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Shop Now Section Start -->
    <section id=\"products\" class=\"shop-area section-padding\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Our Products</h2>
                <h5>Limited-time discount on all products and services Consectetur Adipiscing Elit</h5>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"product-shop-slide\" class=\"owl-carousel owl-theme owl-loaded owl-drag\">

                        <!-- shop item -->
                        <div class=\"kar-theme-product-shop-item\">
                            <div class=\"product-item-content\">
                                <div class=\"product\">
                                    <img class=\"product-image\" src=\"assets/images/store/product-1.jpg\" alt=\"image\">
                                    <div class=\"product-description\">
                                        <h3 class=\"product-title\">Leather Stearing</h3>
                                        <span class=\"product-price\">\$120</span>
                                        <p>Make your car beautifull with Leather stearing wheel cover</p>
                                        <a href=\"#\" class=\"product-btn btn\">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop item -->
                        <div class=\"kar-theme-product-shop-item\">
                            <div class=\"product-item-content\">
                                <div class=\"product\">
                                    <img class=\"product-image\" src=\"assets/images/store/product-2.jpg\" alt=\"image\">
                                    <div class=\"product-description\">
                                        <h3 class=\"product-title\">Doors and Paint</h3>
                                        <span class=\"product-price\">\$120</span>
                                        <p>Order Any color paint for your doors or you can buy new doors</p>
                                        <a href=\"#\" class=\"product-btn btn\">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop item -->
                        <div class=\"kar-theme-product-shop-item\">
                            <div class=\"product-item-content\">
                                <div class=\"product\">
                                    <img class=\"product-image\" src=\"assets/images/store/product-3.jpg\" alt=\"image\">
                                    <div class=\"product-description\">
                                        <h3 class=\"product-title\">Custom Interior</h3>
                                        <span class=\"product-price\">\$120</span>
                                        <p>Order Leathar Custom Interior Designs for your cars any color</p>
                                        <a href=\"#\" class=\"product-btn btn\">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop item -->
                        <div class=\"kar-theme-product-shop-item\">
                            <div class=\"product-item-content\">
                                <div class=\"product\">
                                    <img class=\"product-image\" src=\"assets/images/store/product-4.jpg\" alt=\"image\">
                                    <div class=\"product-description\">
                                        <h3 class=\"product-title\">Leather Pushes</h3>
                                        <span class=\"product-price\">\$120</span>
                                        <p>Order Leathar Leather Pushes for interior Designs for your cars</p>
                                        <a href=\"#\" class=\"product-btn btn\">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Now Section End -->

    <!-- Our Deals Section Start -->
    <section id=\"packages\" class=\"menu-day-area bg-grey section-padding\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>SERVICE PACKAGES</h2>
                <h5>Cheap and top qiality products. Regular oil and filter changes are essential for engine health.</h5>
            </div>

            <div class=\"row\">

                <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 \">
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">FREE SERVICES</a>
                        </h4>
                        <div class=\"main-price\">Free</div>
                        <div class=\"menu-product-description\">
                            <p>Wiper Blade Installation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Check Engine Light Code Retrieval</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Air Filter Replacement Installation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Starting and Charging System Evaluation</p>
                        </div>
                    </div>
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">FLUID SERVICES</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>Engine Flush Service</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Transmission Fluid Service</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Brake Fluid Exchange</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Coolant Drain and Fill</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Power Steering Flush</p>
                        </div>
                    </div>
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">MAINTENANCE SERVICES</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>Headlight Restoration</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Small Bulb Installation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Cabin Air Filter Install</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Spring Maintenance Package</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 \">
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">HOME WASH SERVICES</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>Spring Maintenance Package</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Summer Maintenance Package</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Winter Maintenance Package</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Smoke Test Diagnostic Service</p>
                        </div>
                    </div>
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">SYSTEM EVALUATIONS</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>A/C System Leak Evaluation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Steering and Suspension System Evaluation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Coolant System Evaluation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Cranks No Start Diagnostic Service</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>2nd A/C System Reapir Evaluation</p>
                        </div>
                    </div>
                    <div class=\"zr-theme-menu-product-info-box\">
                        <h4 class=\"menu-product-details\"><a class=\"menu-product-title\" href=\"#\">TUNE UPS</a>
                        </h4>
                        <div class=\"main-price\">\$25</div>
                        <div class=\"menu-product-description\">
                            <p>Small Bulb Installation</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Cranks No Start Diagnostic Service</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Engine Cooling System Check</p>
                        </div>
                        <div class=\"menu-product-description\">
                            <p>Headlight Restoration</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Our Deals Section End -->


    <!-- Start Reservation Area -->
    <section id=\"reservation\" class=\"kar-theme-reservation-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center\">
                    <h2>24/7 SERVICES</h2>
                    <h5>We are committed to providing our customers with quality repairs at a fair price.</h5>
                    <h2>+1 1234 56 780</h2>
                    <div class=\"mt-20\"><a class=\"reservation-btn\" href=\"{{ path('app_appointment_new') }}\"><i class=\"fa fa-calendar-check-o\"></i> Schedule an Appointment</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Reservation Area -->




    <!-- Gallery Section Start -->
    <section id=\"gallery\" class=\"gallery-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"section-title\">
                        <h2>Our Gallery</h2>
                        <h5>We have best car images collections</h5>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"gallery-list\">
                        <ul class=\"nav\" id=\"gallery-flters\">
                            <li class=\"filter filter-active\" data-filter=\".all\">All</li>
                            <li class=\"filter\" data-filter=\".repairing\">Repairing</li>
                            <li class=\"filter\" data-filter=\".carWash\">Car Wash</li>
                            <li class=\"filter\" data-filter=\".paint\">Paint</li>
                            <li class=\"filter\" data-filter=\".new\">New</li>
                        </ul>
                    </div>
                </div>
                <div class=\"gallery-container\">
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-1.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-1.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash repairing\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-2.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-2.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-3.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-3.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash webdesig repairingn\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-4.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-4.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new repairing\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-5.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-5.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new paint\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-6.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-6.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item -->
                    <div class=\"col-lg-3 col-md-3 gallery-grid-item all carWash new paint\">
                        <div class=\"gallery-item\">
                            <img src=\"assets/images/photos/gallery-7.jpg\" alt=\"image\">
                            <div class=\"gallery-img-overlay\">
                                <div class=\"gallery-content\">
                                    <a href=\"assets/images/photos/gallery-7.jpg\" class=\"popimg\">
                                        <span class=\"icon\">View Large <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- gallery more button -->
                <div class=\"col-md-12\">
                    <div class=\"gallery-more-btn text-center mt-15\">
                        <a class=\"button\" href=\"index.html\">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Team Section Start -->
    <section id=\"team\" class=\"team bg-grey section-padding\">
        <div class=\"container aos-init aos-animate\" data-aos=\"fade-up\">

            <div class=\"section-title\">
                <h2>Our Team</h2>
                <h5>Our team of experienced professionals is committed to understanding your car problems</h5>
            </div>

            <div class=\"row gy-4\">

                <div class=\"col-xl-3 col-md-6 d-flex aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                    <div class=\"member\">
                        <img src=\"{{ asset('assets/images/team/team-1.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <h4>Jhone Bi</h4>
                        <span>Application Manager</span>
                    </div>
                </div><!-- End Team Member -->

                <div class=\"col-xl-3 col-md-6 d-flex aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                    <div class=\"member\">
                        <img src=\"{{ asset('assets/images/team/team-2.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <h4>Sani Awesome</h4>
                        <span>Social Media</span>
                    </div>
                </div><!-- End Team Member -->

                <div class=\"col-xl-3 col-md-6 d-flex aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                    <div class=\"member\">
                        <img src=\"{{ asset('assets/images/team/team-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
                        <h4>Andrio Willi</h4>
                        <span>Content Writer</span>
                    </div>
                </div><!-- End Team Member -->

                <div class=\"col-xl-3 col-md-6 d-flex aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <div class=\"member\">
                        <img src=\"assets/images/team/team-4.jpg\" class=\"img-fluid\" alt=\"\">
                        <h4>Afa Jonson</h4>
                        <span>Business Manager</span>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </section>
    <!-- Team Section End -->


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
                    <div id=\"testimonial-slide\" class=\"owl-carousel owl-theme owl-loaded owl-drag\">
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


    <!-- Partner Section Start -->
    <div class=\"theme-partner-area bg-grey section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-1.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-2.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-3.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-4.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-5.jpg\" alt=\"image\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 \">
                    <div class=\"theme-single-press-content\">
                        <img src=\"assets/images/partners/c-6.jpg\" alt=\"image\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Section End -->


    <!-- Blog Section Start -->
    <section id=\"blog\" class=\"blog-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"section-title\">
                        <h2>Our Blog</h2>
                        <h5>Read our latest news</h5>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-sm-8 col-md-6 col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <a href=\"single-blog.html\">
                        <div class=\"card\">
                            <img class=\"card-img\" src=\"assets/images/news/blog-1.jpg\" alt=\"blog image\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Which oil make our car performance better?</h4>
                                <div class=\"blog-text\">
                                    <p>Viscosity is the thickness of the oil. Thinner oils flow more easily and can help improve fuel economy, but they may not provide enough protection for high-performance...</p>
                                </div>
                                <div class=\"blog-bottom-text-link\">
                                    <span>October 10, 2024</span>
                                    <span class=\"red-text\">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class=\"col-12 col-sm-8 col-md-6 col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <a href=\"single-blog.html\">
                        <div class=\"card\">
                            <img class=\"card-img\" src=\"assets/images/news/blog-2.jpg\" alt=\"blog image\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">How we make our car cool and clean?</h4>
                                <div class=\"blog-text\">
                                    <p>Park in the shade whenever possible. Use a windshield sunshade to reflect sunlight away from the interior of your car. Keep your air conditioner in good working order...</p>
                                </div>
                                <div class=\"blog-bottom-text-link\">
                                    <span>October 10, 2024</span>
                                    <span class=\"red-text\">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class=\"col-12 col-sm-8 col-md-6 col-lg-4 wow fadeInLeft\" data-wow-delay=\"0.2s\">
                    <a href=\"single-blog.html\">
                        <div class=\"card\">
                            <img class=\"card-img\" src=\"assets/images/news/blog-3.jpg\" alt=\"blog image\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">After how much time need to change Oil Filter?</h4>
                                <div class=\"blog-text\">
                                    <p>
                                        It is generally recommended to change your oil filter every time you change your oil. This is because the oil filter traps dirt, debris, and metal particles that can damage your...</p>
                                </div>
                                <div class=\"blog-bottom-text-link\">
                                    <span>October 10, 2024</span>
                                    <span class=\"red-text\">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"blog-more-btn text-center mt-15\">
                        <a class=\"button\" href=\"blogs.html\">View More Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->


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
", "page/index.html.twig", "C:\\xampp\\htdocs\\Carservice\\templates\\page\\index.html.twig");
    }
}
