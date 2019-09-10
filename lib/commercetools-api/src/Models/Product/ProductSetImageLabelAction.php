<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductSetImageLabelAction extends ProductUpdateAction
{
    
    const FIELD_SKU = 'sku';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_IMAGE_URL = 'imageUrl';
    const FIELD_LABEL = 'label';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return string|null
     */
    public function getSku();
    
    /**
     *
     * @return int|null
     */
    public function getVariantId();
    
    /**
     *
     * @return string|null
     */
    public function getImageUrl();
    
    /**
     *
     * @return string|null
     */
    public function getLabel();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setSku(?string $sku): void;
    
    public function setVariantId(?int $variantId): void;
    
    public function setImageUrl(?string $imageUrl): void;
    
    public function setLabel(?string $label): void;
    
    public function setStaged(?bool $staged): void;
}