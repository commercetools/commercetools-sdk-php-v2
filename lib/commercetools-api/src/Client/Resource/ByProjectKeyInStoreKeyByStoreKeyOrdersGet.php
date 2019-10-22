<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Api\Models\Order\OrderPagedQueryResponse;
use Commercetools\Api\Models\Order\OrderPagedQueryResponseModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\ResultMapper;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyInStoreKeyByStoreKeyOrdersGet extends ApiRequest
{
    /**
     * @psalm-param scalar $projectKey
     * @psalm-param scalar $storeKey
     *
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param array $headers
     * @param mixed $projectKey
     * @param mixed $storeKey
     */
    public function __construct($projectKey, $storeKey, $body = null, array $headers = [], Client $client = null)
    {
        $uri = str_replace(['{projectKey}', '{storeKey}'], [$projectKey, $storeKey], '{projectKey}/in-store/key={storeKey}/orders');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return ErrorResponse|JsonObject|OrderPagedQueryResponse|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        $mapper = new ResultMapper();
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = OrderPagedQueryResponseModel::class;

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

        return $mapper->mapResponseToClass($resultType, $response);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @param array $options
     *
     * @return null|ErrorResponse|JsonObject|OrderPagedQueryResponse
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch (ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }

        return $this->mapFromResponse($response, $resultType);
    }

    /**
     * @psalm-param scalar $expand
     *
     * @param mixed $expand
     */
    public function withExpand($expand): ByProjectKeyInStoreKeyByStoreKeyOrdersGet
    {
        return $this->withQueryParam('expand', $expand);
    }

    /**
     * @psalm-param scalar $where
     *
     * @param mixed $where
     */
    public function withWhere($where): ByProjectKeyInStoreKeyByStoreKeyOrdersGet
    {
        return $this->withQueryParam('where', $where);
    }

    /**
     * @psalm-param scalar $sort
     *
     * @param mixed $sort
     */
    public function withSort($sort): ByProjectKeyInStoreKeyByStoreKeyOrdersGet
    {
        return $this->withQueryParam('sort', $sort);
    }

    /**
     * @psalm-param scalar $limit
     *
     * @param mixed $limit
     */
    public function withLimit($limit): ByProjectKeyInStoreKeyByStoreKeyOrdersGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     * @psalm-param scalar $offset
     *
     * @param mixed $offset
     */
    public function withOffset($offset): ByProjectKeyInStoreKeyByStoreKeyOrdersGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     * @psalm-param scalar $withTotal
     *
     * @param mixed $withTotal
     */
    public function withWithTotal($withTotal): ByProjectKeyInStoreKeyByStoreKeyOrdersGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }
}
