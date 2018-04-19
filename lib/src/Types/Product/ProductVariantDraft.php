<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\PriceDraftCollection;
use Commercetools\Types\Common\ImageCollection;
use Commercetools\Types\Common\PriceDraft;
use Commercetools\Types\Common\AssetDraft;
use Commercetools\Types\Common\AssetDraftCollection;
use Commercetools\Types\Common\Image;

interface ProductVariantDraft extends JsonObject
{
    const FIELD_SKU = 'sku';
    const FIELD_KEY = 'key';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_IMAGES = 'images';
    const FIELD_ASSETS = 'assets';

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return PriceDraftCollection
     */
    public function getPrices();

    /**
     * @return AttributeCollection
     */
    public function getAttributes();

    /**
     * @return ImageCollection
     */
    public function getImages();

    /**
     * @return AssetDraftCollection
     */
    public function getAssets();

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param PriceDraftCollection $prices
     * @return $this
     */
    public function setPrices(PriceDraftCollection $prices);

    /**
     * @param AttributeCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeCollection $attributes);

    /**
     * @param ImageCollection $images
     * @return $this
     */
    public function setImages(ImageCollection $images);

    /**
     * @param AssetDraftCollection $assets
     * @return $this
     */
    public function setAssets(AssetDraftCollection $assets);

}
