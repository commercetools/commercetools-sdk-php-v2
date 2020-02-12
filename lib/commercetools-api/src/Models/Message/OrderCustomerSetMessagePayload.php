<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomerSetMessagePayload extends MessagePayload
{
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_OLD_CUSTOMER = 'oldCustomer';
    public const FIELD_OLD_CUSTOMER_GROUP = 'oldCustomerGroup';

    /**
     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return null|CustomerReference
     */
    public function getOldCustomer();

    /**
     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup();

    public function setCustomer(?CustomerReference $customer): void;

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    public function setOldCustomer(?CustomerReference $oldCustomer): void;

    public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void;
}
