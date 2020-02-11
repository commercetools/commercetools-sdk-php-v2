<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;

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
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices();

    /**
     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @return null|AssetCollection
     */
    public function getAssets();

    public function setSku(?string $sku): void;

    public function setKey(?string $key): void;

    public function setPrices(?PriceDraftCollection $prices): void;

    public function setImages(?ImageCollection $images): void;

    public function setAttributes(?AttributeCollection $attributes): void;

    public function setStaged(?bool $staged): void;

    public function setAssets(?AssetCollection $assets): void;
}
