<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class VariantValues extends JsonObject {
    protected $sku;
    protected $prices;
    protected $attributes;

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
                
}
