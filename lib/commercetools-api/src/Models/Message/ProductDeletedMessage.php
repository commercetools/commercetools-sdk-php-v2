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

interface ProductDeletedMessage extends Message
{
    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    public const FIELD_CURRENT_PROJECTION = 'currentProjection';

    /**
     * <p>List of image URLs that were removed during the <a href="ctp:api:type:Product">Delete Product</a> request.</p>
     *

     * @return null|array
     */
    public function getRemovedImageUrls();

    /**
     * <p>Current <a href="ctp:api:type:ProductProjection">Product Projection</a> of the deleted <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductProjection
     */
    public function getCurrentProjection();

    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void;

    /**
     * @param ?ProductProjection $currentProjection
     */
    public function setCurrentProjection(?ProductProjection $currentProjection): void;
}
