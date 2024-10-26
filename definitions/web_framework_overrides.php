<?php

/**
 * In this definitions file you put the definitions that override or specify
 * classes or interfaces from the WebFramework itself.
 *
 * Most often the Interfaces that default to a Null implementation such as:
 *  - Core\Cache
 *  - Core\MailService
 *  - Core\ReportFunction
 *  - Core\AuthenticationService
 *  - Core\BlacklistService
 */

namespace WebFramework;

use DI;

return [
    'app_name' => 'skeleton',

    /**
     * Examples
    Core\Cache::class => DI\autowire(Core\RedisCache::class),
    Core\MailService::class => DI\get(\App\Core\DatabaseMailService::class),
    Core\RenderService::class => DI\get(\App\Core\AppRenderService::class),
    Core\ReportFunction::class => DI\get(Core\MailReportFunction::class),

    Security\AuthenticationService::class => DI\get(Security\DatabaseAuthenticationService::class),
    Security\BlacklistService::class => DI\get(Security\DatabaseBlacklistService::class),
     */
];
