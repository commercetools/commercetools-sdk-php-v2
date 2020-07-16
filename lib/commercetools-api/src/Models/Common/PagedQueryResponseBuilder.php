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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PagedQueryResponse>
 */
final class PagedQueryResponseBuilder implements Builder
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
     * @var ?BaseResourceCollection
     */
    private $results;

    /**
     * @var null|FacetResults|FacetResultsBuilder
     */
    private $facets;

    /**
     * @var ?JsonObject
     */
    private $meta;

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
     * @return null|JsonObject
     */
    public function getMeta()
    {
        return $this->meta;
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
     * @param ?BaseResourceCollection $results
     * @return $this
     */
    public function withResults(?BaseResourceCollection $results)
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
     * @param ?JsonObject $meta
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
    public function withFacetsBuilder(?FacetResultsBuilder $facets)
    {
        $this->facets = $facets;

        return $this;
    }

    public function build(): PagedQueryResponse
    {
        return new PagedQueryResponseModel(
            $this->limit,
            $this->count,
            $this->total,
            $this->offset,
            $this->results,
            $this->facets instanceof FacetResultsBuilder ? $this->facets->build() : $this->facets,
            $this->meta
        );
    }

    public static function of(): PagedQueryResponseBuilder
    {
        return new self();
    }
}
