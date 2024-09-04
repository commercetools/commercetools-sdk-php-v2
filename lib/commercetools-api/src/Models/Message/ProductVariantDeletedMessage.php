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

interface ProductVariantDeletedMessage extends Message
{
    public const FIELD_VARIANT = 'variant';
    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';
    public const FIELD_STAGED = 'staged';

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
     * <p>If <code>true</code>, this message informs that only the staged ProductVariant has been removed by the update action.
     * If <code>false</code>, both the current and staged ProductVariant have been removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?ProductVariant $variant
     */
    public function setVariant(?ProductVariant $variant): void;

    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
