<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class TaxCategoryDraft extends JsonObject {
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
     * @return TaxRateDraftCollection
     */
    public function getRates(): TaxRateDraftCollection
    {
        if (is_null($this->rates)) {
            $value = $this->raw('rates');
            if (!is_null($value)) {
                $this->rates = Mapper::map($value, TaxRateDraftCollection::class);
            } else {
                return Mapper::map([], TaxRateDraftCollection::class);
            }
        }
        return $this->rates;
    }
                
}
