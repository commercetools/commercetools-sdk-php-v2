<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\PriceDraftCollection;
use Commercetools\Types\Common\ImageCollection;
use Commercetools\Types\Common\PriceDraft;
use Commercetools\Types\Common\AssetDraft;
use Commercetools\Types\Common\AssetDraftCollection;
use Commercetools\Types\Common\Image;

class ProductVariantDraftModel extends JsonObjectModel implements ProductVariantDraft {
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var PriceDraftCollection
     */
    protected $prices;
    /**
     * @var AttributeCollection
     */
    protected $attributes;
    /**
     * @var ImageCollection
     */
    protected $images;
    /**
     * @var AssetDraftCollection
     */
    protected $assets;

    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductVariantDraft::FIELD_SKU);
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
            $value = $this->raw(ProductVariantDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return PriceDraftCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            $value = $this->raw(ProductVariantDraft::FIELD_PRICES);
            if (is_null($value)) {
                return $this->mapData(PriceDraftCollection::class, null);
            }
            $value = $this->mapData(PriceDraftCollection::class, $value);
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
            $value = $this->raw(ProductVariantDraft::FIELD_ATTRIBUTES);
            if (is_null($value)) {
                return $this->mapData(AttributeCollection::class, null);
            }
            $value = $this->mapData(AttributeCollection::class, $value);
            $this->attributes = $value;
        }
        return $this->attributes;
    }
    /**
     * @return ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            $value = $this->raw(ProductVariantDraft::FIELD_IMAGES);
            if (is_null($value)) {
                return $this->mapData(ImageCollection::class, null);
            }
            $value = $this->mapData(ImageCollection::class, $value);
            $this->images = $value;
        }
        return $this->images;
    }
    /**
     * @return AssetDraftCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            $value = $this->raw(ProductVariantDraft::FIELD_ASSETS);
            if (is_null($value)) {
                return $this->mapData(AssetDraftCollection::class, null);
            }
            $value = $this->mapData(AssetDraftCollection::class, $value);
            $this->assets = $value;
        }
        return $this->assets;
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
     * @param PriceDraftCollection $prices
     * @return $this
     */
    public function setPrices(PriceDraftCollection $prices)
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
     * @param ImageCollection $images
     * @return $this
     */
    public function setImages(ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }
    /**
     * @param AssetDraftCollection $assets
     * @return $this
     */
    public function setAssets(AssetDraftCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

}
