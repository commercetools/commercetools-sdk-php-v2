<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductAddVariantAction extends ProductUpdateAction
{
    public const FIELD_SKU = 'sku';
    public const FIELD_KEY = 'key';
    public const FIELD_PRICES = 'prices';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_STAGED = 'staged';
    public const FIELD_ASSETS = 'assets';

    /**
     * <p>Value to set. Must be unique.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Value to set. Must be unique.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>EmbeddedPrices for the Product Variant.</p>
     *

     * @return null|EmbeddedPriceDraftCollection
     */
    public function getPrices();

    /**
     * <p>Images for the Product Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Attributes for the Product Variant.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>If <code>true</code> the new Product Variant is only staged. If <code>false</code> the new Product Variant is both current and staged.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Media assets for the Product Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?EmbeddedPriceDraftCollection $prices
     */
    public function setPrices(?EmbeddedPriceDraftCollection $prices): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;
}
