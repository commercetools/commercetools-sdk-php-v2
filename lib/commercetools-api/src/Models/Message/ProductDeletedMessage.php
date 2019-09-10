<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Product\ProductProjection;

interface ProductDeletedMessage extends Message
{
    
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    const FIELD_CURRENT_PROJECTION = 'currentProjection';

    /**
     *
     * @return array|null
     */
    public function getRemovedImageUrls();
    
    /**
     *
     * @return ProductProjection|null
     */
    public function getCurrentProjection();
    public function setRemovedImageUrls(?array $removedImageUrls): void;
    
    public function setCurrentProjection(?ProductProjection $currentProjection): void;
}