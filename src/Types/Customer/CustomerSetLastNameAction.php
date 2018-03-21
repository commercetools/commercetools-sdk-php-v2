<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetLastNameAction extends CustomerUpdateAction {
    const FIELD_LAST_NAME = 'lastName';

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName(string $lastName);

}
