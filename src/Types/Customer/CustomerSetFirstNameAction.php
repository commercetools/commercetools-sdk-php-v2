<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetFirstNameAction extends CustomerUpdateAction {
    const FIELD_FIRST_NAME = 'firstName';

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName(string $firstName);

}
