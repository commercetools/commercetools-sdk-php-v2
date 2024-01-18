<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductPagedSearchResponse>
 */
final class ProductPagedSearchResponseBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $total;

    /**

     * @var ?int
     */
    private $offset;

    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var null|ProductSearchFacetResult|ProductSearchFacetResultBuilder
     */
    private $facets;

    /**

     * @var ?ProductSearchHitCollection
     */
    private $hits;

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
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>Results of faceting.</p>
     *

     * @return null|ProductSearchFacetResult
     */
    public function getFacets()
    {
        return $this->facets instanceof ProductSearchFacetResultBuilder ? $this->facets->build() : $this->facets;
    }

    /**
     * <p>Actual results.</p>
     *

     * @return null|ProductSearchHitCollection
     */
    public function getHits()
    {
        return $this->hits;
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
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
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
     * @param ?ProductSearchFacetResult $facets
     * @return $this
     */
    public function withFacets(?ProductSearchFacetResult $facets)
    {
        $this->facets = $facets;

        return $this;
    }

    /**
     * @param ?ProductSearchHitCollection $hits
     * @return $this
     */
    public function withHits(?ProductSearchHitCollection $hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * @deprecated use withFacets() instead
     * @return $this
     */
    public function withFacetsBuilder(?ProductSearchFacetResultBuilder $facets)
    {
        $this->facets = $facets;

        return $this;
    }

    public function build(): ProductPagedSearchResponse
    {
        return new ProductPagedSearchResponseModel(
            $this->total,
            $this->offset,
            $this->limit,
            $this->facets instanceof ProductSearchFacetResultBuilder ? $this->facets->build() : $this->facets,
            $this->hits
        );
    }

    public static function of(): ProductPagedSearchResponseBuilder
    {
        return new self();
    }
}
