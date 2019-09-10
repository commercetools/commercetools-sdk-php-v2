<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;

final class ProductVariantImportDraftModel extends JsonObjectModel implements ProductVariantImportDraft
{
    
    public function __construct(
        ImageCollection $images = null,
        AttributeCollection $attributes = null,
        int $id = null,
        PriceDraftCollection $prices = null,
        string $sku = null
    ) {
        $this->images = $images;
        $this->attributes = $attributes;
        $this->id = $id;
        $this->prices = $prices;
        $this->sku = $sku;
        
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
       if (is_null($this->images)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductVariantImportDraft::FIELD_IMAGES);
           if (is_null($data)) {
               return null;
           }
           $this->images = ImageCollection::fromArray($data);
       }
       return $this->images;
    }
    
    /**
     *
     * @return AttributeCollection|null
     */
    final public function getAttributes()
    {
       if (is_null($this->attributes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductVariantImportDraft::FIELD_ATTRIBUTES);
           if (is_null($data)) {
               return null;
           }
           $this->attributes = AttributeCollection::fromArray($data);
       }
       return $this->attributes;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductVariantImportDraft::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (int)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return PriceDraftCollection|null
     */
    final public function getPrices()
    {
       if (is_null($this->prices)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductVariantImportDraft::FIELD_PRICES);
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
           $data = $this->raw(ProductVariantImportDraft::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    final public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }
    
    final public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
    
    final public function setId(?int $id): void
    {
        $this->id = $id;
    }
    
    final public function setPrices(?PriceDraftCollection $prices): void
    {
        $this->prices = $prices;
    }
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    
}