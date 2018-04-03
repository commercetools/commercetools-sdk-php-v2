<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\TaxCategory\TaxCategoryReference;

class ShippingMethodDraftModel extends JsonObjectModel implements ShippingMethodDraft {
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
     * @var ZoneRateDraftCollection
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
            $value = $this->raw(ShippingMethodDraft::FIELD_KEY);
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
            $value = $this->raw(ShippingMethodDraft::FIELD_NAME);
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
            $value = $this->raw(ShippingMethodDraft::FIELD_DESCRIPTION);
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
            $value = $this->raw(ShippingMethodDraft::FIELD_TAX_CATEGORY);
            if (is_null($value)) {
                return $this->mapData(TaxCategoryReference::class, null);
            }
            $value = $this->mapData(TaxCategoryReference::class, $value);

            $this->taxCategory = $value;
        }
        return $this->taxCategory;
    }
    /**
     * @return ZoneRateDraftCollection
     */
    public function getZoneRates()
    {
        if (is_null($this->zoneRates)) {
            $value = $this->raw(ShippingMethodDraft::FIELD_ZONE_RATES);
            if (is_null($value)) {
                return $this->mapData(ZoneRateDraftCollection::class, null);
            }
            $value = $this->mapData(ZoneRateDraftCollection::class, $value);
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
            $value = $this->raw(ShippingMethodDraft::FIELD_IS_DEFAULT);
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
            $value = $this->raw(ShippingMethodDraft::FIELD_PREDICATE);
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
     * @param ZoneRateDraftCollection $zoneRates
     * @return $this
     */
    public function setZoneRates(ZoneRateDraftCollection $zoneRates)
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

}
