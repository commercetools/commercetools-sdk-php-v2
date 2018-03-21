<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\PriceCollection;
use Commercetools\Types\Common\ScopedPrice;
use Commercetools\Types\Common\Asset;
use Commercetools\Types\Common\ImageCollection;
use Commercetools\Types\Common\AssetCollection;
use Commercetools\Types\Common\Price;
use Commercetools\Types\Common\Image;

interface ProductVariant extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_SKU = 'sku';
    const FIELD_KEY = 'key';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_PRICE = 'price';
    const FIELD_IMAGES = 'images';
    const FIELD_ASSETS = 'assets';
    const FIELD_AVAILABILITY = 'availability';
    const FIELD_IS_MATCHING_VARIANT = 'isMatchingVariant';
    const FIELD_SCOPED_PRICE = 'scopedPrice';
    const FIELD_SCOPED_PRICE_DISCOUNTED = 'scopedPriceDiscounted';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return PriceCollection
     */
    public function getPrices();

    /**
     * @return AttributeCollection
     */
    public function getAttributes();

    /**
     * @return Price
     */
    public function getPrice();

    /**
     * @return ImageCollection
     */
    public function getImages();

    /**
     * @return AssetCollection
     */
    public function getAssets();

    /**
     * @return ProductVariantAvailability
     */
    public function getAvailability();

    /**
     * @return mixed
     */
    public function getIsMatchingVariant();

    /**
     * @return ScopedPrice
     */
    public function getScopedPrice();

    /**
     * @return mixed
     */
    public function getScopedPriceDiscounted();

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id);

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
     * @param PriceCollection $prices
     * @return $this
     */
    public function setPrices(PriceCollection $prices);

    /**
     * @param AttributeCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeCollection $attributes);

    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price);

    /**
     * @param ImageCollection $images
     * @return $this
     */
    public function setImages(ImageCollection $images);

    /**
     * @param AssetCollection $assets
     * @return $this
     */
    public function setAssets(AssetCollection $assets);

    /**
     * @param ProductVariantAvailability $availability
     * @return $this
     */
    public function setAvailability(ProductVariantAvailability $availability);

    /**
     * @param mixed $isMatchingVariant
     * @return $this
     */
    public function setIsMatchingVariant($isMatchingVariant);

    /**
     * @param ScopedPrice $scopedPrice
     * @return $this
     */
    public function setScopedPrice(ScopedPrice $scopedPrice);

    /**
     * @param mixed $scopedPriceDiscounted
     * @return $this
     */
    public function setScopedPriceDiscounted($scopedPriceDiscounted);

}
