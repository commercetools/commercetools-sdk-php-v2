<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductSetAssetCustomFieldAction extends ProductUpdateAction {
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_NAME = 'name';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';
    const FIELD_VALUE = 'value';
    const FIELD_VARIANT_ID = 'variantId';

    /**
     * @return string
     */
    public function getAssetKey();

    /**
     * @return string
     */
    public function getAssetId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return int
     */
    public function getVariantId();

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
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

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
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

}
