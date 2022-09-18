<?php
return array(
    'versions' => array(
        'supported_framework' => 4,
    ),
    'database_enabled' => true,
    'security' => array(
        'hmac_key' => 'CHANGETHISTO20CHARRANDOMSTRING',
        'crypt_key' => 'CHANGETHISTO20CHARRANDOMSTRING',
    ),
    'debug' => true,
    'sender_core' => array(
        'default_sender' => 'your@email.here',
        'handler_class' => 'WebFramework\\Core\\PostmarkSender',
        'assert_recipient' => 'your@email.here',
    ),
);
?>
