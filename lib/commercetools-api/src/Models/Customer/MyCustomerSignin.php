<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerSignin extends JsonObject
{
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';
    public const FIELD_ACTIVE_CART_SIGN_IN_MODE = 'activeCartSignInMode';
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
     * <ul>
     * <li>If <code>MergeWithExistingCustomerCart</code>, <a href="ctp:api:type:LineItem">LineItems</a> of the anonymous Cart are merged with the recently modified active Customer Cart.</li>
     * <li>If <code>UseAsNewActiveCustomerCart</code>, the anonymous Cart is used as the new active Customer Cart, and no <a href="ctp:api:type:LineItem">LineItems</a> are merged.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getActiveCartSignInMode();

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart is updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates are updated.</li>
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
     * @param ?string $activeCartSignInMode
     */
    public function setActiveCartSignInMode(?string $activeCartSignInMode): void;

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void;
}
