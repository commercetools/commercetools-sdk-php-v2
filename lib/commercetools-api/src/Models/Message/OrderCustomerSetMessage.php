<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Customer\CustomerReference;

interface OrderCustomerSetMessage extends Message
{
    
    const FIELD_CUSTOMER = 'customer';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_OLD_CUSTOMER = 'oldCustomer';
    const FIELD_OLD_CUSTOMER_GROUP = 'oldCustomerGroup';

    /**
     *
     * @return CustomerReference|null
     */
    public function getCustomer();
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    public function getCustomerGroup();
    
    /**
     *
     * @return CustomerReference|null
     */
    public function getOldCustomer();
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    public function getOldCustomerGroup();
    public function setCustomer(?CustomerReference $customer): void;
    
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;
    
    public function setOldCustomer(?CustomerReference $oldCustomer): void;
    
    public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void;
}