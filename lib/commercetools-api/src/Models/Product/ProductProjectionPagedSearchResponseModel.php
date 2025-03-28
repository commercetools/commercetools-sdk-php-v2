<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductProjectionPagedSearchResponseModel extends JsonObjectModel implements ProductProjectionPagedSearchResponse
{
    /**
     *
     * @var ?int
     */
    protected $limit;

    /**
     *
     * @var ?int
     */
    protected $offset;

    /**
     *
     * @var ?int
     */
    protected $count;

    /**
     *
     * @var ?int
     */
    protected $total;

    /**
     *
     * @var ?ProductProjectionCollection
     */
    protected $results;

    /**
     *
     * @var ?FacetResults
     */
    protected $facets;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $limit = null,
        ?int $offset = null,
        ?int $count = null,
        ?int $total = null,
        ?ProductProjectionCollection $results = null,
        ?FacetResults $facets = null
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->count = $count;
        $this->total = $total;
        $this->results = $results;
        $this->facets = $facets;
    }

    /**
     * <p>The maximum number of results returned on a <a href="/../api/projects/products-search#pagination">page</a>.</p>
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
     * <p>The starting point for the retrieved <a href="/../api/projects/products-search#pagination">paginated</a> result.</p>
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
     * <p>Actual number of results returned.</p>
     *
     *
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
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
     * <p><a href="ctp:api:type:ProductProjection">ProductProjections</a> where at least one <a href="ctp:api:type:ProductVariant">ProductVariant</a> matches the search query, provided with the <code>text.{language}</code> and/or <code>filter.query</code> or <code>filter</code> query parameter.
     * If the query parameter <code>markMatchingVariants=true</code> was provided with the request, the <a href="/../api/projects/products-search#matching-variants">matching variants</a> are marked as such.</p>
     *
     *
     * @return null|ProductProjectionCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ProductProjectionCollection::fromArray($data);
        }

        return $this->results;
    }

    /**
     * <p>Facet results for each <a href="/../api/projects/products-search#facets">facet expression</a> specified in the search request.</p>
     * <p>Only present if at least one <code>facet</code> parameter was provided with the search request.</p>
     *
     *
     * @return null|FacetResults
     */
    public function getFacets()
    {
        if (is_null($this->facets)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FACETS);
            if (is_null($data)) {
                return null;
            }

            $this->facets = FacetResultsModel::of($data);
        }

        return $this->facets;
    }


    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @param ?ProductProjectionCollection $results
     */
    public function setResults(?ProductProjectionCollection $results): void
    {
        $this->results = $results;
    }

    /**
     * @param ?FacetResults $facets
     */
    public function setFacets(?FacetResults $facets): void
    {
        $this->facets = $facets;
    }
}
