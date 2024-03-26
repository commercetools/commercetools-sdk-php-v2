<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductPagedSearchResponseModel extends JsonObjectModel implements ProductPagedSearchResponse
{
    /**
     *
     * @var ?int
     */
    protected $total;

    /**
     *
     * @var ?int
     */
    protected $offset;

    /**
     *
     * @var ?int
     */
    protected $limit;

    /**
     *
     * @var ?ProductSearchFacetResultCollection
     */
    protected $facets;

    /**
     *
     * @var ?ProductSearchResultCollection
     */
    protected $results;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $total = null,
        ?int $offset = null,
        ?int $limit = null,
        ?ProductSearchFacetResultCollection $facets = null,
        ?ProductSearchResultCollection $results = null
    ) {
        $this->total = $total;
        $this->offset = $offset;
        $this->limit = $limit;
        $this->facets = $facets;
        $this->results = $results;
    }

    /**
     * <p>Total number of results matching the query.</p>
     *
     *
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *
     *
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *
     *
     * @return null|int
     */
    public function getLimit()
    {
        if (is_null($this->limit)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LIMIT);
            if (is_null($data)) {
                return null;
            }
            $this->limit = (int) $data;
        }

        return $this->limit;
    }

    /**
     * <p>Results for <a href="/../api/projects/product-search#facets">facets</a> when requested.</p>
     *
     *
     * @return null|ProductSearchFacetResultCollection
     */
    public function getFacets()
    {
        if (is_null($this->facets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_FACETS);
            if (is_null($data)) {
                return null;
            }
            $this->facets = ProductSearchFacetResultCollection::fromArray($data);
        }

        return $this->facets;
    }

    /**
     * <p>Search result containing the Products matching the search query.</p>
     *
     *
     * @return null|ProductSearchResultCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ProductSearchResultCollection::fromArray($data);
        }

        return $this->results;
    }


    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param ?ProductSearchFacetResultCollection $facets
     */
    public function setFacets(?ProductSearchFacetResultCollection $facets): void
    {
        $this->facets = $facets;
    }

    /**
     * @param ?ProductSearchResultCollection $results
     */
    public function setResults(?ProductSearchResultCollection $results): void
    {
        $this->results = $results;
    }
}
