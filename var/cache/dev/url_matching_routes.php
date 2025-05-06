<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles.css' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/register-admin' => [[['_route' => 'app_register_admin', '_controller' => 'App\\Controller\\AdminDashboardController::registerAdmin'], null, null, null, false, false, null]],
        '/admin/rendezvous' => [[['_route' => 'admin_rendezvous', '_controller' => 'App\\Controller\\AdminDashboardController::manageRendezvous'], null, null, null, false, false, null]],
        '/admin/vehicules' => [[['_route' => 'admin_vehicules', '_controller' => 'App\\Controller\\AdminDashboardController::manageVehicles'], null, null, null, false, false, null]],
        '/admin/orders' => [[['_route' => 'admin_orders', '_controller' => 'App\\Controller\\AdminDashboardController::manageOrders'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/appointment' => [[['_route' => 'app_appointment_index', '_controller' => 'App\\Controller\\AppointmentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/appointment/new' => [[['_route' => 'app_appointment_new', '_controller' => 'App\\Controller\\AppointmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cart/clear' => [[['_route' => 'cart_clear', '_controller' => 'App\\Controller\\CartController::clear'], null, ['GET' => 0], null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace-client' => [[['_route' => 'espace_client', '_controller' => 'App\\Controller\\EspaceClientController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/marque' => [[['_route' => 'app_marque_index', '_controller' => 'App\\Controller\\MarqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/marque/new' => [[['_route' => 'app_marque_new', '_controller' => 'App\\Controller\\MarqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/modele' => [[['_route' => 'app_modele_index', '_controller' => 'App\\Controller\\ModeleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/modele/new' => [[['_route' => 'app_modele_new', '_controller' => 'App\\Controller\\ModeleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/modele/api/models' => [[['_route' => 'get_models', '_controller' => 'App\\Controller\\ModeleController::getModels'], null, ['GET' => 0], null, false, false, null]],
        '/motorisation' => [[['_route' => 'app_motorisation_index', '_controller' => 'App\\Controller\\MotorisationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/motorisation/new' => [[['_route' => 'app_motorisation_new', '_controller' => 'App\\Controller\\MotorisationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/motorisation/api/motorisations' => [[['_route' => 'get_motorisations', '_controller' => 'App\\Controller\\MotorisationController::getMotorisations'], null, ['GET' => 0], null, false, false, null]],
        '/order' => [[['_route' => 'app_order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, false, false, null]],
        '/order/new' => [[['_route' => 'app_order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/page' => [[['_route' => 'app_page', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, false, false, null]],
        '/stock/movement' => [[['_route' => 'app_stock_movement_index', '_controller' => 'App\\Controller\\StockMovementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/stock/movement/new' => [[['_route' => 'app_stock_movement_new', '_controller' => 'App\\Controller\\StockMovementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/subcategory' => [[['_route' => 'subcategory_index', '_controller' => 'App\\Controller\\SubCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/subcategory/new' => [[['_route' => 'subcategory_new', '_controller' => 'App\\Controller\\SubCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/testimonial' => [[['_route' => 'app_testimonial', '_controller' => 'App\\Controller\\TestimonialController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicle' => [[['_route' => 'app_vehicle_index', '_controller' => 'App\\Controller\\VehicleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/vehicle/new' => [[['_route' => 'app_vehicle_new', '_controller' => 'App\\Controller\\VehicleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/rendezvous/([^/]++)/(?'
                        .'|validate(*:243)'
                        .'|cancel(*:257)'
                    .')'
                    .'|ppointment/([^/]++)(?'
                        .'|(*:288)'
                        .'|/edit(*:301)'
                        .'|(*:309)'
                    .')'
                .')'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:343)'
                        .'|remove/([^/]++)(*:366)'
                    .')'
                    .'|tegory/([^/]++)(?'
                        .'|(*:393)'
                        .'|/(?'
                            .'|edit(*:409)'
                            .'|products(*:425)'
                            .'|subcategories(*:446)'
                        .')'
                        .'|(*:455)'
                    .')'
                .')'
                .'|/m(?'
                    .'|arque/([^/]++)(?'
                        .'|(*:487)'
                        .'|/edit(*:500)'
                        .'|(*:508)'
                    .')'
                    .'|o(?'
                        .'|dele/([^/]++)(?'
                            .'|(*:537)'
                            .'|/edit(*:550)'
                            .'|(*:558)'
                        .')'
                        .'|torisation/([^/]++)(?'
                            .'|(*:589)'
                            .'|/edit(*:602)'
                            .'|(*:610)'
                        .')'
                    .')'
                .')'
                .'|/order/(?'
                    .'|confirmation/([^/]++)(*:652)'
                    .'|([^/]++)(?'
                        .'|(*:671)'
                        .'|/edit(*:684)'
                        .'|(*:692)'
                    .')'
                .')'
                .'|/product/(?'
                    .'|([^/]++)(?'
                        .'|/edit(*:730)'
                        .'|(*:738)'
                    .')'
                    .'|s(?'
                        .'|hop(*:754)'
                        .'|ubcategory/([^/]++)(?'
                            .'|(*:784)'
                            .'|/search(*:799)'
                        .')'
                    .')'
                    .'|([^/]++)(*:817)'
                .')'
                .'|/s(?'
                    .'|tock/movement/([^/]++)(?'
                        .'|(*:856)'
                        .'|/edit(*:869)'
                        .'|(*:877)'
                    .')'
                    .'|ubcategory/([^/]++)(?'
                        .'|(*:908)'
                        .'|/edit(*:921)'
                        .'|(*:929)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:956)'
                    .'|/edit(*:969)'
                    .'|(*:977)'
                .')'
                .'|/vehicle/([^/]++)(?'
                    .'|(*:1006)'
                    .'|/edit(*:1020)'
                    .'|(*:1029)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        243 => [[['_route' => 'admin_rendezvous_validate', '_controller' => 'App\\Controller\\AdminDashboardController::validateRendezvous'], ['id'], null, null, false, false, null]],
        257 => [[['_route' => 'admin_rendezvous_cancel', '_controller' => 'App\\Controller\\AdminDashboardController::cancelRendezvous'], ['id'], null, null, false, false, null]],
        288 => [[['_route' => 'app_appointment_show', '_controller' => 'App\\Controller\\AppointmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => 'app_appointment_edit', '_controller' => 'App\\Controller\\AppointmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        309 => [[['_route' => 'app_appointment_delete', '_controller' => 'App\\Controller\\AppointmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        343 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], ['GET' => 0], null, false, true, null]],
        393 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        409 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'category_products', '_controller' => 'App\\Controller\\CategoryController::products'], ['id'], ['GET' => 0], null, false, false, null]],
        446 => [[['_route' => 'category_subcategories', '_controller' => 'App\\Controller\\CategoryController::subcategories'], ['id'], ['GET' => 0], null, false, false, null]],
        455 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        487 => [[['_route' => 'app_marque_show', '_controller' => 'App\\Controller\\MarqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        500 => [[['_route' => 'app_marque_edit', '_controller' => 'App\\Controller\\MarqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        508 => [[['_route' => 'app_marque_delete', '_controller' => 'App\\Controller\\MarqueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        537 => [[['_route' => 'app_modele_show', '_controller' => 'App\\Controller\\ModeleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        550 => [[['_route' => 'app_modele_edit', '_controller' => 'App\\Controller\\ModeleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'app_modele_delete', '_controller' => 'App\\Controller\\ModeleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        589 => [[['_route' => 'app_motorisation_show', '_controller' => 'App\\Controller\\MotorisationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        602 => [[['_route' => 'app_motorisation_edit', '_controller' => 'App\\Controller\\MotorisationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        610 => [[['_route' => 'app_motorisation_delete', '_controller' => 'App\\Controller\\MotorisationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        652 => [[['_route' => 'app_order_confirmation', '_controller' => 'App\\Controller\\OrderController::confirmation'], ['id'], ['GET' => 0], null, false, true, null]],
        671 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        684 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        692 => [[['_route' => 'app_order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        730 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        738 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        754 => [[['_route' => 'shop_home', '_controller' => 'App\\Controller\\ProductController::shopHome'], [], ['GET' => 0], null, false, false, null]],
        784 => [[['_route' => 'shop_subcategory_products', '_controller' => 'App\\Controller\\ProductController::subCategoryProducts'], ['id'], ['GET' => 0], null, false, true, null]],
        799 => [[['_route' => 'subcategory_search', '_controller' => 'App\\Controller\\ProductController::searchInSubCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        817 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        856 => [[['_route' => 'app_stock_movement_show', '_controller' => 'App\\Controller\\StockMovementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        869 => [[['_route' => 'app_stock_movement_edit', '_controller' => 'App\\Controller\\StockMovementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        877 => [[['_route' => 'app_stock_movement_delete', '_controller' => 'App\\Controller\\StockMovementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        908 => [[['_route' => 'subcategory_show', '_controller' => 'App\\Controller\\SubCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        921 => [[['_route' => 'subcategory_edit', '_controller' => 'App\\Controller\\SubCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        929 => [[['_route' => 'subcategory_delete', '_controller' => 'App\\Controller\\SubCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        956 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        969 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        977 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1006 => [[['_route' => 'app_vehicle_show', '_controller' => 'App\\Controller\\VehicleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1020 => [[['_route' => 'app_vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1029 => [
            [['_route' => 'app_vehicle_delete', '_controller' => 'App\\Controller\\VehicleController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
