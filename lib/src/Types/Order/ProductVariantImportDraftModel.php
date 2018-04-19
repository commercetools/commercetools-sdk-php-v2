<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\PriceCollection;
use Commercetools\Types\Product\Attribute;
use Commercetools\Types\Common\ImageCollection;
use Commercetools\Types\Product\AttributeCollection;
use Commercetools\Types\Common\Price;
use Commercetools\Types\Common\Image;

class ProductVariantImportDraftModel extends JsonObjectModel implements ProductVariantImportDraft
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var PriceCollection
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
     * @return int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(ProductVariantImportDraft::FIELD_ID);
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
            $value = $this->raw(ProductVariantImportDraft::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return PriceCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            $value = $this->raw(ProductVariantImportDraft::FIELD_PRICES);
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
            $value = $this->raw(ProductVariantImportDraft::FIELD_ATTRIBUTES);
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
            $value = $this->raw(ProductVariantImportDraft::FIELD_IMAGES);
            if (is_null($value)) {
                return $this->mapData(ImageCollection::class, null);
            }
            $value = $this->mapData(ImageCollection::class, $value);
            $this->images = $value;
        }
        return $this->images;
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
     * @param ImageCollection $images
     * @return $this
     */
    public function setImages(ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

}
