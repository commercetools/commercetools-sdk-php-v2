<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Customer\CustomerReference;

interface PaymentSetCustomerAction extends PaymentUpdateAction
{
    const FIELD_CUSTOMER = 'customer';

    /**
     * @return CustomerReference
     */
    public function getCustomer();

    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer);

}
