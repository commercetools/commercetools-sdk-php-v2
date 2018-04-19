<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\AssetDraft;

interface ProductAddAssetAction extends ProductUpdateAction
{
    const FIELD_ASSET = 'asset';
    const FIELD_SKU = 'sku';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_STAGED = 'staged';
    const FIELD_POSITION = 'position';

    /**
     * @return AssetDraft
     */
    public function getAsset();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @param AssetDraft $asset
     * @return $this
     */
    public function setAsset(AssetDraft $asset);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position);

}
