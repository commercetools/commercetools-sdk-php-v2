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

interface ProductPublishedMessagePayload extends MessagePayload
{
    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    public const FIELD_PRODUCT_PROJECTION = 'productProjection';
    public const FIELD_SCOPE = 'scope';

    /**
     * <p>List of image URLs which were removed during the <a href="ctp:api:type:ProductPublishAction">Publish</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedImageUrls();

    /**
     * <p>Current <a href="ctp:api:type:ProductProjection">Product Projection</a> of the <a href="ctp:api:type:Product">Product</a> at the time of creation.</p>
     *

     * @return null|ProductProjection
     */
    public function getProductProjection();

    /**
     * <p><a href="ctp:api:type:ProductPublishScope">Publishing Scope</a> that was used during the <a href="ctp:api:type:ProductPublishAction">Publish</a> update action.</p>
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
