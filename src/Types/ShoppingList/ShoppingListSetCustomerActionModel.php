<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

use Commercetools\Types\Customer\Customer;

class ShoppingListSetCustomerActionModel extends ShoppingListUpdateActionModel implements ShoppingListSetCustomerAction {
    const DISCRIMINATOR_VALUE = 'setCustomer';

    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            $value = $this->raw(ShoppingListSetCustomerAction::FIELD_CUSTOMER);
            if (is_null($value)) {
                return $this->mapData(Customer::class, null);
            }
            $value = $this->mapData(Customer::class, $value);

            $this->customer = $value;
        }
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return $this
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

}
