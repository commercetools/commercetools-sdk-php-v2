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
 * @implements Builder<ProductSearchFacetDistinctValue>
 */
final class ProductSearchFacetDistinctValueBuilder implements Builder
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

     * @var ?array
     */
    private $includes;

    /**

     * @var null|ProductSearchFacetDistinctStartsWith|ProductSearchFacetDistinctStartsWithBuilder
     */
    private $startsWith;

    /**

     * @var null|ProductSearchFacetDistinctBucketSortExpression|ProductSearchFacetDistinctBucketSortExpressionBuilder
     */
    private $sort;

    /**

     * @var ?int
     */
    private $size;

    /**

     * @var ?string
     */
    private $language;

    /**

     * @var ?string
     */
    private $attributeType;

    /**

     * @var ?string
     */
    private $missing;

    /**
     * <p>Name of the count facet.</p>
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
     * <p>Specify which bucket keys the facets results should include.</p>
     *

     * @return null|array
     */
    public function getIncludes()
    {
        return $this->includes;
    }

    /**
     * <p>Filter bucket keys in the facet results by the start of the key.</p>
     *

     * @return null|ProductSearchFacetDistinctStartsWith
     */
    public function getStartsWith()
    {
        return $this->startsWith instanceof ProductSearchFacetDistinctStartsWithBuilder ? $this->startsWith->build() : $this->startsWith;
    }

    /**
     * <p>Define how the buckets are sorted.</p>
     *

     * @return null|ProductSearchFacetDistinctBucketSortExpression
     */
    public function getSort()
    {
        return $this->sort instanceof ProductSearchFacetDistinctBucketSortExpressionBuilder ? $this->sort->build() : $this->sort;
    }

    /**
     * <p>Maximum number of buckets to return.</p>
     *

     * @return null|int
     */
    public function getSize()
    {
        return $this->size;
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
     * <p>Default value to use if the specified field is not present on some Products.</p>
     *

     * @return null|string
     */
    public function getMissing()
    {
        return $this->missing;
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
     * @param ?array $includes
     * @return $this
     */
    public function withIncludes(?array $includes)
    {
        $this->includes = $includes;

        return $this;
    }

    /**
     * @param ?ProductSearchFacetDistinctStartsWith $startsWith
     * @return $this
     */
    public function withStartsWith(?ProductSearchFacetDistinctStartsWith $startsWith)
    {
        $this->startsWith = $startsWith;

        return $this;
    }

    /**
     * @param ?ProductSearchFacetDistinctBucketSortExpression $sort
     * @return $this
     */
    public function withSort(?ProductSearchFacetDistinctBucketSortExpression $sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param ?int $size
     * @return $this
     */
    public function withSize(?int $size)
    {
        $this->size = $size;

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
     * @param ?string $missing
     * @return $this
     */
    public function withMissing(?string $missing)
    {
        $this->missing = $missing;

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

    /**
     * @deprecated use withStartsWith() instead
     * @return $this
     */
    public function withStartsWithBuilder(?ProductSearchFacetDistinctStartsWithBuilder $startsWith)
    {
        $this->startsWith = $startsWith;

        return $this;
    }

    /**
     * @deprecated use withSort() instead
     * @return $this
     */
    public function withSortBuilder(?ProductSearchFacetDistinctBucketSortExpressionBuilder $sort)
    {
        $this->sort = $sort;

        return $this;
    }

    public function build(): ProductSearchFacetDistinctValue
    {
        return new ProductSearchFacetDistinctValueModel(
            $this->name,
            $this->scope,
            $this->filter instanceof ProductSearchQueryBuilder ? $this->filter->build() : $this->filter,
            $this->count,
            $this->field,
            $this->includes,
            $this->startsWith instanceof ProductSearchFacetDistinctStartsWithBuilder ? $this->startsWith->build() : $this->startsWith,
            $this->sort instanceof ProductSearchFacetDistinctBucketSortExpressionBuilder ? $this->sort->build() : $this->sort,
            $this->size,
            $this->language,
            $this->attributeType,
            $this->missing
        );
    }

    public static function of(): ProductSearchFacetDistinctValueBuilder
    {
        return new self();
    }
}
