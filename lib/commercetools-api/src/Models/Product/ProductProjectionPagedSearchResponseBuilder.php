<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductProjectionPagedSearchResponse>
 */
final class ProductProjectionPagedSearchResponseBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var ?int
     */
    private $offset;

    /**

     * @var ?int
     */
    private $count;

    /**

     * @var ?int
     */
    private $total;

    /**

     * @var ?ProductProjectionCollection
     */
    private $results;

    /**

     * @var null|FacetResults|FacetResultsBuilder
     */
    private $facets;

    /**
     * <p>The maximum number of results returned on a <a href="/../api/projects/product-projection-search#pagination">page</a>.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>The starting point for the retrieved <a href="/../api/projects/product-projection-search#pagination">paginated</a> result.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>Actual number of results returned.</p>
     *

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>Total number of results matching the query.</p>
     *

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p><a href="ctp:api:type:ProductProjection">ProductProjections</a> where at least one <a href="ctp:api:type:ProductVariant">ProductVariant</a> matches the search query, provided with the <code>text.{language}</code> and/or <code>filter.query</code> or <code>filter</code> query parameter.
     * If the query parameter <code>markMatchingVariants=true</code> was provided with the request, the <a href="/../api/projects/product-projection-search#matching-variants">matching variants</a> are marked as such.</p>
     *

     * @return null|ProductProjectionCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * <p>Facet results for each <a href="/../api/projects/product-projection-search#facets">facet expression</a> specified in the search request.</p>
     * <p>Only present if at least one <code>facet</code> parameter was provided with the search request.</p>
     *

     * @return null|FacetResults
     */
    public function getFacets()
    {
        return $this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?ProductProjectionCollection $results
     * @return $this
     */
    public function withResults(?ProductProjectionCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @param ?FacetResults $facets
     * @return $this
     */
    public function withFacets(?FacetResults $facets)
    {
        $this->facets = $facets;

        return $this;
    }

    /**
     * @deprecated use withFacets() instead
     * @return $this
     */
    public function withFacetsBuilder(?FacetResultsBuilder $facets)
    {
        $this->facets = $facets;

        return $this;
    }

    public function build(): ProductProjectionPagedSearchResponse
    {
        return new ProductProjectionPagedSearchResponseModel(
            $this->limit,
            $this->offset,
            $this->count,
            $this->total,
            $this->results,
            $this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets
        );
    }

    public static function of(): ProductProjectionPagedSearchResponseBuilder
    {
        return new self();
    }
}
