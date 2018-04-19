<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Type\TypeReference;

interface ProductSetAssetCustomTypeAction extends ProductUpdateAction
{
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_FIELDS = 'fields';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';
    const FIELD_TYPE = 'type';
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
    public function getFields();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @return TypeReference
     */
    public function getType();

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
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields);

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
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

}
