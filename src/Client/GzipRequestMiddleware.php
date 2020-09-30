<?php


namespace Commercetools\Client;

use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\RequestInterface;
use function gzencode;

class GzipRequestMiddleware
{
    public static function gzipEnabled(): bool
    {
        return function_exists('gzencode');
    }

    public function __invoke(RequestInterface $request, array $options = []): RequestInterface
    {
        $content = gzencode($request->getBody()->getContents());
        $request = Utils::modifyRequest($request, [
            'body' => $content,
            'set_headers' => [
                'Content-Encoding' => 'gzip',
                'Content-Length' => strlen($content),
            ],
        ]);
        return $request;
    }
}
