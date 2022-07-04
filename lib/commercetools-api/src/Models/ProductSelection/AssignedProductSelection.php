<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssignedProductSelection extends JsonObject
{
    public const FIELD_PRODUCT_SELECTION = 'productSelection';
    public const FIELD_VARIANT_SELECTION = 'variantSelection';

    /**
     * <p>Reference to the Product Selection that this assignment is part of.</p>
     *
     * @return null|ProductSelectionReference
     */
    public function getProductSelection();

    /**
     * <p>Selects which Variants of the newly added Product will be included, or excluded, from the Product Selection.</p>
     *
     * @return null|ProductVariantSelection
     */
    public function getVariantSelection();

    /**
     * @param ?ProductSelectionReference $productSelection
     */
    public function setProductSelection(?ProductSelectionReference $productSelection): void;

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void;
}
