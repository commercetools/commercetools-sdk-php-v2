<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class LocationModel extends JsonObjectModel implements Location
{
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $state;

    /**
     * @return string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            $value = $this->raw(Location::FIELD_COUNTRY);
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
            $value = $this->raw(Location::FIELD_STATE);
            $value = (string)$value;
            $this->state = $value;
        }
        return $this->state;
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

}
