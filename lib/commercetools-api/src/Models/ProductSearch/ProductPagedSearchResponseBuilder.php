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

     * @var ?ProductSearchFacetResultCollection
     */
    private $facets;

    /**

     * @var ?ProductSearchResultCollection
     */
    private $results;

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
     * <p>Results for <a href="/../api/projects/product-search#facets">facets</a> when requested.</p>
     *

     * @return null|ProductSearchFacetResultCollection
     */
    public function getFacets()
    {
        return $this->facets;
    }

    /**
     * <p>Search result containing the Products matching the search query.</p>
     *

     * @return null|ProductSearchResultCollection
     */
    public function getResults()
    {
        return $this->results;
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
     * @param ?ProductSearchFacetResultCollection $facets
     * @return $this
     */
    public function withFacets(?ProductSearchFacetResultCollection $facets)
    {
        $this->facets = $facets;

        return $this;
    }

    /**
     * @param ?ProductSearchResultCollection $results
     * @return $this
     */
    public function withResults(?ProductSearchResultCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): ProductPagedSearchResponse
    {
        return new ProductPagedSearchResponseModel(
            $this->total,
            $this->offset,
            $this->limit,
            $this->facets,
            $this->results
        );
    }

    public static function of(): ProductPagedSearchResponseBuilder
    {
        return new self();
    }
}
