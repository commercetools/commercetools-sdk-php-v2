<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetCustomerIdAction extends CartUpdateAction
{
    const FIELD_CUSTOMER_ID = 'customerId';

    /**
     * @return string
     */
    public function getCustomerId();

    /**
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId);

}
