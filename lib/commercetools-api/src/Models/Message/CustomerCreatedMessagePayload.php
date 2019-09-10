<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Customer\Customer;

interface CustomerCreatedMessagePayload extends MessagePayload
{
    
    const FIELD_CUSTOMER = 'customer';

    /**
     *
     * @return Customer|null
     */
    public function getCustomer();
    public function setCustomer(?Customer $customer): void;
}