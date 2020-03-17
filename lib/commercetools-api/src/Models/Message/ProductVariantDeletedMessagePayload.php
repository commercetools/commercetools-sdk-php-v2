<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantDeletedMessagePayload extends MessagePayload
{
    public const FIELD_VARIANT = 'variant';
    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';

    /**
     * @return null|ProductVariant
     */
    public function getVariant();

    /**
     * @return null|array
     */
    public function getRemovedImageUrls();

    public function setVariant(?ProductVariant $variant): void;

    public function setRemovedImageUrls(?array $removedImageUrls): void;
}
