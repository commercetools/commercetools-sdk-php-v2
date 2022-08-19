<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionProductAddedMessagePayload extends MessagePayload
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_SELECTION = 'variantSelection';

    /**
     * <p><a href="ctp:api:type:Product">Product</a> that was added to the <a href="ctp:api:type:ProductSelection">Product Selection</a>.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>Product Variant Selection after the <a href="ctp:api:type:ProductSelectionAddProductAction">Add Product</a> update action.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void;
}
