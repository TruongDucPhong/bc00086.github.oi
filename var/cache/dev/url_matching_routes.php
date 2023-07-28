<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/update' => [[['_route' => 'app_cart_update', '_controller' => 'App\\Controller\\CartController::update'], null, null, null, true, false, null]],
        '/conference' => [[['_route' => 'app_conference', '_controller' => 'App\\Controller\\ConferenceController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'index_index', '_controller' => 'App\\Controller\\IndexController::index'], null, ['POST' => 0], null, false, false, null]],
        '/binhphuong' => [[['_route' => 'index_binhphuong', '_controller' => 'App\\Controller\\IndexController::req'], null, null, null, false, false, null]],
        '/note' => [[['_route' => 'app_note', '_controller' => 'App\\Controller\\NoteController::index'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/san/pham' => [[['_route' => 'app_san_pham', '_controller' => 'App\\Controller\\SanPhamController::index'], null, null, null, false, false, null]],
        '/san/pham/ds' => [[['_route' => 'app_ds_san_pham', '_controller' => 'App\\Controller\\SanPhamController::list_sp'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'app_success', '_controller' => 'App\\Controller\\SuccessController::index'], null, null, null, false, false, null]],
        '/user/manager' => [[['_route' => 'app_user_manager', '_controller' => 'App\\Controller\\UserManagerController::index'], null, null, null, false, false, null]],
        '/user/manager/add' => [[['_route' => 'app_user_manager_add', '_controller' => 'App\\Controller\\UserManagerController::add'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:31)'
                        .'|remove/([^/]++)(*:53)'
                    .')'
                    .'|te/([^/]++)(*:72)'
                .')'
                .'|/hello/([^/]++)(*:95)'
                .'|/san/pham/([^/]++)(?'
                    .'|(*:123)'
                    .'|/delete(*:138)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:178)'
                    .'|wdt/([^/]++)(*:198)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:244)'
                            .'|router(*:258)'
                            .'|exception(?'
                                .'|(*:278)'
                                .'|\\.css(*:291)'
                            .')'
                        .')'
                        .'|(*:301)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['product_id'], ['POST' => 0], null, false, true, null]],
        53 => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['product_id'], null, null, false, true, null]],
        72 => [[['_route' => 'app_ds_san_pham_in_category', '_controller' => 'App\\Controller\\SanPhamController::listSPinCate'], ['id'], null, null, false, true, null]],
        95 => [[['_route' => 'index_hello', '_controller' => 'App\\Controller\\IndexController::hello'], ['name'], null, null, false, true, null]],
        123 => [[['_route' => 'app_edit_san_pham', '_controller' => 'App\\Controller\\SanPhamController::edit'], ['id'], null, null, false, true, null]],
        138 => [[['_route' => 'app_delete_san_pham', '_controller' => 'App\\Controller\\SanPhamController::delete'], ['id'], null, null, false, false, null]],
        178 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        198 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        244 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        258 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        278 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        291 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        301 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
