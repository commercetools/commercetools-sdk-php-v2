<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\PriceCollection;
use Commercetools\Types\Common\ScopedPrice;
use Commercetools\Types\Common\Asset;
use Commercetools\Types\Common\ImageCollection;
use Commercetools\Types\Common\AssetCollection;
use Commercetools\Types\Common\Price;
use Commercetools\Types\Common\Image;

class ProductVariantModel extends JsonObjectModel implements ProductVariant {
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var PriceCollection
     */
    protected $prices;
    /**
     * @var AttributeCollection
     */
    protected $attributes;
    /**
     * @var Price
     */
    protected $price;
    /**
     * @var ImageCollection
     */
    protected $images;
    /**
     * @var AssetCollection
     */
    protected $assets;
    /**
     * @var ProductVariantAvailability
     */
    protected $availability;
    /**
     * @var mixed
     */
    protected $isMatchingVariant;
    /**
     * @var ScopedPrice
     */
    protected $scopedPrice;
    /**
     * @var mixed
     */
    protected $scopedPriceDiscounted;

    /**
     * @return int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(ProductVariant::FIELD_ID);
            $value = (int)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductVariant::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ProductVariant::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return PriceCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            $value = $this->raw(ProductVariant::FIELD_PRICES);
            if (is_null($value)) {
                return $this->mapData(PriceCollection::class, null);
            }
            $value = $this->mapData(PriceCollection::class, $value);
            $this->prices = $value;
        }
        return $this->prices;
    }
    /**
     * @return AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            $value = $this->raw(ProductVariant::FIELD_ATTRIBUTES);
            if (is_null($value)) {
                return $this->mapData(AttributeCollection::class, null);
            }
            $value = $this->mapData(AttributeCollection::class, $value);
            $this->attributes = $value;
        }
        return $this->attributes;
    }
    /**
     * @return Price
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(ProductVariant::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(Price::class, null);
            }
            $value = $this->mapData(Price::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            $value = $this->raw(ProductVariant::FIELD_IMAGES);
            if (is_null($value)) {
                return $this->mapData(ImageCollection::class, null);
            }
            $value = $this->mapData(ImageCollection::class, $value);
            $this->images = $value;
        }
        return $this->images;
    }
    /**
     * @return AssetCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            $value = $this->raw(ProductVariant::FIELD_ASSETS);
            if (is_null($value)) {
                return $this->mapData(AssetCollection::class, null);
            }
            $value = $this->mapData(AssetCollection::class, $value);
            $this->assets = $value;
        }
        return $this->assets;
    }
    /**
     * @return ProductVariantAvailability
     */
    public function getAvailability()
    {
        if (is_null($this->availability)) {
            $value = $this->raw(ProductVariant::FIELD_AVAILABILITY);
            if (is_null($value)) {
                return $this->mapData(ProductVariantAvailability::class, null);
            }
            $value = $this->mapData(ProductVariantAvailability::class, $value);

            $this->availability = $value;
        }
        return $this->availability;
    }
    /**
     * @return mixed
     */
    public function getIsMatchingVariant()
    {
        if (is_null($this->isMatchingVariant)) {
            $value = $this->raw(ProductVariant::FIELD_IS_MATCHING_VARIANT);
            $this->isMatchingVariant = $value;
        }
        return $this->isMatchingVariant;
    }
    /**
     * @return ScopedPrice
     */
    public function getScopedPrice()
    {
        if (is_null($this->scopedPrice)) {
            $value = $this->raw(ProductVariant::FIELD_SCOPED_PRICE);
            if (is_null($value)) {
                return $this->mapData(ScopedPrice::class, null);
            }
            $value = $this->mapData(ScopedPrice::class, $value);

            $this->scopedPrice = $value;
        }
        return $this->scopedPrice;
    }
    /**
     * @return mixed
     */
    public function getScopedPriceDiscounted()
    {
        if (is_null($this->scopedPriceDiscounted)) {
            $value = $this->raw(ProductVariant::FIELD_SCOPED_PRICE_DISCOUNTED);
            $this->scopedPriceDiscounted = $value;
        }
        return $this->scopedPriceDiscounted;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = (int)$id;

        return $this;
    }
    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param PriceCollection $prices
     * @return $this
     */
    public function setPrices(PriceCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }
    /**
     * @param AttributeCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }
    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;

        return $this;
    }
    /**
     * @param ImageCollection $images
     * @return $this
     */
    public function setImages(ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }
    /**
     * @param AssetCollection $assets
     * @return $this
     */
    public function setAssets(AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }
    /**
     * @param ProductVariantAvailability $availability
     * @return $this
     */
    public function setAvailability(ProductVariantAvailability $availability)
    {
        $this->availability = $availability;

        return $this;
    }
    /**
     * @param $isMatchingVariant
     * @return $this
     */
    public function setIsMatchingVariant($isMatchingVariant)
    {
        $this->isMatchingVariant = $isMatchingVariant;

        return $this;
    }
    /**
     * @param ScopedPrice $scopedPrice
     * @return $this
     */
    public function setScopedPrice(ScopedPrice $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;

        return $this;
    }
    /**
     * @param $scopedPriceDiscounted
     * @return $this
     */
    public function setScopedPriceDiscounted($scopedPriceDiscounted)
    {
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;

        return $this;
    }

}
