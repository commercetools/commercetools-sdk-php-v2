<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodPagedQueryResponse;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodPagedQueryResponseModel;
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
class ByProjectKeyShippingMethodsGet extends ApiRequest
{
    /**
     * @psalm-param scalar $projectKey
     *
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param mixed $projectKey
     */
    public function __construct($projectKey, $body = null, array $headers = [], Client $client = null)
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '{projectKey}/shipping-methods');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return ErrorResponse|JsonObject|ShippingMethodPagedQueryResponse|T|null
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
                    $resultType = ShippingMethodPagedQueryResponseModel::class;

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
     * @return null|ErrorResponse|JsonObject|ShippingMethodPagedQueryResponse
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
     * @psalm-param scalar $shippingMethodId
     *
     * @param mixed $shippingMethodId
     */
    public function withShippingMethodId($shippingMethodId): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('shipping-methodId', $shippingMethodId);
    }

    /**
     * @psalm-param scalar $country
     *
     * @param mixed $country
     */
    public function withCountry($country): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('country', $country);
    }

    /**
     * @psalm-param scalar $state
     *
     * @param mixed $state
     */
    public function withState($state): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('state', $state);
    }

    /**
     * @psalm-param scalar $currency
     *
     * @param mixed $currency
     */
    public function withCurrency($currency): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('currency', $currency);
    }

    /**
     * @psalm-param scalar $expand
     *
     * @param mixed $expand
     */
    public function withExpand($expand): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('expand', $expand);
    }

    /**
     * @psalm-param scalar $where
     *
     * @param mixed $where
     */
    public function withWhere($where): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('where', $where);
    }

    /**
     * @psalm-param scalar $sort
     *
     * @param mixed $sort
     */
    public function withSort($sort): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('sort', $sort);
    }

    /**
     * @psalm-param scalar $limit
     *
     * @param mixed $limit
     */
    public function withLimit($limit): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     * @psalm-param scalar $offset
     *
     * @param mixed $offset
     */
    public function withOffset($offset): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     * @psalm-param scalar $withTotal
     *
     * @param mixed $withTotal
     */
    public function withWithTotal($withTotal): ByProjectKeyShippingMethodsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }
}
