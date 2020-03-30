<?php declare(strict_types=1);

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

require __DIR__ . '/vendor/autoload.php';

return new class implements RequestHandlerInterface {
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $body = json_decode($request->getBody(), true);
        $action = $body['action'] ?? '';
        return new Response($action == 'create' ? 201 : 200);
    }
};
