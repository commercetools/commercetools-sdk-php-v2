<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Product\ProductVariant;

interface ProductVariantDeletedMessage extends Message
{
    
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    const FIELD_VARIANT = 'variant';

    /**
     *
     * @return array|null
     */
    public function getRemovedImageUrls();
    
    /**
     *
     * @return ProductVariant|null
     */
    public function getVariant();
    public function setRemovedImageUrls(?array $removedImageUrls): void;
    
    public function setVariant(?ProductVariant $variant): void;
}