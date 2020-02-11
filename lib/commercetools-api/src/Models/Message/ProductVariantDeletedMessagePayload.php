<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Product\ProductVariant;

interface ProductVariantDeletedMessagePayload extends MessagePayload
{

    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    public const FIELD_VARIANT = 'variant';

    /**
     * @return null|array
     */
    public function getRemovedImageUrls();

    /**
     * @return null|ProductVariant
     */
    public function getVariant();

    public function setRemovedImageUrls(?array $removedImageUrls): void;

    public function setVariant(?ProductVariant $variant): void;
}
