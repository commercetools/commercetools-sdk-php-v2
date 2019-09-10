<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;

interface CustomerSetCustomerGroupAction extends CustomerUpdateAction
{
    
    const FIELD_CUSTOMER_GROUP = 'customerGroup';

    /**
     *
     * @return CustomerGroupResourceIdentifier|null
     */
    public function getCustomerGroup();
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;
}