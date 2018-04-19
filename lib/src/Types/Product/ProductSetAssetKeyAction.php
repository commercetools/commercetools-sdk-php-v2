<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductSetAssetKeyAction extends ProductUpdateAction
{
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_ASSET_KEY = 'assetKey';

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @return string
     */
    public function getAssetId();

    /**
     * @return string
     */
    public function getAssetKey();

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
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

    /**
     * @param string $assetId
     * @return $this
     */
    public function setAssetId(string $assetId);

    /**
     * @param string $assetKey
     * @return $this
     */
    public function setAssetKey(string $assetKey);

}
