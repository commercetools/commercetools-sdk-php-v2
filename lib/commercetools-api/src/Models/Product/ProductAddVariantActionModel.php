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
use Commercetools\Api\Models\Common\PriceDraftCollection;

final class ProductAddVariantActionModel extends JsonObjectModel implements ProductAddVariantAction
{
    const DISCRIMINATOR_VALUE = 'addVariant';
    public function __construct(
        string $action = null,
        ImageCollection $images = null,
        AssetCollection $assets = null,
        AttributeCollection $attributes = null,
        bool $staged = null,
        PriceDraftCollection $prices = null,
        string $sku = null,
        string $key = null
    ) {
        $this->action = $action;
        $this->images = $images;
        $this->assets = $assets;
        $this->attributes = $attributes;
        $this->staged = $staged;
        $this->prices = $prices;
        $this->sku = $sku;
        $this->key = $key;
        
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
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return ImageCollection|null
     */
    final public function getImages()
    {
       if (is_null($this->images)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductAddVariantAction::FIELD_IMAGES);
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
           $data = $this->raw(ProductAddVariantAction::FIELD_ASSETS);
           if (is_null($data)) {
               return null;
           }
           $this->assets = AssetCollection::fromArray($data);
       }
       return $this->assets;
    }
    
    /**
     *
     * @return AttributeCollection|null
     */
    final public function getAttributes()
    {
       if (is_null($this->attributes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductAddVariantAction::FIELD_ATTRIBUTES);
           if (is_null($data)) {
               return null;
           }
           $this->attributes = AttributeCollection::fromArray($data);
       }
       return $this->attributes;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductAddVariantAction::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return PriceDraftCollection|null
     */
    final public function getPrices()
    {
       if (is_null($this->prices)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductAddVariantAction::FIELD_PRICES);
           if (is_null($data)) {
               return null;
           }
           $this->prices = PriceDraftCollection::fromArray($data);
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
           $data = $this->raw(ProductAddVariantAction::FIELD_SKU);
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
           $data = $this->raw(ProductAddVariantAction::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }
    
    final public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }
    
    final public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setPrices(?PriceDraftCollection $prices): void
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