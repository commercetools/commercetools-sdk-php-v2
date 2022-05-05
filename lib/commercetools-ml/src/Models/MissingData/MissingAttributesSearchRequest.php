<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingAttributesSearchRequest extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_STAGED = 'staged';
    public const FIELD_PRODUCT_SET_LIMIT = 'productSetLimit';
    public const FIELD_INCLUDE_VARIANTS = 'includeVariants';
    public const FIELD_COVERAGE_MIN = 'coverageMin';
    public const FIELD_COVERAGE_MAX = 'coverageMax';
    public const FIELD_SORT_BY = 'sortBy';
    public const FIELD_SHOW_MISSING_ATTRIBUTE_NAMES = 'showMissingAttributeNames';
    public const FIELD_PRODUCT_IDS = 'productIds';
    public const FIELD_PRODUCT_TYPE_IDS = 'productTypeIds';
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *
     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *
     * @return null|int
     */
    public function getOffset();

    /**
     * <p>If true, searches data from staged products in addition to published products.</p>
     *
     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Maximum number of products to scan.</p>
     *
     * @return null|int
     */
    public function getProductSetLimit();

    /**
     * <p>If true, searches all product variants. If false, only searches master variants.</p>
     *
     * @return null|bool
     */
    public function getIncludeVariants();

    /**
     * <p>Minimum attribute coverage of variants to display, applied to both coverage types.</p>
     *
     * @return null|float
     */
    public function getCoverageMin();

    /**
     * <p>Maximum attribute coverage of variants to display, applied to both coverage types.</p>
     *
     * @return null|float
     */
    public function getCoverageMax();

    /**
     * <p>Default value: <code>coverageAttributeValues</code> - Allowed values: [<code>coverageAttributeValues</code>, <code>coverageAttributeNames</code>]
     * <code>coverageAttributeValues</code> shows the product variants with the most missing attribute values first and <code>coverageAttributeNames</code> the ones with the most missing attribute names.</p>
     *
     * @return null|string
     */
    public function getSortBy();

    /**
     * <p>If true, the <code>missingAttributeNames</code> will be included in the results.</p>
     *
     * @return null|bool
     */
    public function getShowMissingAttributeNames();

    /**
     * <p>Filters results by the provided Product IDs.
     * Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductIds();

    /**
     * <p>Filters results by the provided product type IDs.
     * Cannot be applied in combination with any other filter.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds();

    /**
     * <p>Filters results by the provided attribute name. If provided,  products are only checked for this attribute. Therefore, only products of product types which define the attribute name are considered. These product type IDs
     * are then listed in <code>MissingAttributesMeta</code>. The  <code>attributeCount</code> and <code>attributeCoverage</code> fields are not part of the response when using this filter. Cannot be applied in combination with any other filter.</p>
     *
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?int $productSetLimit
     */
    public function setProductSetLimit(?int $productSetLimit): void;

    /**
     * @param ?bool $includeVariants
     */
    public function setIncludeVariants(?bool $includeVariants): void;

    /**
     * @param ?float $coverageMin
     */
    public function setCoverageMin(?float $coverageMin): void;

    /**
     * @param ?float $coverageMax
     */
    public function setCoverageMax(?float $coverageMax): void;

    /**
     * @param ?string $sortBy
     */
    public function setSortBy(?string $sortBy): void;

    /**
     * @param ?bool $showMissingAttributeNames
     */
    public function setShowMissingAttributeNames(?bool $showMissingAttributeNames): void;

    /**
     * @param ?array $productIds
     */
    public function setProductIds(?array $productIds): void;

    /**
     * @param ?array $productTypeIds
     */
    public function setProductTypeIds(?array $productTypeIds): void;

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;
}
