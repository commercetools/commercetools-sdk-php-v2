<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantData extends JsonObject
{
    public const FIELD_SKU = 'sku';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_ASSETS = 'assets';

    /**
     * <p>User-defined unique SKU of the Variant.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Images of the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Attributes of the Variant according to the respective <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Media assets of the Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;
}
