<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetDistinctValue extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_FILTER = 'filter';
    public const FIELD_COUNT = 'count';
    public const FIELD_FIELD = 'field';
    public const FIELD_INCLUDES = 'includes';
    public const FIELD_STARTS_WITH = 'startsWith';
    public const FIELD_SORT = 'sort';
    public const FIELD_SIZE = 'size';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_ATTRIBUTE_TYPE = 'attributeType';
    public const FIELD_MISSING = 'missing';

    /**
     * <p>Name of the count facet.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Whether the facet must consider only the Products resulting from the search (<code>query</code>) or all the Products (<code>all</code>).</p>
     *

     * @return null|string
     */
    public function getScope();

    /**
     * <p>Additional filtering expression to apply to the search result before calculating the facet.</p>
     *

     * @return null|ProductSearchQuery
     */
    public function getFilter();

    /**
     * <p>Specify whether to count Products (<code>products</code>) or Product Variants (<code>variants</code>).</p>
     *

     * @return null|string
     */
    public function getCount();

    /**
     * <p>The field to facet on. Can be any searchable field on the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getField();

    /**
     * <p>Specify which bucket keys the facets results should include.</p>
     *

     * @return null|array
     */
    public function getIncludes();

    /**
     * <p>Filter bucket keys in the facet results by the start of the key.</p>
     *

     * @return null|ProductSearchFacetDistinctStartsWith
     */
    public function getStartsWith();

    /**
     * <p>Define how the buckets are sorted.</p>
     *

     * @return null|ProductSearchFacetDistinctBucketSortExpression
     */
    public function getSort();

    /**
     * <p>Maximum number of buckets to return.</p>
     *

     * @return null|int
     */
    public function getSize();

    /**
     * <p>String value specifying linguistic and regional preferences using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag format</a>, as described in <a href="https://www.rfc-editor.org/rfc/bcp/bcp47.txt">BCP 47</a>. The format combines language, script, and region using hyphen-separated subtags. For example: <code>en</code>, <code>en-US</code>, <code>zh-Hans-SG</code>.</p>
     *

     * @return null|string
     */
    public function getLanguage();

    /**
     * <p>If the <code>field</code> is an Attribute, this must be the Attribute type.</p>
     *

     * @return null|string
     */
    public function getAttributeType();

    /**
     * <p>Default value to use if the specified field is not present on some Products.</p>
     *

     * @return null|string
     */
    public function getMissing();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void;

    /**
     * @param ?ProductSearchQuery $filter
     */
    public function setFilter(?ProductSearchQuery $filter): void;

    /**
     * @param ?string $count
     */
    public function setCount(?string $count): void;

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?array $includes
     */
    public function setIncludes(?array $includes): void;

    /**
     * @param ?ProductSearchFacetDistinctStartsWith $startsWith
     */
    public function setStartsWith(?ProductSearchFacetDistinctStartsWith $startsWith): void;

    /**
     * @param ?ProductSearchFacetDistinctBucketSortExpression $sort
     */
    public function setSort(?ProductSearchFacetDistinctBucketSortExpression $sort): void;

    /**
     * @param ?int $size
     */
    public function setSize(?int $size): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?string $attributeType
     */
    public function setAttributeType(?string $attributeType): void;

    /**
     * @param ?string $missing
     */
    public function setMissing(?string $missing): void;
}
