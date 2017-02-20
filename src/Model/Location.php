<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Location extends JsonObject {
    protected $country;
    protected $state;

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
                
}
