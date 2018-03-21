<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Common\AssetDraft;

class ProductAddAssetActionModel extends ProductUpdateActionModel implements ProductAddAssetAction {
    const DISCRIMINATOR_VALUE = 'addAsset';

    /**
     * @var AssetDraft
     */
    protected $asset;
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
     * @var int
     */
    protected $position;

    /**
     * @return AssetDraft
     */
    public function getAsset()
    {
        if (is_null($this->asset)) {
            $value = $this->raw(ProductAddAssetAction::FIELD_ASSET);
            if (is_null($value)) {
                return $this->mapData(AssetDraft::class, null);
            }
            $value = $this->mapData(AssetDraft::class, $value);

            $this->asset = $value;
        }
        return $this->asset;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductAddAssetAction::FIELD_SKU);
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
            $value = $this->raw(ProductAddAssetAction::FIELD_VARIANT_ID);
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
            $value = $this->raw(ProductAddAssetAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }
    /**
     * @return int
     */
    public function getPosition()
    {
        if (is_null($this->position)) {
            $value = $this->raw(ProductAddAssetAction::FIELD_POSITION);
            $value = (int)$value;
            $this->position = $value;
        }
        return $this->position;
    }

    /**
     * @param AssetDraft $asset
     * @return $this
     */
    public function setAsset(AssetDraft $asset)
    {
        $this->asset = $asset;

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
    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position)
    {
        $this->position = (int)$position;

        return $this;
    }

}
