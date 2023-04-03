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

interface AssignedProductReference extends JsonObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_SELECTION = 'variantSelection';
    public const FIELD_VARIANT_EXCLUSION = 'variantExclusion';

    /**
     * <p>Reference to a Product that is assigned to the Product Selection.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>The Variants of the Product that are included from the Product Selection.</p>
     * <p>This field may exist only for the <a href="ctp:api:type:IndividualProductSelectionType">IndividualProductSelectionType</a>.
     * In absence of this field, all Variants are deemed to be included.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection();

    /**
     * <p>The Variants of the Product that are excluded from the Product Selection.</p>
     * <p>This field may exist only for the <a href="ctp:api:type:IndividualExclusionProductSelectionType">IndividualExclusionProductSelectionType</a>.
     * In absence of this field, all Variants are deemed to be excluded.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?ProductVariantSelection $variantSelection
     */
    public function setVariantSelection(?ProductVariantSelection $variantSelection): void;

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void;
}
