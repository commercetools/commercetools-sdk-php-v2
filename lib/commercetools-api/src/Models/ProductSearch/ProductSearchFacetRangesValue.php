<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetRangesValue extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_FILTER = 'filter';
    public const FIELD_COUNT = 'count';
    public const FIELD_FIELD = 'field';
    public const FIELD_RANGES = 'ranges';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_ATTRIBUTE_TYPE = 'attributeType';

    /**
     * <p>Name to assign the ranges facet.</p>
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
     * <p>Define ranges for the facet.</p>
     *

     * @return null|ProductSearchFacetRangesFacetRangeCollection
     */
    public function getRanges();

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
     * @param ?ProductSearchFacetRangesFacetRangeCollection $ranges
     */
    public function setRanges(?ProductSearchFacetRangesFacetRangeCollection $ranges): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?string $attributeType
     */
    public function setAttributeType(?string $attributeType): void;
}
