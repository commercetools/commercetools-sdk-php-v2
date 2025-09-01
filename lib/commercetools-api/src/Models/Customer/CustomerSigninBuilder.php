<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSignin>
 */
final class CustomerSigninBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $email;

    /**

     * @var ?string
     */
    private $password;

    /**
     * @deprecated
     * @var ?string
     */
    private $anonymousCartId;

    /**

     * @var null|CartResourceIdentifier|CartResourceIdentifierBuilder
     */
    private $anonymousCart;

    /**

     * @var ?string
     */
    private $anonymousCartSignInMode;

    /**

     * @var ?string
     */
    private $anonymousId;

    /**

     * @var ?bool
     */
    private $updateProductData;

    /**
     * <p>Email address of the Customer treated as <a href="/../api/customers-overview#email-case-insensitivity">case-insensitive</a>.</p>
     *

     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * <p>Password of the Customer.</p>
     *

     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * <p>Deprecated since it is now possible to identify an anonymous cart by using its <code>id</code> or external <code>key</code>.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getAnonymousCartId()
    {
        return $this->anonymousCartId;
    }

    /**
     * <p>Assigns the Customer to the specified Cart.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart()
    {
        return $this->anonymousCart instanceof CartResourceIdentifierBuilder ? $this->anonymousCart->build() : $this->anonymousCart;
    }

    /**
     * <ul>
     * <li>Set to <code>MergeWithExistingCustomerCart</code> if <a href="ctp:api:type:LineItem">LineItems</a> of the anonymous Cart should be merged with the active Customer Cart that has been modified most recently.</li>
     * <li>Set to <code>UseAsNewActiveCustomerCart</code> if the anonymous Cart should be used as the new active Customer Cart and no <a href="ctp:api:type:LineItem">LineItems</a> are to be merged.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getAnonymousCartSignInMode()
    {
        return $this->anonymousCartSignInMode;
    }

    /**
     * <p>Assigns the Customer to all <a href="ctp:api:type:Cart">Carts</a>, <a href="ctp:api:type:Order">Orders</a>, <a href="ctp:api:type:ShoppingList">ShoppingLists</a>, and <a href="ctp:api:type:Payment">Payments</a> with the same <code>anonymousId</code>.</p>
     * <p>If <code>anonymousCart</code> is provided, this value must match the <code>anonymousId</code> of the anonymous <a href="ctp:api:type:Cart">Cart</a>; otherwise, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart will be updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates will be updated.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getUpdateProductData()
    {
        return $this->updateProductData;
    }

    /**
     * @param ?string $email
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param ?string $password
     * @return $this
     */
    public function withPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param ?string $anonymousCartId
     * @return $this
     */
    public function withAnonymousCartId(?string $anonymousCartId)
    {
        $this->anonymousCartId = $anonymousCartId;

        return $this;
    }

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     * @return $this
     */
    public function withAnonymousCart(?CartResourceIdentifier $anonymousCart)
    {
        $this->anonymousCart = $anonymousCart;

        return $this;
    }

    /**
     * @param ?string $anonymousCartSignInMode
     * @return $this
     */
    public function withAnonymousCartSignInMode(?string $anonymousCartSignInMode)
    {
        $this->anonymousCartSignInMode = $anonymousCartSignInMode;

        return $this;
    }

    /**
     * @param ?string $anonymousId
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @param ?bool $updateProductData
     * @return $this
     */
    public function withUpdateProductData(?bool $updateProductData)
    {
        $this->updateProductData = $updateProductData;

        return $this;
    }

    /**
     * @deprecated use withAnonymousCart() instead
     * @return $this
     */
    public function withAnonymousCartBuilder(?CartResourceIdentifierBuilder $anonymousCart)
    {
        $this->anonymousCart = $anonymousCart;

        return $this;
    }

    public function build(): CustomerSignin
    {
        return new CustomerSigninModel(
            $this->email,
            $this->password,
            $this->anonymousCartId,
            $this->anonymousCart instanceof CartResourceIdentifierBuilder ? $this->anonymousCart->build() : $this->anonymousCart,
            $this->anonymousCartSignInMode,
            $this->anonymousId,
            $this->updateProductData
        );
    }

    public static function of(): CustomerSigninBuilder
    {
        return new self();
    }
}
