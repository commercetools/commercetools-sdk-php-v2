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
 * @template-implements ProjectionSelecting<ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet>
 * @template-implements PriceSelecting<ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet>
 * @template-implements LocaleProjecting<ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet>
 * @template-implements Expandable<ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet>
 * @template-implements Errorable<ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet>
 * @template-implements Deprecatable200<ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet>
 */
class ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet extends ApiRequest implements ProjectionSelecting, PriceSelecting, LocaleProjecting, Expandable, Errorable, Deprecatable200
{
    /**
     * @param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $storeKey, string $key, $body = null, array $headers = [], ?ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}', '{storeKey}', '{key}'], [$projectKey, $storeKey, $key], '{projectKey}/in-store/key={storeKey}/product-projections/key={key}');
        parent::__construct($client, 'GET', $uri, $headers, is_object($body) || is_array($body) ? json_encode($body) : $body);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return ErrorResponse|JsonObject|ProductProjection|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, ?string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
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
     * @return null|T|ErrorResponse|JsonObject|ProductProjection
     */
    public function execute(array $options = [], ?string $resultType = null)
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
    public function executeAsync(array $options = [], ?string $resultType = null)
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
     * @psalm-param scalar|scalar[] $staged
     */
    public function withStaged($staged): ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('staged', $staged);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCurrency
     */
    public function withPriceCurrency($priceCurrency): ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('priceCurrency', $priceCurrency);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCountry
     */
    public function withPriceCountry($priceCountry): ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('priceCountry', $priceCountry);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCustomerGroup
     */
    public function withPriceCustomerGroup($priceCustomerGroup): ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('priceCustomerGroup', $priceCustomerGroup);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceChannel
     */
    public function withPriceChannel($priceChannel): ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('priceChannel', $priceChannel);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $localeProjection
     */
    public function withLocaleProjection($localeProjection): ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('localeProjection', $localeProjection);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $expand
     */
    public function withExpand($expand): ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyGet
    {
        return $this->withQueryParam('expand', $expand);
    }
}
