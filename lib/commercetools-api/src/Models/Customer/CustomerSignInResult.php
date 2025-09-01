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
     * <p>Cart associated with the Customer.</p>
     * <p>The Cart is recalculated to remove invalid Line Items and apply the latest prices, taxes, and discounts.
     * During these updates, the following errors can be returned: <a href="ctp:api:type:MatchingPriceNotFoundError">MatchingPriceNotFound</a> and <a href="ctp:api:type:MissingTaxRateForCountryError">MissingTaxRateForCountry</a>.</p>
     * <p>For more information, see <a href="/../api/carts-orders-overview#update-a-cart">Cart updates</a>.</p>
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
