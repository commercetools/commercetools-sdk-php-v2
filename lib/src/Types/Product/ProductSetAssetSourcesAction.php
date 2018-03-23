<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\AssetSource;
use Commercetools\Types\Common\AssetSourceCollection;

interface ProductSetAssetSourcesAction extends ProductUpdateAction {
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_STAGED = 'staged';
    const FIELD_SOURCES = 'sources';

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return string
     */
    public function getAssetKey();

    /**
     * @return string
     */
    public function getAssetId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @return AssetSourceCollection
     */
    public function getSources();

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param string $assetKey
     * @return $this
     */
    public function setAssetKey(string $assetKey);

    /**
     * @param string $assetId
     * @return $this
     */
    public function setAssetId(string $assetId);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

    /**
     * @param AssetSourceCollection $sources
     * @return $this
     */
    public function setSources(AssetSourceCollection $sources);

}
