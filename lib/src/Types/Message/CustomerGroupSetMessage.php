<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\CustomerGroup\CustomerGroupReference;

interface CustomerGroupSetMessage extends Message
{
    const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup);

}
