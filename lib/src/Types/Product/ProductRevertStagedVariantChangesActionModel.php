<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductRevertStagedVariantChangesActionModel extends ProductUpdateActionModel implements ProductRevertStagedVariantChangesAction {
    const DISCRIMINATOR_VALUE = 'revertStagedVariantChanges';

    /**
     * @var int
     */
    protected $variantId;

    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ProductRevertStagedVariantChangesAction::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId)
    {
        $this->variantId = (int)$variantId;

        return $this;
    }

}
