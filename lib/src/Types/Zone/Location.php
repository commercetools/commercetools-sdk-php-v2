<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Base\JsonObject;

interface Location extends JsonObject {
    const FIELD_COUNTRY = 'country';
    const FIELD_STATE = 'state';

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

}
