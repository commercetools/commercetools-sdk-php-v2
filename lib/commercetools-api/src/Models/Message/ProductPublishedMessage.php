<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Product\ProductProjection;

interface ProductPublishedMessage extends Message
{

    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    public const FIELD_PRODUCT_PROJECTION = 'productProjection';
    public const FIELD_SCOPE = 'scope';

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
