<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantAttributes extends JsonObject
{
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_VARIANTS = 'variants';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getProductKey();

    /**
     * <p>Metadata for the requested Attributes, derived from the <a href="ctp:api:type:ProductType">ProductType</a>.
     * Attributes not found in the ProductType are silently omitted.</p>
     *

     * @return null|VariantAttributesAttributeMetadataCollection
     */
    public function getAttributes();

    /**
     * <p>All Variants of the Product with their requested Attributes and availability.</p>
     *

     * @return null|VariantAttributesVariantCollection
     */
    public function getVariants();

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?string $productKey
     */
    public function setProductKey(?string $productKey): void;

    /**
     * @param ?VariantAttributesAttributeMetadataCollection $attributes
     */
    public function setAttributes(?VariantAttributesAttributeMetadataCollection $attributes): void;

    /**
     * @param ?VariantAttributesVariantCollection $variants
     */
    public function setVariants(?VariantAttributesVariantCollection $variants): void;
}
