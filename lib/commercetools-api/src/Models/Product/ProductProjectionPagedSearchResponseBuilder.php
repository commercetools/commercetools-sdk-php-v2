<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductProjectionPagedSearchResponse>
 */
final class ProductProjectionPagedSearchResponseBuilder implements Builder
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
    private $count;

    /**
     * @var ?ProductProjectionCollection
     */
    private $results;

    /**
     * @var FacetResults|?FacetResultsBuilder
     */
    private $facets;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return null|ProductProjectionCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @return null|FacetResults
     */
    public function getFacets()
    {
        return $this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets;
    }

    /**
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResults(?ProductProjectionCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFacets(?FacetResults $facets)
    {
        $this->facets = $facets;

        return $this;
    }

    /**
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
            $this->total,
            $this->offset,
            $this->count,
            $this->results,
            ($this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets)
        );
    }

    public static function of(): ProductProjectionPagedSearchResponseBuilder
    {
        return new self();
    }
}
