<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;

final class VariantValuesModel extends JsonObjectModel implements VariantValues
{
    
    public function __construct(
        AttributeCollection $attributes = null,
        PriceDraftCollection $prices = null,
        string $sku = null
    ) {
        $this->attributes = $attributes;
        $this->prices = $prices;
        $this->sku = $sku;
        
    }

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
     *
     * @return AttributeCollection|null
     */
    final public function getAttributes()
    {
       if (is_null($this->attributes)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(VariantValues::FIELD_ATTRIBUTES);
           if (is_null($data)) {
               return null;
           }
           $this->attributes = AttributeCollection::fromArray($data);
       }
       return $this->attributes;
    }
    
    /**
     *
     * @return PriceDraftCollection|null
     */
    final public function getPrices()
    {
       if (is_null($this->prices)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(VariantValues::FIELD_PRICES);
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
           $data = $this->raw(VariantValues::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    final public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
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