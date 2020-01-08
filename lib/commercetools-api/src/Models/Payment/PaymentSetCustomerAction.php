<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;

interface PaymentSetCustomerAction extends PaymentUpdateAction
{
    const FIELD_CUSTOMER = 'customer';

    /**
     * <p>A reference to the customer this payment belongs to.</p>.
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    public function setCustomer(?CustomerResourceIdentifier $customer): void;
}
