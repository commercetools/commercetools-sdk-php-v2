<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Client\Resource;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Promise\PromiseInterface;
use Commercetools\Exception\ExceptionFactory;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ApiClientException;
use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\History\Models\ChangeHistoryPagedQueryResponse;
use Commercetools\History\Models\ChangeHistoryPagedQueryResponseModel;
use Commercetools\History\Models\ErrorResponse;
use Commercetools\History\Models\ErrorResponseModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyGet extends ApiRequest
{
    /**
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '{projectKey}');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return ChangeHistoryPagedQueryResponse|ErrorResponse|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ChangeHistoryPagedQueryResponseModel::class;

                    break;
                case '400':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '401':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '403':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '500':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '503':
                    $resultType = ErrorResponseModel::class;

                    break;
                default:
                    $resultType = JsonObjectModel::class;

                    break;
            }
        }

        return $resultType::of($this->responseData($response));
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @return null|ChangeHistoryPagedQueryResponse|ErrorResponse|JsonObject
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $e = ExceptionFactory::createServerException($e, $this, $response, $this->mapFromResponse($response, $resultType));
            throw $e;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $e = ExceptionFactory::createClientException($e, $this, $response, $this->mapFromResponse($response, $resultType));
            throw $e;
        }

        return $this->mapFromResponse($response, $resultType);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @return PromiseInterface
     */
    public function executeAsync(array $options = [], string $resultType = null)
    {
        return $this->sendAsync($options)->then(
            function(ResponseInterface $response) use ($resultType) {
                return $this->mapFromResponse($response, $resultType);
            },
            function (RequestException $e) use ($resultType) {
                $response = $e->getResponse();
                if ($e instanceof ServerException) {
                    $e = ExceptionFactory::createServerException($e, $this, $response, $this->mapFromResponse($response, $resultType));
                }
                if ($e instanceof ClientException) {
                    $e = ExceptionFactory::createClientException($e, $this, $response, $this->mapFromResponse($response, $resultType));
                }
                throw $e;
            }
        );
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $resourceType
     */
    public function withResourceType($resourceType): ByProjectKeyGet
    {
        return $this->withQueryParam('resourceType', $resourceType);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $dateFrom
     */
    public function withDateFrom($dateFrom): ByProjectKeyGet
    {
        return $this->withQueryParam('date.from', $dateFrom);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $dateTo
     */
    public function withDateTo($dateTo): ByProjectKeyGet
    {
        return $this->withQueryParam('date.to', $dateTo);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $limit
     */
    public function withLimit($limit): ByProjectKeyGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $offset
     */
    public function withOffset($offset): ByProjectKeyGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $userId
     */
    public function withUserId($userId): ByProjectKeyGet
    {
        return $this->withQueryParam('userId', $userId);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $changeType
     */
    public function withChangeType($changeType): ByProjectKeyGet
    {
        return $this->withQueryParam('changeType', $changeType);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $clientId
     */
    public function withClientId($clientId): ByProjectKeyGet
    {
        return $this->withQueryParam('clientId', $clientId);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $resourceId
     */
    public function withResourceId($resourceId): ByProjectKeyGet
    {
        return $this->withQueryParam('resourceId', $resourceId);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $source
     */
    public function withSource($source): ByProjectKeyGet
    {
        return $this->withQueryParam('source', $source);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $changes
     */
    public function withChanges($changes): ByProjectKeyGet
    {
        return $this->withQueryParam('changes', $changes);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $customerId
     */
    public function withCustomerId($customerId): ByProjectKeyGet
    {
        return $this->withQueryParam('customerId', $customerId);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $expand
     */
    public function withExpand($expand): ByProjectKeyGet
    {
        return $this->withQueryParam('expand', $expand);
    }
}
