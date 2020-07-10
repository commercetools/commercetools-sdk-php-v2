<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Exception;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

class ExceptionFactory
{
    public static function createServerException(
        ServerException $e,
        ApiRequest $request,
        ?ResponseInterface $response,
        ?JsonObject $result
    ): ApiServerException {
        if (is_null($response)) {
            $message = 'Error completing request: ' . $e->getMessage();
            return new ApiServerException($message, null, $request, new Response(400), $e, []);
        }

        $message = 'Server error response [url] ' . (string)$request->getUri()
             . ' [status code] ' . (string)$response->getStatusCode()
             . ' [reason phrase] ' . $response->getReasonPhrase();

        switch ($response->getStatusCode()) {
            case 500:
                return new InternalServerErrorException($message, $result, $request, $response, $e, []);
            case 502:
                return new BadGatewayException($message, $result, $request, $response, $e, []);
            case 503:
                return new ServiceUnavailableException($message, $result, $request, $response, $e, []);
            case 504:
                return new GatewayTimeoutException($message, $result, $request, $response, $e, []);
        }

        return new ApiServerException($message, $result, $request, $response, $e, []);
    }

    public static function createClientException(
        ClientException $e,
        ApiRequest $request,
        ?ResponseInterface $response,
        ?JsonObject $result
    ): ApiClientException {
        if (is_null($response)) {
            $message = 'Error completing request: ' . $e->getMessage();
            return new ApiClientException($message, null, $request, new Response(400), $e, []);
        }

        $message = 'Client error response [url] ' . (string)$request->getUri()
             . ' [status code] ' . (string)$response->getStatusCode()
             . ' [reason phrase] ' . $response->getReasonPhrase();

        switch ($response->getStatusCode()) {
            case 400:
                return new BadRequestException($message, $result, $request, $response, $e, []);
            case 401:
                return new UnauthorizedException($message, $result, $request, $response, $e, []);
            case 403:
                return new ForbiddenException($message, $result, $request, $response, $e, []);
            case 404:
                return new NotFoundException($message, $result, $request, $response, $e, []);
            case 409:
                return new ConcurrentModificationException($message, $result, $request, $response, $e, []);
        }

        return new ApiClientException($message, $result, $request, $response, $e, []);
    }
}
