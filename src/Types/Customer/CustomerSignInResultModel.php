<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\object;

class CustomerSignInResultModel extends JsonObjectModel implements CustomerSignInResult {
    /**
     * @var Customer
     */
    protected $customer;
    /**
     * @var object
     */
    protected $cart;

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            $value = $this->raw(CustomerSignInResult::FIELD_CUSTOMER);
            if (is_null($value)) {
                return $this->mapData(Customer::class, null);
            }
            $value = $this->mapData(Customer::class, $value);

            $this->customer = $value;
        }
        return $this->customer;
    }
    /**
     * @return object
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            $value = $this->raw(CustomerSignInResult::FIELD_CART);
            $this->cart = $value;
        }
        return $this->cart;
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
    /**
     * @param $cart
     * @return $this
     */
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

}
