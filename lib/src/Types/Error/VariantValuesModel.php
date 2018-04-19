<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\PriceCollection;
use Commercetools\Types\Product\Attribute;
use Commercetools\Types\Product\AttributeCollection;
use Commercetools\Types\Common\Price;

class VariantValuesModel extends JsonObjectModel implements VariantValues
{
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var PriceCollection
     */
    protected $prices;
    /**
     * @var AttributeCollection
     */
    protected $attributes;

    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(VariantValues::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return PriceCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            $value = $this->raw(VariantValues::FIELD_PRICES);
            if (is_null($value)) {
                return $this->mapData(PriceCollection::class, null);
            }
            $value = $this->mapData(PriceCollection::class, $value);
            $this->prices = $value;
        }
        return $this->prices;
    }
    /**
     * @return AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            $value = $this->raw(VariantValues::FIELD_ATTRIBUTES);
            if (is_null($value)) {
                return $this->mapData(AttributeCollection::class, null);
            }
            $value = $this->mapData(AttributeCollection::class, $value);
            $this->attributes = $value;
        }
        return $this->attributes;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
    }
    /**
     * @param PriceCollection $prices
     * @return $this
     */
    public function setPrices(PriceCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }
    /**
     * @param AttributeCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

}
