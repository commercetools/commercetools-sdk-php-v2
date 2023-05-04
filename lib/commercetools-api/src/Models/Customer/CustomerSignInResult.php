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
     * <p>Customer <a href="ctp:api:endpoint:/{projectKey}/customers:POST">signed up</a> or <a href="ctp:api:endpoint:/{projectKey}/login:POST">signed in</a> after authentication.</p>
     *

     * @return null|Customer
     */
    public function getCustomer();

    /**
     * <p>Cart associated with the Customer.
     * If empty, the Customer does not have a Cart assigned.</p>
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
