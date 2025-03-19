<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/getAuth/([^/]++)(*:24)'
                .'|/api/(?'
                    .'|get\\-user\\-auth/([^/]++)(*:63)'
                    .'|send\\-mail/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:134)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'getAuth', '_controller' => 'App\\Controller\\DemandController::getAuth'], ['maricule'], null, null, false, true, null]],
        63 => [[['_route' => 'getUserAuth', '_controller' => 'App\\Controller\\DemandController::getUserAuth'], ['matricule'], ['POST' => 0], null, false, true, null]],
        134 => [
            [['_route' => 'sendMail', '_controller' => 'App\\Controller\\MailController::sendMail'], ['processID', 'modeOrganisation', 'decisionG', 'demandeur', 'responsebleRHFrance', 'users_notif'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
