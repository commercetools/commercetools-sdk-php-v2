<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetMiddleNameAction extends CustomerUpdateAction {
    const FIELD_MIDDLE_NAME = 'middleName';

    /**
     * @return string
     */
    public function getMiddleName();

    /**
     * @param string $middleName
     * @return $this
     */
    public function setMiddleName(string $middleName);

}
