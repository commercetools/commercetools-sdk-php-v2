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
 * @implements Builder<ProductSearchFacetStatsValue>
 */
final class ProductSearchFacetStatsValueBuilder implements Builder
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
    private $field;

    /**

     * @var ?string
     */
    private $fieldType;

    /**
     * <p>Name of the stats facet to appear in the <a href="ctp:api:type:ProductSearchFacetResultStats">ProductSearchFacetResultStats</a>.</p>
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
     * <p>Additional filtering expression to apply to the search result before calculating the facet.</p>
     *

     * @return null|SearchQuery
     */
    public function getFilter()
    {
        return $this->filter instanceof SearchQueryBuilder ? $this->filter->build() : $this->filter;
    }

    /**
     * <p>The <a href="/api/projects/product-search#searchable-product-fields">searchable Product field</a> to facet on.</p>
     *

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <p>If the <code>field</code> is not standard, this must be the Attribute type.</p>
     *

     * @return null|string
     */
    public function getFieldType()
    {
        return $this->fieldType;
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
     * @param ?string $field
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @param ?string $fieldType
     * @return $this
     */
    public function withFieldType(?string $fieldType)
    {
        $this->fieldType = $fieldType;

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

    public function build(): ProductSearchFacetStatsValue
    {
        return new ProductSearchFacetStatsValueModel(
            $this->name,
            $this->scope,
            $this->filter instanceof SearchQueryBuilder ? $this->filter->build() : $this->filter,
            $this->field,
            $this->fieldType
        );
    }

    public static function of(): ProductSearchFacetStatsValueBuilder
    {
        return new self();
    }
}
