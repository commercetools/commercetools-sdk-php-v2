<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSignInResult extends JsonObject
{
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_CART = 'cart';

    /**

     * @return null|Customer
     */
    public function getCustomer();

    /**
     * <p>A cart that is associated to the customer.
     * Empty if the customer does not have a cart yet.</p>
     *

     * @return null|Cart
     */
    public function getCart();

    /**
     * @param ?Customer $customer
     */
    public function setCustomer(?Customer $customer): void;

    /**
     * @param ?Cart $cart
     */
    public function setCart(?Cart $cart): void;
}
