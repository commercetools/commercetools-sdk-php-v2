<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetCountryAction extends CartUpdateAction
{
    const FIELD_COUNTRY = 'country';

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

}
