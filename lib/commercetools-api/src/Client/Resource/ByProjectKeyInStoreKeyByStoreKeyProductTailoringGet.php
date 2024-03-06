<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Api\Models\ProductTailoring\ProductTailoringPagedQueryResponse;
use Commercetools\Api\Models\ProductTailoring\ProductTailoringPagedQueryResponseModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ExceptionFactory;
use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Promise\PromiseInterface;

use Psr\Http\Message\ResponseInterface;

/**

 * @psalm-suppress PropertyNotSetInConstructor
 * @template-implements Expandable<ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet>
 * @template-implements Query<ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet>
 * @template-implements Expandable<ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet>
 * @template-implements Sortable<ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet>
 * @template-implements Paging<ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet>
 * @template-implements Query<ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet>
 * @template-implements Errorable<ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet>
 * @template-implements Deprecatable200<ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet>
 */
class ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet extends ApiRequest implements Expandable, Query, Sortable, Paging, Errorable, Deprecatable200
{
    /**
     * @param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $storeKey, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}', '{storeKey}'], [$projectKey, $storeKey], '{projectKey}/in-store/key={storeKey}/product-tailoring');
        parent::__construct($client, 'GET', $uri, $headers, is_object($body) || is_array($body) ? json_encode($body) : $body);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return ErrorResponse|JsonObject|ProductTailoringPagedQueryResponse|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ProductTailoringPagedQueryResponseModel::class;

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
                case '502':
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
     * @return null|T|ErrorResponse|JsonObject|ProductTailoringPagedQueryResponse
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
            function (ResponseInterface $response) use ($resultType) {
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
     * @psalm-param scalar|scalar[] $limit
     */
    public function withLimit($limit): ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $offset
     */
    public function withOffset($offset): ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $withTotal
     */
    public function withWithTotal($withTotal): ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $expand
     */
    public function withExpand($expand): ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet
    {
        return $this->withQueryParam('expand', $expand);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $where
     */
    public function withWhere($where): ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet
    {
        return $this->withQueryParam('where', $where);
    }

    /**
     * @psalm-param string $varName
     * @psalm-param scalar|scalar[] $predicateVar
     */
    public function withPredicateVar(string $varName, $predicateVar): ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet
    {
        return $this->withQueryParam(sprintf('var.%s', $varName), $predicateVar);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $sort
     */
    public function withSort($sort): ByProjectKeyInStoreKeyByStoreKeyProductTailoringGet
    {
        return $this->withQueryParam('sort', $sort);
    }
}
