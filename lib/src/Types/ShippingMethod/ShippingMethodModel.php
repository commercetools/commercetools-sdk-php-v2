<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Builder\ShippingMethodUpdateBuilder;
use Commercetools\Types\Common\Resource;

class ShippingMethodModel extends ResourceModel implements ShippingMethod
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var TaxCategoryReference
     */
    protected $taxCategory;
    /**
     * @var ZoneRateCollection
     */
    protected $zoneRates;
    /**
     * @var mixed
     */
    protected $isDefault;
    /**
     * @var string
     */
    protected $predicate;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ShippingMethod::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ShippingMethod::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ShippingMethod::FIELD_DESCRIPTION);
            $value = (string)$value;
            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw(ShippingMethod::FIELD_TAX_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryReference::class, null);
            }
            $value = $this->mapData(TaxCategoryReference::class, $value);

            $this->taxCategory = $value;
        }
        return $this->taxCategory;
    }
    /**
     * @return ZoneRateCollection
     */
    public function getZoneRates()
    {
        if (is_null($this->zoneRates)) {
            $value = $this->raw(ShippingMethod::FIELD_ZONE_RATES);
            if (is_null($value)) {
                return $this->mapData(ZoneRateCollection::class, null);
            }
            $value = $this->mapData(ZoneRateCollection::class, $value);
            $this->zoneRates = $value;
        }
        return $this->zoneRates;
    }
    /**
     * @return mixed
     */
    public function getIsDefault()
    {
        if (is_null($this->isDefault)) {
            $value = $this->raw(ShippingMethod::FIELD_IS_DEFAULT);
            $this->isDefault = $value;
        }
        return $this->isDefault;
    }
    /**
     * @return string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            $value = $this->raw(ShippingMethod::FIELD_PREDICATE);
            $value = (string)$value;
            $this->predicate = $value;
        }
        return $this->predicate;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = (string)$description;

        return $this;
    }
    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }
    /**
     * @param ZoneRateCollection $zoneRates
     * @return $this
     */
    public function setZoneRates(ZoneRateCollection $zoneRates)
    {
        $this->zoneRates = $zoneRates;

        return $this;
    }
    /**
     * @param $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }
    /**
     * @param string $predicate
     * @return $this
     */
    public function setPredicate(string $predicate)
    {
        $this->predicate = (string)$predicate;

        return $this;
    }


    /**
     * @return ShippingMethodUpdateBuilder
     */
    public function update()
    {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
