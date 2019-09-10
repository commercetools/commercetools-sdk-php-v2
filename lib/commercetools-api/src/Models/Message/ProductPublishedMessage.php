<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Product\ProductProjection;

interface ProductPublishedMessage extends Message
{
    
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    const FIELD_PRODUCT_PROJECTION = 'productProjection';
    const FIELD_SCOPE = 'scope';

    /**
     *
     * @return array|null
     */
    public function getRemovedImageUrls();
    
    /**
     *
     * @return ProductProjection|null
     */
    public function getProductProjection();
    
    /**
     *
     * @return string|null
     */
    public function getScope();
    public function setRemovedImageUrls(?array $removedImageUrls): void;
    
    public function setProductProjection(?ProductProjection $productProjection): void;
    
    public function setScope(?string $scope): void;
}