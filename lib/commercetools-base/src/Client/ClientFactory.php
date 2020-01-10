<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use Psr\Log\LoggerInterface;

class ClientFactory
{
    /**
     * @psalm-param array<string, callable> $middlewares
     *
     * @throws InvalidArgumentException
     */
    public function createGuzzleClient(Config $config, ?AuthConfig $authConfig = null, ?LoggerInterface $logger = null, array $middlewares = []): HttpClient
    {
        $handler = null;
        if (!is_null($authConfig)) {
            $handler = OAuthHandlerFactory::ofAuthConfig($authConfig);
        }

        return $this->createGuzzleClientForHandler($config, $handler, $logger, $middlewares);
    }

    /**
     * @psalm-param array<string, callable> $middlewares
     *
     * @throws InvalidArgumentException
     */
    public function createGuzzleClientForHandler(Config $config, ?OAuth2Handler $handler = null, ?LoggerInterface $logger = null, array $middlewares = []): HttpClient
    {
        $middlewares = array_merge(
            MiddlewareFactory::createDefaultMiddlewares($handler, $logger, (int) ($config->getOptions()['maxRetries'] ?? 0)),
            $middlewares
        );

        return $this->createGuzzleClientWithOptions($config->getOptions(), $middlewares);
    }

    /**
     * @psalm-param array<string, callable> $middlewares
     *
     * @throws InvalidArgumentException
     */
    public function createGuzzleClientForMiddlewares(
        Config $config,
        array $middlewares = []
    ): HttpClient {
        return $this->createGuzzleClientWithOptions($config->getOptions(), $middlewares);
    }

    public static function of(): ClientFactory
    {
        return new self();
    }

    /**
     * @throws InvalidArgumentException
     * @psalm-param array<int|string, callable> $middlewares
     */
    private function createGuzzleClientWithOptions(array $options, array $middlewares = []): HttpClient
    {
        if (isset($options['handler']) && $options['handler'] instanceof HandlerStack) {
            $stack = $options['handler'];
        } else {
            $stack = HandlerStack::create();
            $options['handler'] = $stack;
        }

        $options = array_replace(
            [
                'allow_redirects' => false,
                'verify' => true,
                'timeout' => 60,
                'connect_timeout' => 10,
                'pool_size' => 25,
            ],
            $options
        );
        foreach ($middlewares as $key => $middleware) {
            if (!is_callable($middleware)) {
                throw new InvalidArgumentException('Middleware isn\'t callable');
            }
            $name = is_numeric($key) ? '' : $key;
            $stack->push($middleware, $name);
        }

        return new HttpClient($options);
    }
}
