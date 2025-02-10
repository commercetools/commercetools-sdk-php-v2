<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchQueryModel;
use Commercetools\Api\Models\Search\SearchSortingCollection;
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
     * @var ?SearchQuery
     */
    protected $query;

    /**
     *
     * @var ?SearchSortingCollection
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
    protected $productProjectionParameters;

    /**
     *
     * @var ?ProductSearchFacetExpressionCollection
     */
    protected $facets;

    /**
     *
     * @var ?SearchQuery
     */
    protected $postFilter;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchQuery $query = null,
        ?SearchSortingCollection $sort = null,
        ?int $limit = null,
        ?int $offset = null,
        ?bool $markMatchingVariants = null,
        ?ProductSearchProjectionParams $productProjectionParameters = null,
        ?ProductSearchFacetExpressionCollection $facets = null,
        ?SearchQuery $postFilter = null
    ) {
        $this->query = $query;
        $this->sort = $sort;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->markMatchingVariants = $markMatchingVariants;
        $this->productProjectionParameters = $productProjectionParameters;
        $this->facets = $facets;
        $this->postFilter = $postFilter;
    }

    /**
     * <p>The search query against <a href="/../api/projects/product-search#searchable-product-fields">searchable Product fields</a>.</p>
     *
     *
     * @return null|SearchQuery
     */
    public function getQuery()
    {
        if (is_null($this->query)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUERY);
            if (is_null($data)) {
                return null;
            }

            $this->query = SearchQueryModel::of($data);
        }

        return $this->query;
    }

    /**
     * <p>Controls how results to your query are <a href="/../api/projects/product-search#sorting">sorted</a>.
     * If not provided, the results are sorted by relevance score in descending order.</p>
     *
     *
     * @return null|SearchSortingCollection
     */
    public function getSort()
    {
        if (is_null($this->sort)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SORT);
            if (is_null($data)) {
                return null;
            }
            $this->sort = SearchSortingCollection::fromArray($data);
        }

        return $this->sort;
    }

    /**
     * <p>The maximum number of search results to be returned in one <a href="/../api/projects/product-search#pagination">page</a>.</p>
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
     * <p>The number of search results to be skipped in the response for <a href="/../api/projects/product-search#pagination">pagination</a>.</p>
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
     * <p>If <code>query</code> specifies an expression for a Product Variant field,
     * set this to <code>true</code> to get additional information for each returned Product about which Product Variants match the search query.
     * For details, see <a href="/../api/projects/product-search#matching-variants">matching variants</a>.</p>
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
     * <p>Controls data integration <a href="/../api/projects/product-search#with-product-projection-parameters">with Product Projection parameters</a>.
     * If not set, the result does not include the Product Projection.</p>
     *
     *
     * @return null|ProductSearchProjectionParams
     */
    public function getProductProjectionParameters()
    {
        if (is_null($this->productProjectionParameters)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_PROJECTION_PARAMETERS);
            if (is_null($data)) {
                return null;
            }

            $this->productProjectionParameters = ProductSearchProjectionParamsModel::of($data);
        }

        return $this->productProjectionParameters;
    }

    /**
     * <p>Set this field to request <a href="/../api/projects/product-search#facets">facets</a>.</p>
     *
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
     * <p>Specify an additional filter on the result of the <code>query</code> after the API calculated <code>facets</code>.
     * This feature assists you in implementing faceted search.</p>
     *
     *
     * @return null|SearchQuery
     */
    public function getPostFilter()
    {
        if (is_null($this->postFilter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_POST_FILTER);
            if (is_null($data)) {
                return null;
            }

            $this->postFilter = SearchQueryModel::of($data);
        }

        return $this->postFilter;
    }


    /**
     * @param ?SearchQuery $query
     */
    public function setQuery(?SearchQuery $query): void
    {
        $this->query = $query;
    }

    /**
     * @param ?SearchSortingCollection $sort
     */
    public function setSort(?SearchSortingCollection $sort): void
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
     * @param ?ProductSearchProjectionParams $productProjectionParameters
     */
    public function setProductProjectionParameters(?ProductSearchProjectionParams $productProjectionParameters): void
    {
        $this->productProjectionParameters = $productProjectionParameters;
    }

    /**
     * @param ?ProductSearchFacetExpressionCollection $facets
     */
    public function setFacets(?ProductSearchFacetExpressionCollection $facets): void
    {
        $this->facets = $facets;
    }

    /**
     * @param ?SearchQuery $postFilter
     */
    public function setPostFilter(?SearchQuery $postFilter): void
    {
        $this->postFilter = $postFilter;
    }
}
