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
final class ProductSearchRequestModel extends JsonObjectModel implements ProductSearchRequest
{
    /**
     *
     * @var ?ProductSearchQuery
     */
    protected $query;

    /**
     *
     * @var ?ProductSearchQuery
     */
    protected $postFilter;

    /**
     *
     * @var ?ProductSearchSortingCollection
     */
    protected $sort;

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
     * @var ?bool
     */
    protected $markMatchingVariants;

    /**
     *
     * @var ?ProductSearchProjectionParams
     */
    protected $projection;

    /**
     *
     * @var ?ProductSearchFacetExpressionCollection
     */
    protected $facets;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchQuery $query = null,
        ?ProductSearchQuery $postFilter = null,
        ?ProductSearchSortingCollection $sort = null,
        ?int $limit = null,
        ?int $offset = null,
        ?bool $markMatchingVariants = null,
        ?ProductSearchProjectionParams $projection = null,
        ?ProductSearchFacetExpressionCollection $facets = null
    ) {
        $this->query = $query;
        $this->postFilter = $postFilter;
        $this->sort = $sort;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->markMatchingVariants = $markMatchingVariants;
        $this->projection = $projection;
        $this->facets = $facets;
    }

    /**
     * <p>The Product search query.</p>
     *
     *
     * @return null|ProductSearchQuery
     */
    public function getQuery()
    {
        if (is_null($this->query)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUERY);
            if (is_null($data)) {
                return null;
            }

            $this->query = ProductSearchQueryModel::of($data);
        }

        return $this->query;
    }

    /**
     *
     * @return null|ProductSearchQuery
     */
    public function getPostFilter()
    {
        if (is_null($this->postFilter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_POST_FILTER);
            if (is_null($data)) {
                return null;
            }

            $this->postFilter = ProductSearchQueryModel::of($data);
        }

        return $this->postFilter;
    }

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *
     *
     * @return null|ProductSearchSortingCollection
     */
    public function getSort()
    {
        if (is_null($this->sort)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SORT);
            if (is_null($data)) {
                return null;
            }
            $this->sort = ProductSearchSortingCollection::fromArray($data);
        }

        return $this->sort;
    }

    /**
     * <p>The maximum number of search results to be returned.</p>
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
     * <p>The number of search results to be skipped in the response for pagination.</p>
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
     * <p>The search can return Products where not all Product Variants match the search criteria. If <code>true</code>, the response will include a field called <code>matchingVariants</code> that contains the <code>sku</code> of Product Variants that match the search query. If the query does not specify any variant-level criteria, <code>matchingVariants</code> will be null signifying that all Product Variants are a match.</p>
     *
     *
     * @return null|bool
     */
    public function getMarkMatchingVariants()
    {
        if (is_null($this->markMatchingVariants)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_MARK_MATCHING_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->markMatchingVariants = (bool) $data;
        }

        return $this->markMatchingVariants;
    }

    /**
     * <p>Contains Product Projection query parameters. Used to fetch matching Product Projection data of products matching the search query. If not included, Product Projection integration is not used.</p>
     *
     *
     * @return null|ProductSearchProjectionParams
     */
    public function getProjection()
    {
        if (is_null($this->projection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PROJECTION);
            if (is_null($data)) {
                return null;
            }

            $this->projection = ProductSearchProjectionParamsModel::of($data);
        }

        return $this->projection;
    }

    /**
     *
     * @return null|ProductSearchFacetExpressionCollection
     */
    public function getFacets()
    {
        if (is_null($this->facets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_FACETS);
            if (is_null($data)) {
                return null;
            }
            $this->facets = ProductSearchFacetExpressionCollection::fromArray($data);
        }

        return $this->facets;
    }


    /**
     * @param ?ProductSearchQuery $query
     */
    public function setQuery(?ProductSearchQuery $query): void
    {
        $this->query = $query;
    }

    /**
     * @param ?ProductSearchQuery $postFilter
     */
    public function setPostFilter(?ProductSearchQuery $postFilter): void
    {
        $this->postFilter = $postFilter;
    }

    /**
     * @param ?ProductSearchSortingCollection $sort
     */
    public function setSort(?ProductSearchSortingCollection $sort): void
    {
        $this->sort = $sort;
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
     * @param ?bool $markMatchingVariants
     */
    public function setMarkMatchingVariants(?bool $markMatchingVariants): void
    {
        $this->markMatchingVariants = $markMatchingVariants;
    }

    /**
     * @param ?ProductSearchProjectionParams $projection
     */
    public function setProjection(?ProductSearchProjectionParams $projection): void
    {
        $this->projection = $projection;
    }

    /**
     * @param ?ProductSearchFacetExpressionCollection $facets
     */
    public function setFacets(?ProductSearchFacetExpressionCollection $facets): void
    {
        $this->facets = $facets;
    }
}
