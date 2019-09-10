<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Api\Models\Common\ScopedPrice;
use Commercetools\Api\Models\Common\ScopedPriceBuilder;

/**
 * @implements Builder<ProductVariant>
 */
final class ProductVariantBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ScopedPriceBuilder|ScopedPrice
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
     * @var ?PriceBuilder|Price
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
     * @var ?ProductVariantAvailabilityBuilder|ProductVariantAvailability
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
       return ($this->scopedPrice instanceof ScopedPriceBuilder ? $this->scopedPrice->build() : $this->scopedPrice);
    }
    
    /**
     *
     * @return ImageCollection|null
     */
    final public function getImages()
    {
       return $this->images;
    }
    
    /**
     *
     * @return AssetCollection|null
     */
    final public function getAssets()
    {
       return $this->assets;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsMatchingVariant()
    {
       return $this->isMatchingVariant;
    }
    
    /**
     *
     * @return Price|null
     */
    final public function getPrice()
    {
       return ($this->price instanceof PriceBuilder ? $this->price->build() : $this->price);
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getScopedPriceDiscounted()
    {
       return $this->scopedPriceDiscounted;
    }
    
    /**
     *
     * @return AttributeCollection|null
     */
    final public function getAttributes()
    {
       return $this->attributes;
    }
    
    /**
     *
     * @return ProductVariantAvailability|null
     */
    final public function getAvailability()
    {
       return ($this->availability instanceof ProductVariantAvailabilityBuilder ? $this->availability->build() : $this->availability);
    }
    
    /**
     *
     * @return int|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return PriceCollection|null
     */
    final public function getPrices()
    {
       return $this->prices;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       return $this->sku;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    /**
     * @return $this
     */
    final public function withScopedPrice(?ScopedPrice $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withImages(?ImageCollection $images)
    {
        $this->images = $images;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIsMatchingVariant(?bool $isMatchingVariant)
    {
        $this->isMatchingVariant = $isMatchingVariant;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPrice(?Price $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withScopedPriceDiscounted(?bool $scopedPriceDiscounted)
    {
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAvailability(?ProductVariantAvailability $availability)
    {
        $this->availability = $availability;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?int $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPrices(?PriceCollection $prices)
    {
        $this->prices = $prices;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSku(?string $sku)
    {
        $this->sku = $sku;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withScopedPriceBuilder(?ScopedPriceBuilder $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPriceBuilder(?PriceBuilder $price)
    {
        $this->price = $price;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAvailabilityBuilder(?ProductVariantAvailabilityBuilder $availability)
    {
        $this->availability = $availability;
        
        return $this;
    }
    
    public function build(): ProductVariant {
        return new ProductVariantModel(
            ($this->scopedPrice instanceof ScopedPriceBuilder ? $this->scopedPrice->build() : $this->scopedPrice),
            $this->images,
            $this->assets,
            $this->isMatchingVariant,
            ($this->price instanceof PriceBuilder ? $this->price->build() : $this->price),
            $this->scopedPriceDiscounted,
            $this->attributes,
            ($this->availability instanceof ProductVariantAvailabilityBuilder ? $this->availability->build() : $this->availability),
            $this->id,
            $this->prices,
            $this->sku,
            $this->key
        );
    }
    
    public static function of(): ProductVariantBuilder
    {
        return new self();
    }
}