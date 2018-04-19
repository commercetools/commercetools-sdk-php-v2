<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Common\PriceDraftCollection;
use Commercetools\Types\Common\ImageCollection;
use Commercetools\Types\Common\PriceDraft;
use Commercetools\Types\Common\Image;

class ProductAddVariantActionModel extends ProductUpdateActionModel implements ProductAddVariantAction
{
    const DISCRIMINATOR_VALUE = 'addVariant';

    /**
     * @var AttributeCollection
     */
    protected $attributes;
    /**
     * @var ImageCollection
     */
    protected $images;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var PriceDraftCollection
     */
    protected $prices;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            $value = $this->raw(ProductAddVariantAction::FIELD_ATTRIBUTES);
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
            $value = $this->raw(ProductAddVariantAction::FIELD_IMAGES);
            if (is_null($value)) {
                return $this->mapData(ImageCollection::class, null);
            }
            $value = $this->mapData(ImageCollection::class, $value);
            $this->images = $value;
        }
        return $this->images;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ProductAddVariantAction::FIELD_KEY);
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
            $value = $this->raw(ProductAddVariantAction::FIELD_PRICES);
            if (is_null($value)) {
                return $this->mapData(PriceDraftCollection::class, null);
            }
            $value = $this->mapData(PriceDraftCollection::class, $value);
            $this->prices = $value;
        }
        return $this->prices;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductAddVariantAction::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductAddVariantAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
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
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
    }
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
