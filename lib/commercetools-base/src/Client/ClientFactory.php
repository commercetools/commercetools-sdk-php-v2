<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/

namespace Commercetools\Client;

use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;

class ClientFactory
{
    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|null $cache
     * @psalm-param array<string, callable> $middlewares
     * @throws InvalidArgumentException
     */
    public function createGuzzleClient(Config $config, AuthConfig $authConfig, LoggerInterface $logger, $cache = null, array $middlewares = []): HttpClient
    {
        $middlewares = array_merge(
           MiddlewareFactory::createDefaultMiddlewares($logger, $authConfig, $cache),
           $middlewares
        );
        return $this->createGuzzle6Client($config->getOptions(), $middlewares);
    }

    /**
     * @psalm-param array<string, callable> $middlewares
     * @throws InvalidArgumentException
     */
    public function createGuzzleClientForMiddlewares(
       Config $config,
       array $middlewares = []): HttpClient
    {
        return $this->createGuzzle6Client($config->getOptions(), $middlewares);
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

        $options = array_merge(
            [
                'allow_redirects' => false,
                'verify' => true,
                'timeout' => 60,
                'connect_timeout' => 10,
                'pool_size' => 25
            ],
            $options
        );
        /**
         * @var string $key
         * @var callable $middleware
         */
        foreach ($middlewares as $key => $middleware) {
            if(!is_callable($middleware)) {
                throw new InvalidArgumentException('Middleware isn\'t callable');
            }
            $name = is_numeric($key) ? '' : $key;
            $stack->push($middleware, $name);
        }

        $client = new HttpClient($options);

        return $client;
    }

    public static function of(): ClientFactory
    {
        return new self();
    }
}