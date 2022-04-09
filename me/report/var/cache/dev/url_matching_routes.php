<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dice' => [[['_route' => 'dice-home', '_controller' => 'App\\Controller\\DiceController::home'], null, null, null, false, false, null]],
        '/dice/graphic' => [[['_route' => 'dice-graphic-home', '_controller' => 'App\\Controller\\DiceGraphicController::home'], null, null, null, false, false, null]],
        '/dice/hand' => [
            [['_route' => 'dice-hand-home', '_controller' => 'App\\Controller\\DiceHandController::home'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'dice-hand-process', '_controller' => 'App\\Controller\\DiceHandController::process'], null, ['POST' => 0], null, false, false, null],
        ],
        '/form/login' => [
            [['_route' => 'form-login', '_controller' => 'App\\Controller\\FormLoginController::login'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'form-login-process', '_controller' => 'App\\Controller\\FormLoginController::loginProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/form/search' => [[['_route' => 'form-search', '_controller' => 'App\\Controller\\FormSearchController::search'], null, null, null, false, false, null]],
        '/form/session' => [
            [['_route' => 'form-session', '_controller' => 'App\\Controller\\FormSessionController::session'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'form-session-process', '_controller' => 'App\\Controller\\FormSessionController::sessionProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ReportController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ReportController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\ReportController::report'], null, null, null, false, false, null]],
        '/api/lucky/number' => [[['_route' => 'lucky-number', '_controller' => 'App\\Controller\\ReportController::number'], null, null, null, false, false, null]],
        '/dev/debug' => [[['_route' => 'debug', '_controller' => 'App\\Controller\\ReportController::debug'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/dice/(?'
                    .'|roll/([^/]++)(*:191)'
                    .'|grahpic/roll/([^/]++)(*:220)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'dice-roll', '_controller' => 'App\\Controller\\DiceController::roll'], ['numRolls'], null, null, false, true, null]],
        220 => [
            [['_route' => 'dice-graphic-roll', '_controller' => 'App\\Controller\\DiceGraphicController::roll'], ['numRolls'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
