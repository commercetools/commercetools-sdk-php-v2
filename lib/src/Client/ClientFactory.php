<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Client;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use Commercetools\Client\Subscriber\Log\Formatter;
use Commercetools\Client\Subscriber\Log\LogSubscriber;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Event\BeforeEvent;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Message\RequestInterface as GuzzleRequestInterface;
use GuzzleHttp\Message\ResponseInterface as GuzzleResponseInferface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class ClientFactory
{
    /**
     * @var bool
     */
    private static $isGuzzle6;

    /**
     * @param Config|array $config
     * @param LoggerInterface $logger
     * @param CacheItemPoolInterface $cache
     * @param TokenProvider $provider
     * @return HttpClient
     */
    public static function create(
        $config = [],
        LoggerInterface $logger = null,
        CacheItemPoolInterface $cache = null,
        TokenProvider $provider = null
    ) {
        $factory = new static();

        return $factory->createClient($config, $logger, $cache, $provider);
    }

    /**
     * @param Config|array $config
     * @return Config
     * @throws \InvalidArgumentException
     */
    private function createConfig($config): Config
    {
        if ($config instanceof Config) {
            return $config;
        }
        if (is_array($config)) {
            return new Config($config);
        }
        throw new \InvalidArgumentException();
    }

    /**
     * @param Config|array $config
     * @param LoggerInterface $logger
     * @param CacheItemPoolInterface $cache
     * @param TokenProvider $provider
     * @return HttpClient
     */
    public function createClient(
        $config,
        LoggerInterface $logger = null,
        CacheItemPoolInterface $cache = null,
        TokenProvider $provider = null
    ) {
        $config = $this->createConfig($config);

        if (is_null($cache)) {
            $cacheDir = $config->getCacheDir();

            $filesystemAdapter = new Local($cacheDir);
            $filesystem        = new Filesystem($filesystemAdapter);
            $cache = new FilesystemCachePool($filesystem);
        }
        $credentials = $config->getCredentials()->toArray();
        $oauthHandler = $this->getHandler($credentials, $config->getAuthUrl(), $cache, $provider);

        $options = $config->getOptions();
        if (self::isGuzzle6()) {
            return $this->createGuzzle6Client($options, $logger, $oauthHandler);
        } else {
            return $this->createGuzzle5Client($options, $logger, $oauthHandler);
        }
    }

    /**
     * @param array $options
     * @param LoggerInterface|null $logger
     * @param OAuth2Handler $oauthHandler
     * @return HttpClient
     */
    private function createGuzzle6Client(
        array $options,
        LoggerInterface $logger = null,
        OAuth2Handler $oauthHandler
    ): HttpClient {
        if (isset($options['handler']) && $options['handler'] instanceof HandlerStack) {
            $handler = $options['handler'];
        } else {
            $handler = HandlerStack::create();
            $options['handler'] = $handler;
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

        if (!is_null($logger)) {
            $handler->push(Middleware::log($logger, new MessageFormatter()));
        }
        $handler->push(
            Middleware::mapRequest($oauthHandler),
            'oauth_2_0'
        );

        $client = new HttpClient($options);

        return $client;
    }


    /**
     * @param array $options
     * @param LoggerInterface|null $logger
     * @param OAuth2Handler $oauthHandler
     * @return HttpClient
     */
    private function createGuzzle5Client(
        array $options,
        LoggerInterface $logger = null,
        OAuth2Handler $oauthHandler
    ): HttpClient {
        if (isset($options['base_uri'])) {
            $options['base_url'] = $options['base_uri'];
            unset($options['base_uri']);
        }
        if (isset($options['headers'])) {
            $options['defaults']['headers'] = $options['headers'];
            unset($options['headers']);
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
        $client = new HttpClient($options);
        if (!is_null($logger)) {
            if ($logger instanceof LoggerInterface) {
                $formatter = new Formatter();
                $client->getEmitter()->attach(new LogSubscriber($logger, $formatter, LogLevel::INFO));
            }
        }

        $client->getEmitter()->on('before', function(BeforeEvent $e) use ($oauthHandler) {
            $e->getRequest()->setHeader('Authorization', $oauthHandler->getAuthorizationHeader());
        });

        return $client;
    }

    /**
     * @param RequestInterface $psrRequest
     * @param HttpClient $client
     * @return GuzzleRequestInterface|RequestInterface
     */
    public static function createRequest(RequestInterface $psrRequest, HttpClient $client)
    {
        if (self::isGuzzle6()) {
            return $psrRequest;
        }
        $options = [
            'headers' => $psrRequest->getHeaders(),
            'body' => (string)$psrRequest->getBody()
        ];

        return $client->createRequest($psrRequest->getMethod(), (string)$psrRequest->getUri(), $options);
    }

    /**
     * @param GuzzleResponseInferface|ResponseInterface $response
     * @return ResponseInterface
     */
    public static function createResponse($response): ResponseInterface
    {
        if ($response instanceof ResponseInterface) {
            return $response;
        }
        if ($response instanceof GuzzleResponseInferface) {
            return new Response(
                $response->getStatusCode(),
                $response->getHeaders(),
                (string)$response->getBody()
            );
        }

        throw new \InvalidArgumentException(
            'Argument 1 must be an instance of Psr\Http\Message\ResponseInterface ' .
            'or GuzzleHttp\Message\ResponseInterface'
        );
    }

    /**
     * @param array $credentials
     * @param string $accessTokenUrl
     * @param CacheItemPoolInterface $cache
     * @param TokenProvider $provider
     * @return OAuth2Handler
     */
    private function getHandler(
        array $credentials,
        string $accessTokenUrl,
        CacheItemPoolInterface $cache = null,
        TokenProvider $provider = null
    ): OAuth2Handler {
        if (is_null($provider)) {
            $provider = new CredentialTokenProvider(
                new HttpClient(),
                $accessTokenUrl,
                $credentials
            );
        }
        return new OAuth2Handler($provider, $cache);
    }

    /**
     * @return bool
     */
    private static function isGuzzle6(): bool {
        if (is_null(self::$isGuzzle6)) {
            if (version_compare(HttpClient::VERSION, '6.0.0', '>=')) {
                self::$isGuzzle6 = true;
            } else {
                self::$isGuzzle6 = false;
            }
        }
        return self::$isGuzzle6;
    }
}
