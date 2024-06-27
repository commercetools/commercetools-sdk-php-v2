<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringRemoveImageAction extends ProductTailoringUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_IMAGE_URL = 'imageUrl';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the tailored ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The <code>sku</code> of the tailored ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The URL of the image to remove.</p>
     *

     * @return null|string
     */
    public function getImageUrl();

    /**
     * <p>If <code>true</code>, only the staged image is removed. If <code>false</code>, both the current and staged image is removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
