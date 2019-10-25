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
    public function createGuzzleClient(Config $config, OAuth2Handler $handler, LoggerInterface $logger, array $middlewares = []): HttpClient
    {
        $middlewares = array_merge(
            MiddlewareFactory::createDefaultMiddlewares($logger, $handler),
            $middlewares
        );

        return $this->createGuzzle6Client($config->getOptions(), $middlewares);
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
        return $this->createGuzzle6Client($config->getOptions(), $middlewares);
    }

    public static function of(): ClientFactory
    {
        return new self();
    }

    /**
     * @throws InvalidArgumentException
     */
    private function createGuzzle6Client(array $options, array $middlewares = []): HttpClient
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
        /**
         * @var string
         * @var callable $middleware
         */
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
