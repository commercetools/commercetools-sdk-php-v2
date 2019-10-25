<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Psr\SimpleCache\CacheInterface;

class MiddlewareFactory
{
    /**
     * @psalm-return array<string, callable>
     * @psalm-param CacheItemPoolInterface|CacheInterface|null $cache
     *
     * @param null|mixed $cache
     */
    public static function createDefaultMiddlewares(
        LoggerInterface $logger,
        AuthConfig $authConfig,
        $cache = null
    ) {
        $handler = OAuthHandlerFactory::ofAuthConfig($authConfig, $cache);

        return [
            'oauth' => self::createMiddlewareForOAuthHandler($handler),
            'reauth' => self::createReauthenticateMiddleware($handler),
            'logger' => self::createLoggerMiddleware($logger),
        ];
    }

    /**
     * @psalm-return callable()
     */
    public static function createMiddlewareForOAuthHandler(OAuth2Handler $handler)
    {
        return Middleware::mapRequest($handler);
    }

    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|null $cache
     * @psalm-return callable()
     *
     * @param null|mixed $cache
     */
    public static function createOAuthMiddleware(AuthConfig $authConfig, $cache = null)
    {
        $handler = OAuthHandlerFactory::ofAuthConfig($authConfig, $cache);

        return Middleware::mapRequest($handler);
    }

    /**
     * @psalm-return callable()
     */
    public static function createOAuthMiddlewareForProvider(TokenProvider $provider)
    {
        $handler = OAuthHandlerFactory::ofProvider($provider);

        return Middleware::mapRequest($handler);
    }

    /**
     * @psalm-return callable()
     */
    public static function createLoggerMiddleware(LoggerInterface $logger, string $logLevel = LogLevel::INFO, string $template = MessageFormatter::CLF)
    {
        return Middleware::log($logger, new MessageFormatter($template), $logLevel);
    }

    /**
     * Middleware that reauthenticates on invalid token error.
     *
     * @return callable returns a function that accepts the next handler
     */
    public static function createReauthenticateMiddleware(OAuth2Handler $oauthHandler, int $maxRetries = 1)
    {
        return
            /**
             * @psalm-param callable(RequestInterface, array{reauth: int}): PromiseInterface $handler
             * @psalm-return callable(RequestInterface, array{reauth: int})
             */
            function (callable $handler) use ($oauthHandler, $maxRetries) {
                return
                    /**
                     * @psalm-return PromiseInterface
                     * @psalm-param array{reauth: int} $options
                     */
                    function (RequestInterface $request, array $options) use ($handler, $oauthHandler, $maxRetries): PromiseInterface {
                        return $handler($request, $options)->then(
                            function (ResponseInterface $response) use (
                                $request,
                                $handler,
                                $oauthHandler,
                                $options,
                                $maxRetries
                            ) {
                                if (401 == $response->getStatusCode()) {
                                    if (!isset($options['reauth'])) {
                                        $options['reauth'] = 0;
                                    }
                                    if ($options['reauth'] < $maxRetries) {
                                        ++$options['reauth'];
                                        $token = $oauthHandler->refreshToken();
                                        $request = $request->withHeader(
                                            'Authorization',
                                            'Bearer '.$token->getValue()
                                        );

                                        return $handler($request, $options);
                                    }
                                }

                                return $response;
                            }
                        );
                    };
            };
    }
}
