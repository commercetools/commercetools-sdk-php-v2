<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionModel;
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
class ByProjectKeyProductProjectionsKeyByKeyGet extends ApiRequest
{
    /**
     * @psalm-param scalar $projectKey
     * @psalm-param scalar $key
     *
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param mixed $projectKey
     * @param mixed $key
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [], Client $client = null)
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '{projectKey}/product-projections/key={key}');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return ErrorResponse|JsonObject|ProductProjection|T|null
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
                    $resultType = ProductProjectionModel::class;

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
     * @return null|ErrorResponse|JsonObject|ProductProjection
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
     * @psalm-param scalar $staged
     *
     * @param mixed $staged
     */
    public function withStaged($staged): ByProjectKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('staged', $staged);
    }

    /**
     * @psalm-param scalar $priceCurrency
     *
     * @param mixed $priceCurrency
     */
    public function withPriceCurrency($priceCurrency): ByProjectKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('priceCurrency', $priceCurrency);
    }

    /**
     * @psalm-param scalar $priceCountry
     *
     * @param mixed $priceCountry
     */
    public function withPriceCountry($priceCountry): ByProjectKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('priceCountry', $priceCountry);
    }

    /**
     * @psalm-param scalar $priceCustomerGroup
     *
     * @param mixed $priceCustomerGroup
     */
    public function withPriceCustomerGroup($priceCustomerGroup): ByProjectKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('priceCustomerGroup', $priceCustomerGroup);
    }

    /**
     * @psalm-param scalar $priceChannel
     *
     * @param mixed $priceChannel
     */
    public function withPriceChannel($priceChannel): ByProjectKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('priceChannel', $priceChannel);
    }

    /**
     * @psalm-param scalar $expand
     *
     * @param mixed $expand
     */
    public function withExpand($expand): ByProjectKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('expand', $expand);
    }
}
