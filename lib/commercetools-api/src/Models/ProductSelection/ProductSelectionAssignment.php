<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionAssignment extends JsonObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_PRODUCT_SELECTION = 'productSelection';
    public const FIELD_VARIANT_SELECTION = 'variantSelection';

    /**
     * <p>Reference to a Product that is assigned to the ProductSelection.</p>
     *
     * @return null|ProductReference
     */
    public function getProduct();

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
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?ProductSelectionReference $productSelection
     */
    public function setProductSelection(?ProductSelectionReference $productSelection): void;

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void;
}
