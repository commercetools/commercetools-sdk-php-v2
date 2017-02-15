<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductVariantDraft extends JsonObject {
    protected $sku;
    protected $key;
    protected $prices;
    protected $attributes;
    protected $images;
    protected $assets;

    /**
     * @return string
     */
    public function getSku(): string
    {
        if (is_null($this->sku)) {
            $value = $this->raw('sku');
            if (!is_null($value)) {
                $this->sku = (string)$value;
            } else {
                return '';
            }
        }
        return $this->sku;
    }
                

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return PriceDraftCollection
     */
    public function getPrices(): PriceDraftCollection
    {
        if (is_null($this->prices)) {
            $value = $this->raw('prices');
            if (!is_null($value)) {
                $this->prices = Mapper::map($value, PriceDraftCollection::class);
            } else {
                return Mapper::map([], PriceDraftCollection::class);
            }
        }
        return $this->prices;
    }
                

    /**
     * @return AttributeCollection
     */
    public function getAttributes(): AttributeCollection
    {
        if (is_null($this->attributes)) {
            $value = $this->raw('attributes');
            if (!is_null($value)) {
                $this->attributes = Mapper::map($value, AttributeCollection::class);
            } else {
                return Mapper::map([], AttributeCollection::class);
            }
        }
        return $this->attributes;
    }
                

    /**
     * @return ImageCollection
     */
    public function getImages(): ImageCollection
    {
        if (is_null($this->images)) {
            $value = $this->raw('images');
            if (!is_null($value)) {
                $this->images = Mapper::map($value, ImageCollection::class);
            } else {
                return Mapper::map([], ImageCollection::class);
            }
        }
        return $this->images;
    }
                

    /**
     * @return AssetDraftCollection
     */
    public function getAssets(): AssetDraftCollection
    {
        if (is_null($this->assets)) {
            $value = $this->raw('assets');
            if (!is_null($value)) {
                $this->assets = Mapper::map($value, AssetDraftCollection::class);
            } else {
                return Mapper::map([], AssetDraftCollection::class);
            }
        }
        return $this->assets;
    }
                
}
