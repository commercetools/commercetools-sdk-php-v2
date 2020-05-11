<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class MiddlewareFactory
{
    /**
     * @psalm-return array<string, callable>
     */
    public static function createDefaultMiddlewares(
        ?OAuth2Handler $handler = null,
        ?LoggerInterface $logger = null,
        int $maxRetries = 0,
        ?CorrelationIdProvider $correlationIdProvider = null
    ) {
        $middlewares = [];
        if (!is_null($handler)) {
            $middlewares['oauth'] = self::createMiddlewareForOAuthHandler($handler);
            $middlewares['reauth'] = self::createReauthenticateMiddleware($handler);
        }
        if (!is_null($logger)) {
            $middlewares['logger'] = self::createLoggerMiddleware($logger);
        }
        if ($maxRetries > 0) {
            $middlewares['retryNA'] = self::createRetryNAMiddleware($maxRetries);
        }
        $middlewares['correlation_id'] = self::createCorrelationIdMiddleware($correlationIdProvider ?? new DefaultCorrelationIdProvider());
        
        return $middlewares;
    }

    /**
     * @psalm-return callable
     */
    public static function createCorrelationIdMiddleware(CorrelationIdProvider $correlationIdProvider)
    {
        return Middleware::mapRequest(
            function (RequestInterface $request) use ($correlationIdProvider) {
               return $request->withAddedHeader(
                   'X_CORRELATION_ID',
                   $correlationIdProvider->getCorrelationId()
               );
           }
        );
    }

    /**
     * @psalm-return callable
     */
    public static function createRetryNAMiddleware(int $maxRetries)
    {
        return Middleware::retry(
            function (
                int $retries,
                RequestInterface $request,
                ResponseInterface $response = null,
                \Exception $error = null
            ) use ($maxRetries) {
                if ($response instanceof ResponseInterface && $response->getStatusCode() < 500) {
                    return false;
                }
                if ($retries < $maxRetries) {
                    return false;
                }
                if ($error instanceof ServerException && $error->getCode() == 503) {
                    return true;
                }
                if ($response instanceof ResponseInterface && $response->getStatusCode() == 503) {
                    return true;
                }
                return false;
            }
        );
    }

    /**
     * @psalm-return callable
     */
    public static function createMiddlewareForOAuthHandler(OAuth2Handler $handler)
    {
        return Middleware::mapRequest($handler);
    }

    /**
     * @psalm-return callable
     */
    public static function createLoggerMiddleware(LoggerInterface $logger, string $logLevel = LogLevel::INFO, string $template = MessageFormatter::CLF)
    {
        return Middleware::log($logger, new MessageFormatter($template), $logLevel);
    }

    /**
     * Middleware that reauthenticates on invalid token error
     *
     * @return callable Returns a function that accepts the next handler.
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
                                if ($response->getStatusCode() == 401) {
                                    if (!isset($options['reauth'])) {
                                        $options['reauth'] = 0;
                                    }
                                    if ($options['reauth'] < $maxRetries) {
                                        $options['reauth']++;
                                        $token = $oauthHandler->refreshToken();
                                        $request = $request->withHeader(
                                            'Authorization',
                                            'Bearer ' . $token->getValue()
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
