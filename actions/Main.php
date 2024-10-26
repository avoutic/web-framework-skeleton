<?php

namespace App\Actions;

use App\Core\SkeletonService;
use WebFramework\Core\LatteRenderService;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest as Request;

class Main
{
    public function __construct(
        private LatteRenderService $renderer,
        private SkeletonService $skeletonService,
    ) {
    }

    /**
     * @param array<string, string> $routeArgs
     */
    public function __invoke(Request $request, Response $response, array $routeArgs): ResponseInterface
    {
        $params = [
            'name' => $this->skeletonService->getName(),
        ];

        return $this->renderer->render($request, $response, 'Main.latte', $params);
    }
}
