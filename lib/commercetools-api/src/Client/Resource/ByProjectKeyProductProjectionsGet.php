<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Api\Models\Product\ProductProjectionPagedQueryResponse;
use Commercetools\Api\Models\Product\ProductProjectionPagedQueryResponseModel;
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
 * @template-implements ProjectionSelecting<ByProjectKeyProductProjectionsGet>
 * @template-implements PriceSelecting<ByProjectKeyProductProjectionsGet>
 * @template-implements LocaleProjecting<ByProjectKeyProductProjectionsGet>
 * @template-implements StoreProjectingTailoring<ByProjectKeyProductProjectionsGet>
 * @template-implements AttributeFiltering<ByProjectKeyProductProjectionsGet>
 * @template-implements Expandable<ByProjectKeyProductProjectionsGet>
 * @template-implements Sortable<ByProjectKeyProductProjectionsGet>
 * @template-implements Paging<ByProjectKeyProductProjectionsGet>
 * @template-implements Query<ByProjectKeyProductProjectionsGet>
 * @template-implements Errorable<ByProjectKeyProductProjectionsGet>
 * @template-implements Deprecatable200<ByProjectKeyProductProjectionsGet>
 */
class ByProjectKeyProductProjectionsGet extends ApiRequest implements ProjectionSelecting, PriceSelecting, LocaleProjecting, StoreProjectingTailoring, AttributeFiltering, Expandable, Sortable, Paging, Query, Errorable, Deprecatable200
{
    /**
     * @param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, $body = null, array $headers = [], ?ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '{projectKey}/product-projections');
        parent::__construct($client, 'GET', $uri, $headers, is_object($body) || is_array($body) ? json_encode($body) : $body);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return ErrorResponse|JsonObject|ProductProjectionPagedQueryResponse|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, ?string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ProductProjectionPagedQueryResponseModel::class;

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
     * @return null|T|ErrorResponse|JsonObject|ProductProjectionPagedQueryResponse
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
    public function withStaged($staged): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('staged', $staged);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCurrency
     */
    public function withPriceCurrency($priceCurrency): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('priceCurrency', $priceCurrency);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCountry
     */
    public function withPriceCountry($priceCountry): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('priceCountry', $priceCountry);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCustomerGroup
     */
    public function withPriceCustomerGroup($priceCustomerGroup): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('priceCustomerGroup', $priceCustomerGroup);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCustomerGroupAssignments
     */
    public function withPriceCustomerGroupAssignments($priceCustomerGroupAssignments): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('priceCustomerGroupAssignments', $priceCustomerGroupAssignments);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceChannel
     */
    public function withPriceChannel($priceChannel): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('priceChannel', $priceChannel);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceRecurrencePolicy
     */
    public function withPriceRecurrencePolicy($priceRecurrencePolicy): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('priceRecurrencePolicy', $priceRecurrencePolicy);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $localeProjection
     */
    public function withLocaleProjection($localeProjection): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('localeProjection', $localeProjection);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $storeProjection
     */
    public function withStoreProjection($storeProjection): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('storeProjection', $storeProjection);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $filterAttributes
     */
    public function withFilterAttributes($filterAttributes): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('filter[attributes]', $filterAttributes);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $expand
     */
    public function withExpand($expand): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('expand', $expand);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $sort
     */
    public function withSort($sort): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('sort', $sort);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $limit
     */
    public function withLimit($limit): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $offset
     */
    public function withOffset($offset): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $withTotal
     */
    public function withWithTotal($withTotal): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $where
     */
    public function withWhere($where): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam('where', $where);
    }

    /**
     * @psalm-param string $varName
     * @psalm-param scalar|scalar[] $predicateVar
     */
    public function withPredicateVar(string $varName, $predicateVar): ByProjectKeyProductProjectionsGet
    {
        return $this->withQueryParam(sprintf('var.%s', $varName), $predicateVar);
    }
}
