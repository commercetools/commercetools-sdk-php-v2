<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductProjection;

interface ProductPublishedMessagePayload extends MessagePayload
{
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    const FIELD_PRODUCT_PROJECTION = 'productProjection';
    const FIELD_SCOPE = 'scope';

    /**
     * @return null|array
     */
    public function getRemovedImageUrls();

    /**
     * @return null|ProductProjection
     */
    public function getProductProjection();

    /**
     * @return null|string
     */
    public function getScope();

    public function setRemovedImageUrls(?array $removedImageUrls): void;

    public function setProductProjection(?ProductProjection $productProjection): void;

    public function setScope(?string $scope): void;
}
