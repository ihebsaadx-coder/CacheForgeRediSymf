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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/sp/synchro-teletravail-valideurs' => [[['_route' => 'synchroTeletravailValidors', '_controller' => 'App\\Controller\\APISharepointController::synchroTeletravailValidors'], null, null, null, false, false, null]],
        '/notfound' => [[['_route' => 'notfound', '_controller' => 'App\\Controller\\DemandController::notfound'], null, null, null, false, false, null]],
        '/newest-consume' => [[['_route' => 'newestconsumer', '_controller' => 'App\\Controller\\DemandController::NewConsumer'], null, ['POST' => 0], null, false, false, null]],
        '/update-file' => [[['_route' => 'updatefile', '_controller' => 'App\\Controller\\DemandController::updateFile'], null, ['POST' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\DemandController::search'], null, ['GET' => 0], null, false, false, null]],
        '/consume-file-create-group' => [[['_route' => 'consumefileupdate', '_controller' => 'App\\Controller\\DemandController::ConsumeGroupCreate'], null, ['POST' => 0], null, false, false, null]],
        '/consume-group' => [[['_route' => 'consumegroup', '_controller' => 'App\\Controller\\DemandController::ConsumeGroup'], null, ['GET' => 0], null, false, false, null]],
        '/fetchstream' => [[['_route' => 'fetchstreams', '_controller' => 'App\\Controller\\DemandController::fetchstream'], null, ['GET' => 0], null, false, false, null]],
        '/redis-api' => [[['_route' => 'app_demand', '_controller' => 'App\\Controller\\DemandController::RedisTest'], null, null, null, false, false, null]],
        '/Regulier' => [[['_route' => 'app_demandRegulier', '_controller' => 'App\\Controller\\DemandController::indexRegulier'], null, null, null, false, false, null]],
        '/occasionnel' => [[['_route' => 'app_demandOccasionnel', '_controller' => 'App\\Controller\\DemandController::indexOccasionnel'], null, null, null, false, false, null]],
        '/residence' => [[['_route' => 'app_demandResidence', '_controller' => 'App\\Controller\\DemandController::indexResidence'], null, null, null, false, false, null]],
        '/get-employees' => [[['_route' => 'getEmployees', '_controller' => 'App\\Controller\\MailController::getEmployees'], null, null, null, false, false, null]],
        '/api/export-employees' => [[['_route' => 'exportDoc', '_controller' => 'App\\Controller\\MailController::exportDoc'], null, null, null, false, false, null]],
        '/api/send-mail-collabs' => [[['_route' => 'sendMailCollab', '_controller' => 'App\\Controller\\MailController::sendMailCollab'], null, null, null, false, false, null]],
        '/api/send-mail-planification' => [[['_route' => 'sendMailPlanification', '_controller' => 'App\\Controller\\MailController::sendMailPlanification'], null, null, null, false, false, null]],
        '/api/extract-all-planing' => [[['_route' => 'extractAll', '_controller' => 'App\\Controller\\MailController::extractAll'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_post_createpost', '_controller' => 'App\\Controller\\PostController::createPost'], null, ['POST' => 0], null, false, false, null]],
        '/searchRedis' => [[['_route' => 'app_post_search', '_controller' => 'App\\Controller\\PostController::search'], null, ['POST' => 0], null, false, false, null]],
        '/crawl' => [[['_route' => 'app_webcrawler_crawlpage', '_controller' => 'App\\Controller\\WebCrawlerController::crawlPage'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/getAuth/([^/]++)(*:186)'
                .'|/api/get\\-user\\-auth/([^/]++)(*:223)'
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
        186 => [[['_route' => 'getAuth', '_controller' => 'App\\Controller\\DemandController::getAuth'], ['maricule'], null, null, false, true, null]],
        223 => [
            [['_route' => 'getUserAuth', '_controller' => 'App\\Controller\\DemandController::getUserAuth'], ['matricule'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
