<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Common\AssetSource;
use Commercetools\Types\Common\AssetSourceCollection;

class ProductSetAssetSourcesActionModel extends ProductUpdateActionModel implements ProductSetAssetSourcesAction
{
    const DISCRIMINATOR_VALUE = 'setAssetSources';

    /**
     * @var int
     */
    protected $variantId;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $assetKey;
    /**
     * @var string
     */
    protected $assetId;
    /**
     * @var mixed
     */
    protected $staged;
    /**
     * @var AssetSourceCollection
     */
    protected $sources;

    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ProductSetAssetSourcesAction::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductSetAssetSourcesAction::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            $value = $this->raw(ProductSetAssetSourcesAction::FIELD_ASSET_KEY);
            $value = (string)$value;
            $this->assetKey = $value;
        }
        return $this->assetKey;
    }
    /**
     * @return string
     */
    public function getAssetId()
    {
        if (is_null($this->assetId)) {
            $value = $this->raw(ProductSetAssetSourcesAction::FIELD_ASSET_ID);
            $value = (string)$value;
            $this->assetId = $value;
        }
        return $this->assetId;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductSetAssetSourcesAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }
    /**
     * @return AssetSourceCollection
     */
    public function getSources()
    {
        if (is_null($this->sources)) {
            $value = $this->raw(ProductSetAssetSourcesAction::FIELD_SOURCES);
            if (is_null($value)) {
                return $this->mapData(AssetSourceCollection::class, null);
            }
            $value = $this->mapData(AssetSourceCollection::class, $value);
            $this->sources = $value;
        }
        return $this->sources;
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
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
    }
    /**
     * @param string $assetKey
     * @return $this
     */
    public function setAssetKey(string $assetKey)
    {
        $this->assetKey = (string)$assetKey;

        return $this;
    }
    /**
     * @param string $assetId
     * @return $this
     */
    public function setAssetId(string $assetId)
    {
        $this->assetId = (string)$assetId;

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
     * @param AssetSourceCollection $sources
     * @return $this
     */
    public function setSources(AssetSourceCollection $sources)
    {
        $this->sources = $sources;

        return $this;
    }

}
