<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ProductKeyReference;

interface ProductSelectionAssignment extends JsonObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_SELECTION = 'variantSelection';
    public const FIELD_VARIANT_EXCLUSION = 'variantExclusion';

    /**
     * <p>Reference to the Product by key.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct();

    /**
     * <p>Variant selection specifying included SKUs.</p>
     *

     * @return null|VariantSelection
     */
    public function getVariantSelection();

    /**
     * <p>Variant exclusion specifying excluded SKUs.</p>
     *

     * @return null|VariantExclusion
     */
    public function getVariantExclusion();

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void;

    /**
     * @param ?VariantSelection $variantSelection
     */
    public function setVariantSelection(?VariantSelection $variantSelection): void;

    /**
     * @param ?VariantExclusion $variantExclusion
     */
    public function setVariantExclusion(?VariantExclusion $variantExclusion): void;
}
