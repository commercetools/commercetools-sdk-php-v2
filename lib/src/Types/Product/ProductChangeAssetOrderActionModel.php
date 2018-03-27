<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductChangeAssetOrderActionModel extends ProductUpdateActionModel implements ProductChangeAssetOrderAction {
    const DISCRIMINATOR_VALUE = 'changeAssetOrder';

    /**
     * @var array
     */
    protected $assetOrder;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var int
     */
    protected $variantId;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return array
     */
    public function getAssetOrder()
    {
        if (is_null($this->assetOrder)) {
            $value = $this->raw(ProductChangeAssetOrderAction::FIELD_ASSET_ORDER);
            $value = (array)$value;
            $this->assetOrder = $value;
        }
        return $this->assetOrder;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductChangeAssetOrderAction::FIELD_SKU);
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
            $value = $this->raw(ProductChangeAssetOrderAction::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductChangeAssetOrderAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param $assetOrder
     * @return $this
     */
    public function setAssetOrder($assetOrder)
    {
        $this->assetOrder = $assetOrder;

        return $this;
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
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
