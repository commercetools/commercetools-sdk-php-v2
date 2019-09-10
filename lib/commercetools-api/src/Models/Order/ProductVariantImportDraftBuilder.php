<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;

/**
 * @implements Builder<ProductVariantImportDraft>
 */
final class ProductVariantImportDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ImageCollection
     */
    protected $images;
    
    /**
     * @var ?AttributeCollection
     */
    protected $attributes;
    
    /**
     * @var ?int
     */
    protected $id;
    
    /**
     * @var ?PriceDraftCollection
     */
    protected $prices;
    
    /**
     * @var ?string
     */
    protected $sku;

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
     * @return AttributeCollection|null
     */
    final public function getAttributes()
    {
       return $this->attributes;
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
    final public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;
        
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
    
    public function build(): ProductVariantImportDraft {
        return new ProductVariantImportDraftModel(
            $this->images,
            $this->attributes,
            $this->id,
            $this->prices,
            $this->sku
        );
    }
    
    public static function of(): ProductVariantImportDraftBuilder
    {
        return new self();
    }
}