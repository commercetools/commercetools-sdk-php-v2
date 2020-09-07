<?php


namespace Commercetools\Client;

use Psr\Http\Message\RequestInterface;
use function GuzzleHttp\Psr7\modify_request;

class GzipRequestMiddleware
{
    public static function gzipEnabled(): bool
    {
        return function_exists('gzencode');
    }

    public function __invoke(RequestInterface $request, array $options = []): RequestInterface
    {
        $content = \gzencode($request->getBody()->getContents());
        $request = modify_request($request, [
            'body' => $content,
            'set_headers' => [
                'Content-Encoding' => 'gzip',
                'Content-Length' => strlen($content),
            ],
        ]);
        return $request;
    }
}
