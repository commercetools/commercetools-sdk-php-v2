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

interface ProductDeletedMessagePayload extends MessagePayload
{
    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    public const FIELD_CURRENT_PROJECTION = 'currentProjection';

    /**
     * @return null|array
     */
    public function getRemovedImageUrls();

    /**
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
