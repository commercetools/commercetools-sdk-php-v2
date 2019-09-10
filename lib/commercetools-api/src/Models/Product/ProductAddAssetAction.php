<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\AssetDraft;

interface ProductAddAssetAction extends ProductUpdateAction
{
    
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';
    const FIELD_ASSET = 'asset';
    const FIELD_POSITION = 'position';

    /**
     *
     * @return int|null
     */
    public function getVariantId();
    
    /**
     *
     * @return string|null
     */
    public function getSku();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    
    /**
     *
     * @return AssetDraft|null
     */
    public function getAsset();
    
    /**
     *
     * @return int|null
     */
    public function getPosition();
    public function setVariantId(?int $variantId): void;
    
    public function setSku(?string $sku): void;
    
    public function setStaged(?bool $staged): void;
    
    public function setAsset(?AssetDraft $asset): void;
    
    public function setPosition(?int $position): void;
}