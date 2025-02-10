<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchQueryBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchFacetCountValue>
 */
final class ProductSearchFacetCountValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $scope;

    /**

     * @var null|SearchQuery|SearchQueryBuilder
     */
    private $filter;

    /**

     * @var ?string
     */
    private $level;

    /**
     * <p>Name of the count facet to appear in the <a href="ctp:api:type:ProductSearchFacetResultCount">ProductSearchFacetResultCount</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Whether the facet must consider only the Products resulting from the search (<code>query</code>) or all the Products (<code>all</code>).</p>
     *

     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * <p>Additional filtering expression to apply to the facet result before calculating the facet.</p>
     *

     * @return null|SearchQuery
     */
    public function getFilter()
    {
        return $this->filter instanceof SearchQueryBuilder ? $this->filter->build() : $this->filter;
    }

    /**
     * <p>Specify whether to count Products (<code>products</code>) or Product Variants (<code>variants</code>).</p>
     *

     * @return null|string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $scope
     * @return $this
     */
    public function withScope(?string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @param ?SearchQuery $filter
     * @return $this
     */
    public function withFilter(?SearchQuery $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @param ?string $level
     * @return $this
     */
    public function withLevel(?string $level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @deprecated use withFilter() instead
     * @return $this
     */
    public function withFilterBuilder(?SearchQueryBuilder $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    public function build(): ProductSearchFacetCountValue
    {
        return new ProductSearchFacetCountValueModel(
            $this->name,
            $this->scope,
            $this->filter instanceof SearchQueryBuilder ? $this->filter->build() : $this->filter,
            $this->level
        );
    }

    public static function of(): ProductSearchFacetCountValueBuilder
    {
        return new self();
    }
}
