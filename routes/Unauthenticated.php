<?php

namespace App\Routes;

use Slim\App;
use WebFramework\Core\RouteSet;

class Unauthenticated implements RouteSet
{
    public function register(App $app): void
    {
        $app->get('/', \App\Actions\Main::class);
    }
}
