<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringSetExternalImagesAction extends ProductTailoringUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_IMAGES = 'images';
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
     * <p>Images of the tailored ProductVariant.</p>
     * <p>Don't provide this field if you want to remove all images from the tailored Product Variant.
     * Set to <code>[]</code> (empty) if you want to hide all images of the original ProductVariant on the tailored ProductVariant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>If <code>true</code>, only the staged <code>images</code> is updated. If <code>false</code>, both the current and staged <code>images</code> is updated.</p>
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
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
