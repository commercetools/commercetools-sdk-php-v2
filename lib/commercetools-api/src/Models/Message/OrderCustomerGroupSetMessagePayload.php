<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;

interface OrderCustomerGroupSetMessagePayload extends MessagePayload
{
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_OLD_CUSTOMER_GROUP = 'oldCustomerGroup';

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup();

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void;
}
