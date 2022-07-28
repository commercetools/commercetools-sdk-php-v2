<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Api\Models\Product\ProductProjectionPagedSearchResponse;
use Commercetools\Api\Models\Product\ProductProjectionPagedSearchResponseModel;
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
 * @template-implements Sortable<ByProjectKeyProductProjectionsSearchGet>
 * @template-implements Paging<ByProjectKeyProductProjectionsSearchGet>
 * @template-implements PriceSelecting<ByProjectKeyProductProjectionsSearchGet>
 * @template-implements LocaleProjecting<ByProjectKeyProductProjectionsSearchGet>
 * @template-implements StoreProjecting<ByProjectKeyProductProjectionsSearchGet>
 * @template-implements Expandable<ByProjectKeyProductProjectionsSearchGet>
 * @template-implements Errorable<ByProjectKeyProductProjectionsSearchGet>
 * @template-implements Deprecatable200<ByProjectKeyProductProjectionsSearchGet>
 */
class ByProjectKeyProductProjectionsSearchGet extends ApiRequest implements Sortable, Paging, PriceSelecting, LocaleProjecting, StoreProjecting, Expandable, Errorable, Deprecatable200
{
    /**
     * @param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '{projectKey}/product-projections/search');
        parent::__construct($client, 'GET', $uri, $headers, is_object($body) || is_array($body) ? json_encode($body) : $body);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return ErrorResponse|JsonObject|ProductProjectionPagedSearchResponse|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ProductProjectionPagedSearchResponseModel::class;

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
     * @return null|T|ErrorResponse|JsonObject|ProductProjectionPagedSearchResponse
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
     * @psalm-param scalar|scalar[] $fuzzy
     */
    public function withFuzzy($fuzzy): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('fuzzy', $fuzzy);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $fuzzyLevel
     */
    public function withFuzzyLevel($fuzzyLevel): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('fuzzyLevel', $fuzzyLevel);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $markMatchingVariants
     */
    public function withMarkMatchingVariants($markMatchingVariants): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('markMatchingVariants', $markMatchingVariants);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $staged
     */
    public function withStaged($staged): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('staged', $staged);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $filter
     */
    public function withFilter($filter): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter', $filter);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $filterFacets
     */
    public function withFilterFacets($filterFacets): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter.facets', $filterFacets);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $filterQuery
     */
    public function withFilterQuery($filterQuery): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter.query', $filterQuery);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $facet
     */
    public function withFacet($facet): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('facet', $facet);
    }

    /**
     * @psalm-param string $locale
     * @psalm-param scalar|scalar[] $text
     */
    public function withText(string $locale, $text): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam(sprintf('text.%s', $locale), $text);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $sort
     */
    public function withSort($sort): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('sort', $sort);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $limit
     */
    public function withLimit($limit): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $offset
     */
    public function withOffset($offset): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $withTotal
     */
    public function withWithTotal($withTotal): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCurrency
     */
    public function withPriceCurrency($priceCurrency): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('priceCurrency', $priceCurrency);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCountry
     */
    public function withPriceCountry($priceCountry): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('priceCountry', $priceCountry);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceCustomerGroup
     */
    public function withPriceCustomerGroup($priceCustomerGroup): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('priceCustomerGroup', $priceCustomerGroup);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $priceChannel
     */
    public function withPriceChannel($priceChannel): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('priceChannel', $priceChannel);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $localeProjection
     */
    public function withLocaleProjection($localeProjection): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('localeProjection', $localeProjection);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $storeProjection
     */
    public function withStoreProjection($storeProjection): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('storeProjection', $storeProjection);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $expand
     */
    public function withExpand($expand): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('expand', $expand);
    }
}
