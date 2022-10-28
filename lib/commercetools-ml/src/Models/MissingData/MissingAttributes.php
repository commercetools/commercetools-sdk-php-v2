<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Ml\Models\Common\ProductReference;
use Commercetools\Ml\Models\Common\ProductTypeReference;

interface MissingAttributes extends JsonObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_MISSING_ATTRIBUTE_VALUES = 'missingAttributeValues';
    public const FIELD_MISSING_ATTRIBUTE_NAMES = 'missingAttributeNames';
    public const FIELD_ATTRIBUTE_COUNT = 'attributeCount';
    public const FIELD_ATTRIBUTE_COVERAGE = 'attributeCoverage';

    /**

     * @return null|ProductReference
     */
    public function getProduct();

    /**

     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * <p>ID of a ProductVariant.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The names of the attributes of the product type that the variant is missing, sorted by attribute importance in descending order.</p>
     *

     * @return null|array
     */
    public function getMissingAttributeValues();

    /**
     * <p>The names of the attributes of the product type that the variant is missing, sorted by attribute importance in descending order.</p>
     *

     * @return null|array
     */
    public function getMissingAttributeNames();

    /**
     * @deprecated
     * @return null|AttributeCount
     */
    public function getAttributeCount();

    /**
     * @deprecated
     * @return null|AttributeCoverage
     */
    public function getAttributeCoverage();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?array $missingAttributeValues
     */
    public function setMissingAttributeValues(?array $missingAttributeValues): void;

    /**
     * @param ?array $missingAttributeNames
     */
    public function setMissingAttributeNames(?array $missingAttributeNames): void;

    /**
     * @param ?AttributeCount $attributeCount
     */
    public function setAttributeCount(?AttributeCount $attributeCount): void;

    /**
     * @param ?AttributeCoverage $attributeCoverage
     */
    public function setAttributeCoverage(?AttributeCoverage $attributeCoverage): void;
}
