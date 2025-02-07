<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetDistinctValue extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_FILTER = 'filter';
    public const FIELD_LEVEL = 'level';
    public const FIELD_FIELD = 'field';
    public const FIELD_INCLUDES = 'includes';
    public const FIELD_SORT = 'sort';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_FIELD_TYPE = 'fieldType';
    public const FIELD_MISSING = 'missing';

    /**
     * <p>Name of the distinct facet to appear in the <a href="ctp:api:type:ProductSearchFacetResultBucket">ProductSearchFacetResultBucket</a>.</p>
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
     * <p>Additional filtering expression to apply to the facet result before calculating the facet.</p>
     *

     * @return null|SearchQuery
     */
    public function getFilter();

    /**
     * <p>Specify whether to count Products (<code>products</code>) or Product Variants (<code>variants</code>).</p>
     *

     * @return null|string
     */
    public function getLevel();

    /**
     * <p>The <a href="/api/projects/product-search#searchable-product-fields">searchable Product field</a> to facet on.</p>
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
    public function getLimit();

    /**
     * <p>String value specifying linguistic and regional preferences using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag format</a>, as described in <a href="https://www.rfc-editor.org/rfc/bcp/bcp47.txt">BCP 47</a>. The format combines language, script, and region using hyphen-separated subtags. For example: <code>en</code>, <code>en-US</code>, <code>zh-Hans-SG</code>.</p>
     *

     * @return null|string
     */
    public function getLanguage();

    /**
     * <p>If the <code>field</code> is not standard, this must be the Attribute type.</p>
     *

     * @return null|string
     */
    public function getFieldType();

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
     * @param ?SearchQuery $filter
     */
    public function setFilter(?SearchQuery $filter): void;

    /**
     * @param ?string $level
     */
    public function setLevel(?string $level): void;

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?array $includes
     */
    public function setIncludes(?array $includes): void;

    /**
     * @param ?ProductSearchFacetDistinctBucketSortExpression $sort
     */
    public function setSort(?ProductSearchFacetDistinctBucketSortExpression $sort): void;

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void;

    /**
     * @param ?string $missing
     */
    public function setMissing(?string $missing): void;
}
