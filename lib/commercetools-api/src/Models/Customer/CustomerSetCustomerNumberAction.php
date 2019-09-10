<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

interface CustomerSetCustomerNumberAction extends CustomerUpdateAction
{
    const FIELD_CUSTOMER_NUMBER = 'customerNumber';

    /**
     * @return null|string
     */
    public function getCustomerNumber();

    public function setCustomerNumber(?string $customerNumber): void;
}
