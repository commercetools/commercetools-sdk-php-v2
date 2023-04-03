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

interface ProductSelectionVariantExclusionChangedMessage extends Message
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_OLD_VARIANT_EXCLUSION = 'oldVariantExclusion';
    public const FIELD_NEW_VARIANT_EXCLUSION = 'newVariantExclusion';

    /**
     * <p><a href="ctp:api:type:Product">Product</a> for which the Product Variant Exclusion changed.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>Product Variant Exclusion before the <a href="ctp:api:type:ProductSelectionSetVariantExclusionAction">Set Variant Exclusion</a> update action.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getOldVariantExclusion();

    /**
     * <p>Product Variant Exclusion after the <a href="ctp:api:type:ProductSelectionSetVariantExclusionAction">Set Variant Exclusion</a> update action.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getNewVariantExclusion();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?ProductVariantExclusion $oldVariantExclusion
     */
    public function setOldVariantExclusion(?ProductVariantExclusion $oldVariantExclusion): void;

    /**
     * @param ?ProductVariantExclusion $newVariantExclusion
     */
    public function setNewVariantExclusion(?ProductVariantExclusion $newVariantExclusion): void;
}
