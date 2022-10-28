<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionSetVariantSelectionAction extends ProductSelectionUpdateAction
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_SELECTION = 'variantSelection';

    /**
     * <p>ResourceIdentifier of the Product</p>
     *

     * @return null|ProductResourceIdentifier
     */
    public function getProduct();

    /**
     * <p>Determines which Variants of the previously added Product are to be included in, or excluded from, the Product Selection.
     * Leave it empty to unset an existing Variant Selection.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection();

    /**
     * @param ?ProductResourceIdentifier $product
     */
    public function setProduct(?ProductResourceIdentifier $product): void;

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void;
}
