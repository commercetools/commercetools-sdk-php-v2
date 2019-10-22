<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Product\FacetResults;
use Commercetools\Api\Models\Product\FacetResultsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<PagedQueryResponse>
 */
final class PagedQueryResponseBuilder implements Builder
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
     * @var ?JsonObject
     */
    private $meta;

    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?BaseResourceCollection
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
     * @return null|JsonObject
     */
    public function getMeta()
    {
        return $this->meta;
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
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return null|BaseResourceCollection
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
    public function withMeta(?JsonObject $meta)
    {
        $this->meta = $meta;

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
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResults(?BaseResourceCollection $results)
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

    public function build(): PagedQueryResponse
    {
        return new PagedQueryResponseModel(
            $this->total,
            $this->offset,
            $this->meta,
            $this->count,
            $this->limit,
            $this->results,
            ($this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets)
        );
    }

    public static function of(): PagedQueryResponseBuilder
    {
        return new self();
    }
}
