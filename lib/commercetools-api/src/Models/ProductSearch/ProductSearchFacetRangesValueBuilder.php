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
 * @implements Builder<ProductSearchFacetRangesValue>
 */
final class ProductSearchFacetRangesValueBuilder implements Builder
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

     * @var null|ProductSearchQuery|ProductSearchQueryBuilder
     */
    private $filter;

    /**

     * @var ?string
     */
    private $count;

    /**

     * @var ?string
     */
    private $field;

    /**

     * @var ?ProductSearchFacetRangesFacetRangeCollection
     */
    private $ranges;

    /**

     * @var ?string
     */
    private $language;

    /**

     * @var ?string
     */
    private $attributeType;

    /**
     * <p>Name to assign the ranges facet.</p>
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

     * @return null|ProductSearchQuery
     */
    public function getFilter()
    {
        return $this->filter instanceof ProductSearchQueryBuilder ? $this->filter->build() : $this->filter;
    }

    /**
     * <p>Specify whether to count Products (<code>products</code>) or Product Variants (<code>variants</code>).</p>
     *

     * @return null|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>The field to facet on. Can be any searchable field on the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <p>Define ranges for the facet.</p>
     *

     * @return null|ProductSearchFacetRangesFacetRangeCollection
     */
    public function getRanges()
    {
        return $this->ranges;
    }

    /**
     * <p>String value specifying linguistic and regional preferences using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag format</a>, as described in <a href="https://www.rfc-editor.org/rfc/bcp/bcp47.txt">BCP 47</a>. The format combines language, script, and region using hyphen-separated subtags. For example: <code>en</code>, <code>en-US</code>, <code>zh-Hans-SG</code>.</p>
     *

     * @return null|string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * <p>If the <code>field</code> is an Attribute, this must be the Attribute type.</p>
     *

     * @return null|string
     */
    public function getAttributeType()
    {
        return $this->attributeType;
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
     * @param ?ProductSearchQuery $filter
     * @return $this
     */
    public function withFilter(?ProductSearchQuery $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @param ?string $count
     * @return $this
     */
    public function withCount(?string $count)
    {
        $this->count = $count;

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
     * @param ?ProductSearchFacetRangesFacetRangeCollection $ranges
     * @return $this
     */
    public function withRanges(?ProductSearchFacetRangesFacetRangeCollection $ranges)
    {
        $this->ranges = $ranges;

        return $this;
    }

    /**
     * @param ?string $language
     * @return $this
     */
    public function withLanguage(?string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @param ?string $attributeType
     * @return $this
     */
    public function withAttributeType(?string $attributeType)
    {
        $this->attributeType = $attributeType;

        return $this;
    }

    /**
     * @deprecated use withFilter() instead
     * @return $this
     */
    public function withFilterBuilder(?ProductSearchQueryBuilder $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    public function build(): ProductSearchFacetRangesValue
    {
        return new ProductSearchFacetRangesValueModel(
            $this->name,
            $this->scope,
            $this->filter instanceof ProductSearchQueryBuilder ? $this->filter->build() : $this->filter,
            $this->count,
            $this->field,
            $this->ranges,
            $this->language,
            $this->attributeType
        );
    }

    public static function of(): ProductSearchFacetRangesValueBuilder
    {
        return new self();
    }
}
