<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetCustomerNumberAction extends CustomerUpdateAction
{
    const FIELD_CUSTOMER_NUMBER = 'customerNumber';

    /**
     * @return string
     */
    public function getCustomerNumber();

    /**
     * @param string $customerNumber
     * @return $this
     */
    public function setCustomerNumber(string $customerNumber);

}
