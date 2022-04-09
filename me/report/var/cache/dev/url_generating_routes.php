<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'dice-home' => [[], ['_controller' => 'App\\Controller\\DiceController::home'], [], [['text', '/dice']], [], [], []],
    'dice-roll' => [['numRolls'], ['_controller' => 'App\\Controller\\DiceController::roll'], [], [['variable', '/', '[^/]++', 'numRolls', true], ['text', '/dice/roll']], [], [], []],
    'dice-graphic-home' => [[], ['_controller' => 'App\\Controller\\DiceGraphicController::home'], [], [['text', '/dice/graphic']], [], [], []],
    'dice-graphic-roll' => [['numRolls'], ['_controller' => 'App\\Controller\\DiceGraphicController::roll'], [], [['variable', '/', '[^/]++', 'numRolls', true], ['text', '/dice/grahpic/roll']], [], [], []],
    'dice-hand-home' => [[], ['_controller' => 'App\\Controller\\DiceHandController::home'], [], [['text', '/dice/hand']], [], [], []],
    'dice-hand-process' => [[], ['_controller' => 'App\\Controller\\DiceHandController::process'], [], [['text', '/dice/hand']], [], [], []],
    'form-login' => [[], ['_controller' => 'App\\Controller\\FormLoginController::login'], [], [['text', '/form/login']], [], [], []],
    'form-login-process' => [[], ['_controller' => 'App\\Controller\\FormLoginController::loginProcess'], [], [['text', '/form/login']], [], [], []],
    'form-search' => [[], ['_controller' => 'App\\Controller\\FormSearchController::search'], [], [['text', '/form/search']], [], [], []],
    'form-session' => [[], ['_controller' => 'App\\Controller\\FormSessionController::session'], [], [['text', '/form/session']], [], [], []],
    'form-session-process' => [[], ['_controller' => 'App\\Controller\\FormSessionController::sessionProcess'], [], [['text', '/form/session']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ReportController::home'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\ReportController::about'], [], [['text', '/about']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\ReportController::report'], [], [['text', '/report']], [], [], []],
    'lucky-number' => [[], ['_controller' => 'App\\Controller\\ReportController::number'], [], [['text', '/api/lucky/number']], [], [], []],
    'debug' => [[], ['_controller' => 'App\\Controller\\ReportController::debug'], [], [['text', '/dev/debug']], [], [], []],
];
