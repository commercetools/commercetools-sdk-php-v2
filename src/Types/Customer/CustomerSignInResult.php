<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObject;

use Commercetools\Types\object;

interface CustomerSignInResult extends JsonObject {
    const FIELD_CUSTOMER = 'customer';
    const FIELD_CART = 'cart';

    /**
     * @return Customer
     */
    public function getCustomer();

    /**
     * @return object
     */
    public function getCart();

    /**
     * @param Customer $customer
     * @return $this
     */
    public function setCustomer(Customer $customer);

    /**
     * @param object $cart
     * @return $this
     */
    public function setCart($cart);

}
