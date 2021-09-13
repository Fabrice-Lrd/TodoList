<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'todo_list' => [[], ['_controller' => 'App\\Controller\\TodoController::todoList'], [], [['text', '/todos']], [], []],
    'todo_show' => [['id'], ['_controller' => 'App\\Controller\\TodoController::todoShow'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/todo']], [], []],
    'todo_set_status' => [['id', 'status'], ['_controller' => 'App\\Controller\\TodoController::todoSetStatus'], ['id' => '\\d+', 'status' => 'done|undone'], [['variable', '/', 'done|undone', 'status', true], ['variable', '/', '\\d+', 'id', true], ['text', '/todo']], [], []],
    'todo_add' => [[], ['_controller' => 'App\\Controller\\TodoController::todoAdd'], [], [['text', '/todo/add']], [], []],
    'todo_delete' => [[], ['_controller' => 'App\\Controller\\TodoController::todoDelete'], [], [['text', '/todo/delete']], [], []],
    'todo_reset' => [[], ['_controller' => 'App\\Controller\\TodoController::todoReset'], [], [['text', '/todo/reset']], [], []],
];
