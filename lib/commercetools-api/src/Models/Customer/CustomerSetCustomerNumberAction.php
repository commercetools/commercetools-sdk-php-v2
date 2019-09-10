<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetCustomerNumberAction extends CustomerUpdateAction
{
    
    const FIELD_CUSTOMER_NUMBER = 'customerNumber';

    /**
     *
     * @return string|null
     */
    public function getCustomerNumber();
    public function setCustomerNumber(?string $customerNumber): void;
}