<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\ProductSelection\ProductVariantExclusion;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionProductExcludedMessagePayload extends MessagePayload
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_EXCLUSION = 'variantExclusion';

    /**
     * <p><a href="ctp:api:type:Product">Product</a> that was excluded from the <a href="ctp:api:type:ProductSelection">Product Selection</a>.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>Product Variant Exclusion after the <a href="ctp:api:type:ProductSelectionExcludeProductAction">Exclude Product</a> update action.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void;
}
