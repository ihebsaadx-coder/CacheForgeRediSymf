<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'synchroTeletravailValidors' => [[], ['_controller' => 'App\\Controller\\APISharepointController::synchroTeletravailValidors'], [], [['text', '/sp/synchro-teletravail-valideurs']], [], [], []],
    'notfound' => [[], ['_controller' => 'App\\Controller\\DemandController::notfound'], [], [['text', '/notfound']], [], [], []],
    'newestconsumer' => [[], ['_controller' => 'App\\Controller\\DemandController::NewConsumer'], [], [['text', '/newest-consume']], [], [], []],
    'updatefile' => [[], ['_controller' => 'App\\Controller\\DemandController::updateFile'], [], [['text', '/update-file']], [], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\DemandController::search'], [], [['text', '/search']], [], [], []],
    'consumefileupdate' => [[], ['_controller' => 'App\\Controller\\DemandController::ConsumeGroupCreate'], [], [['text', '/consume-file-create-group']], [], [], []],
    'consumegroup' => [[], ['_controller' => 'App\\Controller\\DemandController::ConsumeGroup'], [], [['text', '/consume-group']], [], [], []],
    'fetchstreams' => [[], ['_controller' => 'App\\Controller\\DemandController::fetchstream'], [], [['text', '/fetchstream']], [], [], []],
    'app_demand' => [[], ['_controller' => 'App\\Controller\\DemandController::RedisTest'], [], [['text', '/redis-api']], [], [], []],
    'app_demandRegulier' => [[], ['_controller' => 'App\\Controller\\DemandController::indexRegulier'], [], [['text', '/Regulier']], [], [], []],
    'app_demandOccasionnel' => [[], ['_controller' => 'App\\Controller\\DemandController::indexOccasionnel'], [], [['text', '/occasionnel']], [], [], []],
    'app_demandResidence' => [[], ['_controller' => 'App\\Controller\\DemandController::indexResidence'], [], [['text', '/residence']], [], [], []],
    'getAuth' => [['maricule'], ['_controller' => 'App\\Controller\\DemandController::getAuth'], [], [['variable', '/', '[^/]++', 'maricule', true], ['text', '/getAuth']], [], [], []],
    'getUserAuth' => [['matricule'], ['_controller' => 'App\\Controller\\DemandController::getUserAuth'], [], [['variable', '/', '[^/]++', 'matricule', true], ['text', '/api/get-user-auth']], [], [], []],
    'sendMail' => [['processID', 'modeOrganisation', 'decisionG', 'demandeur', 'responsebleRHFrance', 'users_notif'], ['_controller' => 'App\\Controller\\MailController::sendMail'], [], [['variable', '/', '[^/]++', 'users_notif', true], ['variable', '/', '[^/]++', 'responsebleRHFrance', true], ['variable', '/', '[^/]++', 'demandeur', true], ['variable', '/', '[^/]++', 'decisionG', true], ['variable', '/', '[^/]++', 'modeOrganisation', true], ['variable', '/', '[^/]++', 'processID', true], ['text', '/api/send-mail']], [], [], []],
    'getEmployees' => [[], ['_controller' => 'App\\Controller\\MailController::getEmployees'], [], [['text', '/get-employees']], [], [], []],
    'exportDoc' => [[], ['_controller' => 'App\\Controller\\MailController::exportDoc'], [], [['text', '/api/export-employees']], [], [], []],
    'sendMailCollab' => [[], ['_controller' => 'App\\Controller\\MailController::sendMailCollab'], [], [['text', '/api/send-mail-collabs']], [], [], []],
    'sendMailPlanification' => [[], ['_controller' => 'App\\Controller\\MailController::sendMailPlanification'], [], [['text', '/api/send-mail-planification']], [], [], []],
    'extractAll' => [[], ['_controller' => 'App\\Controller\\MailController::extractAll'], [], [['text', '/api/extract-all-planing']], [], [], []],
];
