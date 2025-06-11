<?php

/**
 * This configuration file changes the base_config.php from WebFramework
 * itself.
 *
 * It's advised to put this in production-ready mode and use a
 * 'config_local.php' layered on top to modify it to debug / non-production.
 */

return [
    'versions' => [
        'supported_framework' => 9,
    ],
    'production' => true,
    'database_enabled' => true,
    'security' => array(
        'hmac_key' => 'CHANGETHISTO20CHARRANDOMSTRING',
        'crypt_key' => 'CHANGETHISTO20CHARRANDOMSTRING',
    ),
    'debug' => true,
    'sanity_check_modules' => [
        WebFramework\SanityCheck\RequiredAuth::class => [
            'db_config.main.php',
        ],
    ],
    'sender_core' => [
        'default_sender' => 'your@email.here',
        'assert_recipient' => 'your@email.here',
    ],
    'definition_files' => [
        '../vendor/avoutic/web-framework/definitions/web_framework_definitions.php',
        '../vendor/avoutic/web-framework-mysql/definitions/definitions.php',
        'web_framework_overrides.php',
        'app_definitions.php',
    ],
    'middlewares' => [
        'pre_routing' => [
            // End of stack
            WebFramework\Middleware\ErrorRedirectMiddleware::class,
            // Start of stack
        ],
        'post_routing' => [
            // End of stack
            WebFramework\Middleware\SecurityHeadersMiddleware::class,
            WebFramework\Middleware\MessageMiddleware::class,
            WebFramework\Middleware\JsonParserMiddleware::class,
            WebFramework\Middleware\BlacklistMiddleware::class,
            WebFramework\Middleware\CsrfValidationMiddleware::class,
            WebFramework\Middleware\IpMiddleware::class,
            Odan\Session\Middleware\SessionStartMiddleware::class,
            // Start of stack
        ],
    ],
    'routes' => [
        \App\Routes\Unauthenticated::class,
    ],
];
?>
