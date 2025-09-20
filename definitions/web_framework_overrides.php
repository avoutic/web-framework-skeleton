<?php

/**
 * In this definitions file you put the definitions that override or specify
 * classes or interfaces from the WebFramework itself.
 *
 * Most often the Interfaces that default to a Null implementation such as:
 *  - Cache\Cache
 *  - Database\Database
 *  - Diagnostics\ReportFunction
 *  - Mail\MailService
 *  - Security\AuthenticationService
 *  - Security\BlacklistService
 */

namespace WebFramework;

use DI;

return [
    'app_name' => 'skeleton',

    /**
     * Examples
    Cache\Cache::class => DI\get(Redis\RedisCache::class),
    Database\Database::class => DI\get(Mysql\MysqliDatabase::class),
    Mail\MailService::class => DI\get(\App\Core\DatabaseMailService::class),
    Presentation\RenderService::class => DI\get(\App\Core\AppRenderService::class),
    Diagnostics\ReportFunction::class => DI\get(Diagnostics\MailReportFunction::class),

    Security\AuthenticationService::class => DI\get(Security\DatabaseAuthenticationService::class),
    Security\BlacklistService::class => DI\get(Security\DatabaseBlacklistService::class),
     */
];
