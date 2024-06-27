<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantTailoring extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';

    /**
     * <p>The <code>id</code> of the tailored <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p>Images of the tailored Product Variant.
     * If present, these images will override the images of the corresponding <a href="ctp:api:type:ProductVariant">ProductVariant</a> in total.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Media assets of the tailored Product Variant.
     * If present, these assets will override the assets of the corresponding <a href="ctp:api:type:ProductVariant">ProductVariant</a> in total.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;
}
