<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'Read_Back_Abonnement' => [[], ['_controller' => 'App\\Controller\\AbonnementController::ReadBackAbonnement'], [], [['text', '/Abonnement/Read_Back']], [], [], []],
    'Create_Abonnement' => [[], ['_controller' => 'App\\Controller\\AbonnementController::CreateAbonnement'], [], [['text', '/Abonnement/Create']], [], [], []],
    'Delete_Abonnement' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::DeleteAbonnement'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Abonnement/Delete']], [], [], []],
    'Update_Abonnement' => [['id'], ['_controller' => 'App\\Controller\\AbonnementController::UpdateAbonnement'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Abonnement/Update']], [], [], []],
    'Read_Back_Category' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/gestioncategorie']], [], [], []],
    'add_category' => [[], ['_controller' => 'App\\Controller\\CategorieController::ajoutCategorie'], [], [['text', '/ad']], [], [], []],
    'updateCategorie' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::updateCategorie'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/update/categorie']], [], [], []],
    'deleteCategorie' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete/categorie']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/main']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
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
];
