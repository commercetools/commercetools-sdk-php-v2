<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductLegacySetSkuActionModel extends ProductUpdateActionModel implements ProductLegacySetSkuAction
{
    const DISCRIMINATOR_VALUE = 'legacySetSku';

    /**
     * @var string
     */
    protected $sku;
    /**
     * @var int
     */
    protected $variantId;

    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductLegacySetSkuAction::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ProductLegacySetSkuAction::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
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
