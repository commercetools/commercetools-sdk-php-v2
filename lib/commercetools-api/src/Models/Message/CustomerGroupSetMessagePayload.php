<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;

interface CustomerGroupSetMessagePayload extends MessagePayload
{
    
    const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     *
     * @return CustomerGroupReference|null
     */
    public function getCustomerGroup();
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;
}