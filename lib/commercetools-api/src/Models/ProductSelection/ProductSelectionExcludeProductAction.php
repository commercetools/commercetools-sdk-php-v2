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

interface ProductSelectionExcludeProductAction extends ProductSelectionUpdateAction
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_EXCLUSION = 'variantExclusion';

    /**
     * <p>ResourceIdentifier of the Product</p>
     *

     * @return null|ProductResourceIdentifier
     */
    public function getProduct();

    /**
     * <p>Defines which Variants of the Product will be excluded from the Product Selection.
     * If not supplied all Variants are deemed to be excluded.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion();

    /**
     * @param ?ProductResourceIdentifier $product
     */
    public function setProduct(?ProductResourceIdentifier $product): void;

    /**
     * @param ?ProductVariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?ProductVariantExclusion $variantExclusion): void;
}
