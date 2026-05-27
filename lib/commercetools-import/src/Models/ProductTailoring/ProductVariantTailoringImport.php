<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductTailoring;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface ProductVariantTailoringImport extends JsonObject
{
    public const FIELD_SKU = 'sku';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>The <code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to be tailored.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Maps to <code>ProductVariantTailoring.images</code>.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Maps to <code>ProductVariantTailoring.assets</code>.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <p>Maps to <code>ProductVariantTailoring.attributes</code>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;
}
