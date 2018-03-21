<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductRevertStagedVariantChangesAction extends ProductUpdateAction {
    const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

}
