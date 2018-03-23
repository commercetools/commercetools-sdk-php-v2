<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\LocalizedString;

interface ProductSetAssetDescriptionAction extends ProductUpdateAction {
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_SKU = 'sku';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_STAGED = 'staged';

    /**
     * @return string
     */
    public function getAssetKey();

    /**
     * @return string
     */
    public function getAssetId();

    /**
     * @return LocalizedString
     */
    public function getDescription();

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
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

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

}
