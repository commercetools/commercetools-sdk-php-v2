<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxRateDraft extends JsonObject {
    protected $name;
    protected $amount;
    protected $includedInPrice;
    protected $country;
    protected $state;
    protected $subRates;

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                

    /**
     * @return float
     */
    public function getAmount(): float
    {
        if (is_null($this->amount)) {
            $value = $this->raw('amount');
            if (!is_null($value)) {
                $this->amount = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->amount;
    }
                

    /**
     * @return bool
     */
    public function getIncludedInPrice(): bool
    {
        if (is_null($this->includedInPrice)) {
            $value = $this->raw('includedInPrice');
            if (!is_null($value)) {
                $this->includedInPrice = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->includedInPrice;
    }
                

    /**
     * @return string
     */
    public function getCountry(): string
    {
        if (is_null($this->country)) {
            $value = $this->raw('country');
            if (!is_null($value)) {
                $this->country = (string)$value;
            } else {
                return '';
            }
        }
        return $this->country;
    }
                

    /**
     * @return string
     */
    public function getState(): string
    {
        if (is_null($this->state)) {
            $value = $this->raw('state');
            if (!is_null($value)) {
                $this->state = (string)$value;
            } else {
                return '';
            }
        }
        return $this->state;
    }
                

    /**
     * @return SubRateCollection
     */
    public function getSubRates(): SubRateCollection
    {
        if (is_null($this->subRates)) {
            $value = $this->raw('subRates');
            if (!is_null($value)) {
                $this->subRates = Mapper::map($value, SubRateCollection::class);
            } else {
                return Mapper::map([], SubRateCollection::class);
            }
        }
        return $this->subRates;
    }
                
}
