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
    private $count;

    /**
     * @var ?int
     */
    private $total;

    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?ProductProjectionCollection
     */
    private $results;

    /**
     * @var null|FacetResults|FacetResultsBuilder
     */
    private $facets;

    /**
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
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
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

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
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

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
            $this->count,
            $this->total,
            $this->offset,
            $this->results,
            $this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets
        );
    }

    public static function of(): ProductProjectionPagedSearchResponseBuilder
    {
        return new self();
    }
}
