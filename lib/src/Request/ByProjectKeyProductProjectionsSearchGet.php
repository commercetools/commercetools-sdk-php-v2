<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Product\ProductProjectionPagedSearchResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductProjectionsSearchGet extends ApiRequest
{
    const RESULT_TYPE = ProductProjectionPagedSearchResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/product-projections/search');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductProjectionPagedSearchResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductProjectionPagedSearchResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $fuzzy
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function withFuzzy($fuzzy): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('fuzzy', $fuzzy);
    }
    /**
     * @param $fuzzyLevel
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function withFuzzyLevel($fuzzyLevel): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('fuzzyLevel', $fuzzyLevel);
    }
    /**
     * @param $staged
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function withStaged($staged): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('staged', $staged);
    }
    /**
     * @param $filter
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function withFilter($filter): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter', $filter);
    }
    /**
     * @param $filterFacets
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function withFilterFacets($filterFacets): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter.facets', $filterFacets);
    }
    /**
     * @param $filterQuery
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function withFilterQuery($filterQuery): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('filter.query', $filterQuery);
    }
    /**
     * @param $facet
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function withFacet($facet): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam('facet', $facet);
    }
    /**
     * @param $text
     * @return ByProjectKeyProductProjectionsSearchGet
     */
    public function withText($locale, $text): ByProjectKeyProductProjectionsSearchGet
    {
        return $this->withQueryParam(sprintf('text.%s', $locale), $text);
    }

}
