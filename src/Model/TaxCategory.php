<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategory extends Resource {
    protected $name;
    protected $description;
    protected $rates;

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
     * @return string
     */
    public function getDescription(): string
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = (string)$value;
            } else {
                return '';
            }
        }
        return $this->description;
    }
                

    /**
     * @return TaxRateCollection
     */
    public function getRates(): TaxRateCollection
    {
        if (is_null($this->rates)) {
            $value = $this->raw('rates');
            if (!is_null($value)) {
                $this->rates = Mapper::map($value, TaxRateCollection::class);
            } else {
                return Mapper::map([], TaxRateCollection::class);
            }
        }
        return $this->rates;
    }
                
}
