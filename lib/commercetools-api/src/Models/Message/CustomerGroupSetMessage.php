<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;

interface CustomerGroupSetMessage extends Message
{
    const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;
}
