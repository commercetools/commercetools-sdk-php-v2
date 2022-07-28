<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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
     * <p>The scope controls which part of the product information is published.</p>
     *

     * @return null|string
     */
    public function getScope();

    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void;

    /**
     * @param ?ProductProjection $productProjection
     */
    public function setProductProjection(?ProductProjection $productProjection): void;

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void;
}
