<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductVariant extends JsonObject {
    protected $id;
    protected $sku;
    protected $key;
    protected $prices;
    protected $attributes;
    protected $price;
    protected $images;
    protected $assets;
    protected $availability;
    protected $isMatchingVariant;
    protected $scopedPrice;
    protected $scopedPriceDiscounted;

    /**
     * @return int
     */
    public function getId(): int
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->id;
    }
                

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
     * @return PriceCollection
     */
    public function getPrices(): PriceCollection
    {
        if (is_null($this->prices)) {
            $value = $this->raw('prices');
            if (!is_null($value)) {
                $this->prices = Mapper::map($value, PriceCollection::class);
            } else {
                return Mapper::map([], PriceCollection::class);
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
     * @return Price
     */
    public function getPrice(): Price
    {
        if (is_null($this->price)) {
            $value = $this->raw('price');
            if (!is_null($value)) {
                $this->price = Mapper::map($value, Price::class);
            } else {
                return Mapper::map([], Price::class);
            }
        }
        return $this->price;
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
     * @return AssetCollection
     */
    public function getAssets(): AssetCollection
    {
        if (is_null($this->assets)) {
            $value = $this->raw('assets');
            if (!is_null($value)) {
                $this->assets = Mapper::map($value, AssetCollection::class);
            } else {
                return Mapper::map([], AssetCollection::class);
            }
        }
        return $this->assets;
    }
                

    /**
     * @return ProductVariantAvailability
     */
    public function getAvailability(): ProductVariantAvailability
    {
        if (is_null($this->availability)) {
            $value = $this->raw('availability');
            if (!is_null($value)) {
                $this->availability = Mapper::map($value, ProductVariantAvailability::class);
            } else {
                return Mapper::map([], ProductVariantAvailability::class);
            }
        }
        return $this->availability;
    }
                

    /**
     * @return bool
     */
    public function getIsMatchingVariant(): bool
    {
        if (is_null($this->isMatchingVariant)) {
            $value = $this->raw('isMatchingVariant');
            if (!is_null($value)) {
                $this->isMatchingVariant = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->isMatchingVariant;
    }
                

    /**
     * @return ScopedPrice
     */
    public function getScopedPrice(): ScopedPrice
    {
        if (is_null($this->scopedPrice)) {
            $value = $this->raw('scopedPrice');
            if (!is_null($value)) {
                $this->scopedPrice = Mapper::map($value, ScopedPrice::class);
            } else {
                return Mapper::map([], ScopedPrice::class);
            }
        }
        return $this->scopedPrice;
    }
                

    /**
     * @return bool
     */
    public function getScopedPriceDiscounted(): bool
    {
        if (is_null($this->scopedPriceDiscounted)) {
            $value = $this->raw('scopedPriceDiscounted');
            if (!is_null($value)) {
                $this->scopedPriceDiscounted = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->scopedPriceDiscounted;
    }
                
}
