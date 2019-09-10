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
use Commercetools\Api\Models\Common\PriceDraftCollection;

/**
 * @implements Builder<ProductAddVariantAction>
 */
final class ProductAddVariantActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ImageCollection
     */
    protected $images;
    
    /**
     * @var ?AssetCollection
     */
    protected $assets;
    
    /**
     * @var ?AttributeCollection
     */
    protected $attributes;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
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
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
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
     * @return AttributeCollection|null
     */
    final public function getAttributes()
    {
       return $this->attributes;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       return $this->staged;
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
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
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
    final public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStaged(?bool $staged)
    {
        $this->staged = $staged;
        
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
    
    public function build(): ProductAddVariantAction {
        return new ProductAddVariantActionModel(
            $this->action,
            $this->images,
            $this->assets,
            $this->attributes,
            $this->staged,
            $this->prices,
            $this->sku,
            $this->key
        );
    }
    
    public static function of(): ProductAddVariantActionBuilder
    {
        return new self();
    }
}