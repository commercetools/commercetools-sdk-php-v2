<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSignin extends JsonObject
{
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_ANONYMOUS_CART_ID = 'anonymousCartId';
    public const FIELD_ANONYMOUS_CART = 'anonymousCart';
    public const FIELD_ANONYMOUS_CART_SIGN_IN_MODE = 'anonymousCartSignInMode';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_UPDATE_PRODUCT_DATA = 'updateProductData';

    /**
     * <p>Email address of the Customer treated as <a href="/../api/customers-overview#email-case-insensitivity">case-insensitive</a>.</p>
     *

     * @return null|string
     */
    public function getEmail();

    /**
     * <p>Password of the Customer.</p>
     *

     * @return null|string
     */
    public function getPassword();

    /**
     * <p>Deprecated since it is now possible to identify an anonymous cart by using its <code>id</code> or external <code>key</code>.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getAnonymousCartId();

    /**
     * <p>Assigns the Customer to the specified Cart.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart();

    /**
     * <ul>
     * <li>Set to <code>MergeWithExistingCustomerCart</code> if <a href="ctp:api:type:LineItem">LineItems</a> of the anonymous Cart should be merged with the active Customer Cart that has been modified most recently.</li>
     * <li>Set to <code>UseAsNewActiveCustomerCart</code> if the anonymous Cart should be used as the new active Customer Cart and no <a href="ctp:api:type:LineItem">LineItems</a> are to be merged.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getAnonymousCartSignInMode();

    /**
     * <p>Assigns the Customer to all <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:ShoppingList">ShoppingLists</a>, and <a href="ctp:api:type:Payment">Payments</a> with the same <code>anonymousId</code>.</p>
     * <p>If <code>anonymousCart</code> is provided, this value must match the <code>anonymousId</code> of the anonymous <a href="ctp:api:type:Cart">Cart</a>; otherwise, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart will be updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates will be updated.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getUpdateProductData();

    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void;

    /**
     * @param ?string $password
     */
    public function setPassword(?string $password): void;

    /**
     * @param ?string $anonymousCartId
     */
    public function setAnonymousCartId(?string $anonymousCartId): void;

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     */
    public function setAnonymousCart(?CartResourceIdentifier $anonymousCart): void;

    /**
     * @param ?string $anonymousCartSignInMode
     */
    public function setAnonymousCartSignInMode(?string $anonymousCartSignInMode): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void;
}
