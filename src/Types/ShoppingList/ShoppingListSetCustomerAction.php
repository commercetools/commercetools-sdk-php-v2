<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\Customer\Customer;

interface ShoppingListSetCustomerAction extends ShoppingListUpdateAction {
    const FIELD_CUSTOMER = 'customer';

    /**
     * @return Customer
     */
    public function getCustomer();

    /**
     * @param Customer $customer
     * @return $this
     */
    public function setCustomer(Customer $customer);

}
