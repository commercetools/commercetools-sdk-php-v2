<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductChangeAssetNameAction extends ProductUpdateAction
{
    
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_NAME = 'name';

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
     * @return string|null
     */
    public function getAssetId();
    
    /**
     *
     * @return string|null
     */
    public function getAssetKey();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    public function setVariantId(?int $variantId): void;
    
    public function setSku(?string $sku): void;
    
    public function setStaged(?bool $staged): void;
    
    public function setAssetId(?string $assetId): void;
    
    public function setAssetKey(?string $assetKey): void;
    
    public function setName(?LocalizedString $name): void;
}