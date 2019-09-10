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
use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;

/**
 * @implements Builder<ProductVariantDraft>
 */
final class ProductVariantDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ImageCollection
     */
    protected $images;
    
    /**
     * @var ?AssetDraftCollection
     */
    protected $assets;
    
    /**
     * @var ?AttributeCollection
     */
    protected $attributes;
    
    /**
     * @var ?PriceDraftCollection
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
     * @return ImageCollection|null
     */
    final public function getImages()
    {
       return $this->images;
    }
    
    /**
     *
     * @return AssetDraftCollection|null
     */
    final public function getAssets()
    {
       return $this->assets;
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
     * @return PriceDraftCollection|null
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
    final public function withImages(?ImageCollection $images)
    {
        $this->images = $images;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAssets(?AssetDraftCollection $assets)
    {
        $this->assets = $assets;
        
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
    final public function withPrices(?PriceDraftCollection $prices)
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
    
    public function build(): ProductVariantDraft {
        return new ProductVariantDraftModel(
            $this->images,
            $this->assets,
            $this->attributes,
            $this->prices,
            $this->sku,
            $this->key
        );
    }
    
    public static function of(): ProductVariantDraftBuilder
    {
        return new self();
    }
}