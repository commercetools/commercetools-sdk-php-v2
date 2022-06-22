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

interface ProductSelectionVariantSelectionChangedMessage extends Message
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_OLD_VARIANT_SELECTION = 'oldVariantSelection';
    public const FIELD_NEW_VARIANT_SELECTION = 'newVariantSelection';

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:Product">Product</a>.</p>
     *
     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>The former Product Variant Selection if any.</p>
     *
     * @return null|ProductVariantSelection
     */
    public function getOldVariantSelection();

    /**
     * <p>The updated Product Variant Selection if any.</p>
     *
     * @return null|ProductVariantSelection
     */
    public function getNewVariantSelection();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?ProductVariantSelection $oldVariantSelection
     */
    public function setOldVariantSelection(?ProductVariantSelection $oldVariantSelection): void;

    /**
     * @param ?ProductVariantSelection $newVariantSelection
     */
    public function setNewVariantSelection(?ProductVariantSelection $newVariantSelection): void;
}
