<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class TaxRateModel extends JsonObjectModel implements TaxRate
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var mixed
     */
    protected $includedInPrice;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var SubRateCollection
     */
    protected $subRates;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(TaxRate::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(TaxRate::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return int
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            $value = $this->raw(TaxRate::FIELD_AMOUNT);
            $value = (int)$value;
            $this->amount = $value;
        }
        return $this->amount;
    }
    /**
     * @return mixed
     */
    public function getIncludedInPrice()
    {
        if (is_null($this->includedInPrice)) {
            $value = $this->raw(TaxRate::FIELD_INCLUDED_IN_PRICE);
            $this->includedInPrice = $value;
        }
        return $this->includedInPrice;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            $value = $this->raw(TaxRate::FIELD_COUNTRY);
            $value = (string)$value;
            $this->country = $value;
        }
        return $this->country;
    }
    /**
     * @return string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(TaxRate::FIELD_STATE);
            $value = (string)$value;
            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return SubRateCollection
     */
    public function getSubRates()
    {
        if (is_null($this->subRates)) {
            $value = $this->raw(TaxRate::FIELD_SUB_RATES);
            if (is_null($value)) {
                return $this->mapData(SubRateCollection::class, null);
            }
            $value = $this->mapData(SubRateCollection::class, $value);
            $this->subRates = $value;
        }
        return $this->subRates;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

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
     * @param int $amount
     * @return $this
     */
    public function setAmount(int $amount)
    {
        $this->amount = (int)$amount;

        return $this;
    }
    /**
     * @param $includedInPrice
     * @return $this
     */
    public function setIncludedInPrice($includedInPrice)
    {
        $this->includedInPrice = $includedInPrice;

        return $this;
    }
    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = (string)$country;

        return $this;
    }
    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = (string)$state;

        return $this;
    }
    /**
     * @param SubRateCollection $subRates
     * @return $this
     */
    public function setSubRates(SubRateCollection $subRates)
    {
        $this->subRates = $subRates;

        return $this;
    }

}
