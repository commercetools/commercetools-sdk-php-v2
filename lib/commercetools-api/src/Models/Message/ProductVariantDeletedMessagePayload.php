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
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">Product Variant</a> that was added.</p>
     *

     * @return null|ProductVariant
     */
    public function getVariant();

    /**
     * <p>List of image URLs that were removed with the <a href="ctp:api:type:ProductRemoveVariantAction">Remove Product Variant</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedImageUrls();

    /**
     * @param ?ProductVariant $variant
     */
    public function setVariant(?ProductVariant $variant): void;

    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void;
}
