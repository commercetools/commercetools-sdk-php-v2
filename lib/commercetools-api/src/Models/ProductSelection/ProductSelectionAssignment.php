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
    public const FIELD_VARIANT_EXCLUSION = 'variantExclusion';

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
     * <p>Define which Variants of the added Product will be included from the Product Selection.</p>
     * <p>This field is only available for Assignments to a Product Selection of type <a href="ctp:api:type:IndividualProductSelectionType">Individual</a>.
     * The list of SKUs will be updated automatically on any change of those performed on the respective Product itself.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection();

    /**
     * <p>Defines which Variants of the Product will be excluded from the Product Selection.</p>
     * <p>This field is only available for Assignments to a Product Selection of type <a href="ctp:api:type:IndividualExclusionProductSelectionType">Individual Exclusion</a>.
     * The list of SKUs will be updated automatically on any change of those performed on the respective Product itself.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion();

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

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void;
}
