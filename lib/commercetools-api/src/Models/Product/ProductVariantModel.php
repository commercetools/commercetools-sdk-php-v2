<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Api\Models\Common\ScopedPrice;
use Commercetools\Api\Models\Common\ScopedPriceModel;

final class ProductVariantModel extends JsonObjectModel implements ProductVariant
{
    
    public function __construct(
        ScopedPrice $scopedPrice = null,
        ImageCollection $images = null,
        AssetCollection $assets = null,
        bool $isMatchingVariant = null,
        Price $price = null,
        bool $scopedPriceDiscounted = null,
        AttributeCollection $attributes = null,
        ProductVariantAvailability $availability = null,
        int $id = null,
        PriceCollection $prices = null,
        string $sku = null,
        string $key = null
    ) {
        $this->scopedPrice = $scopedPrice;
        $this->images = $images;
        $this->assets = $assets;
        $this->isMatchingVariant = $isMatchingVariant;
        $this->price = $price;
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;
        $this->attributes = $attributes;
        $this->availability = $availability;
        $this->id = $id;
        $this->prices = $prices;
        $this->sku = $sku;
        $this->key = $key;
        
    }

    /**
     * @var ?ScopedPrice
     */
    protected $scopedPrice;
    
    /**
     * @var ?ImageCollection
     */
    protected $images;
    
    /**
     * @var ?AssetCollection
     */
    protected $assets;
    
    /**
     * @var ?bool
     */
    protected $isMatchingVariant;
    
    /**
     * @var ?Price
     */
    protected $price;
    
    /**
     * @var ?bool
     */
    protected $scopedPriceDiscounted;
    
    /**
     * @var ?AttributeCollection
     */
    protected $attributes;
    
    /**
     * @var ?ProductVariantAvailability
     */
    protected $availability;
    
    /**
     * @var ?int
     */
    protected $id;
    
    /**
     * @var ?PriceCollection
     */
    protected $prices;
    
    /**
     * @var ?string
     */
    protected $sku;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return ScopedPrice|null
     */
    final public function getScopedPrice()
    {
       if (is_null($this->scopedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductVariant::FIELD_SCOPED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->scopedPrice = ScopedPriceModel::of($data);
       }
       return $this->scopedPrice;
    }
    
    /**
     *
     * @return ImageCollection|null
     */
    final public function getImages()
    {
       if (is_null($this->images)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductVariant::FIELD_IMAGES);
           if (is_null($data)) {
               return null;
           }
           $this->images = ImageCollection::fromArray($data);
       }
       return $this->images;
    }
    
    /**
     *
     * @return AssetCollection|null
     */
    final public function getAssets()
    {
       if (is_null($this->assets)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductVariant::FIELD_ASSETS);
           if (is_null($data)) {
               return null;
           }
           $this->assets = AssetCollection::fromArray($data);
       }
       return $this->assets;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsMatchingVariant()
    {
       if (is_null($this->isMatchingVariant)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductVariant::FIELD_IS_MATCHING_VARIANT);
           if (is_null($data)) {
               return null;
           }
           $this->isMatchingVariant = (bool)$data;
       }
       return $this->isMatchingVariant;
    }
    
    /**
     *
     * @return Price|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductVariant::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->price = PriceModel::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getScopedPriceDiscounted()
    {
       if (is_null($this->scopedPriceDiscounted)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductVariant::FIELD_SCOPED_PRICE_DISCOUNTED);
           if (is_null($data)) {
               return null;
           }
           $this->scopedPriceDiscounted = (bool)$data;
       }
       return $this->scopedPriceDiscounted;
    }
    
    /**
     *
     * @return AttributeCollection|null
     */
    final public function getAttributes()
    {
       if (is_null($this->attributes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductVariant::FIELD_ATTRIBUTES);
           if (is_null($data)) {
               return null;
           }
           $this->attributes = AttributeCollection::fromArray($data);
       }
       return $this->attributes;
    }
    
    /**
     *
     * @return ProductVariantAvailability|null
     */
    final public function getAvailability()
    {
       if (is_null($this->availability)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductVariant::FIELD_AVAILABILITY);
           if (is_null($data)) {
               return null;
           }
           
           $this->availability = ProductVariantAvailabilityModel::of($data);
       }
       return $this->availability;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductVariant::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (int)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return PriceCollection|null
     */
    final public function getPrices()
    {
       if (is_null($this->prices)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductVariant::FIELD_PRICES);
           if (is_null($data)) {
               return null;
           }
           $this->prices = PriceCollection::fromArray($data);
       }
       return $this->prices;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       if (is_null($this->sku)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductVariant::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductVariant::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setScopedPrice(?ScopedPrice $scopedPrice): void
    {
        $this->scopedPrice = $scopedPrice;
    }
    
    final public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }
    
    final public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }
    
    final public function setIsMatchingVariant(?bool $isMatchingVariant): void
    {
        $this->isMatchingVariant = $isMatchingVariant;
    }
    
    final public function setPrice(?Price $price): void
    {
        $this->price = $price;
    }
    
    final public function setScopedPriceDiscounted(?bool $scopedPriceDiscounted): void
    {
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;
    }
    
    final public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
    
    final public function setAvailability(?ProductVariantAvailability $availability): void
    {
        $this->availability = $availability;
    }
    
    final public function setId(?int $id): void
    {
        $this->id = $id;
    }
    
    final public function setPrices(?PriceCollection $prices): void
    {
        $this->prices = $prices;
    }
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}