<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSignInResult extends JsonObject
{
    const FIELD_CUSTOMER = 'customer';
    const FIELD_CART = 'cart';

    /**
     * @return null|Customer
     */
    public function getCustomer();

    /**
     * <p>A cart that is associated to the customer.
     * Empty if the customer does not have a cart yet.</p>.
     *
     * @return null|JsonObject
     */
    public function getCart();

    public function setCustomer(?Customer $customer): void;

    public function setCart(?JsonObject $cart): void;
}
