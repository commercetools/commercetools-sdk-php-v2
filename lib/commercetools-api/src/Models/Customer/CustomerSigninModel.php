<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerSigninModel extends JsonObjectModel implements CustomerSignin
{
    /**
     *
     * @var ?string
     */
    protected $email;

    /**
     *
     * @var ?string
     */
    protected $password;

    /**
     * @deprecated
     * @var ?string
     */
    protected $anonymousCartId;

    /**
     *
     * @var ?CartResourceIdentifier
     */
    protected $anonymousCart;

    /**
     *
     * @var ?string
     */
    protected $anonymousCartSignInMode;

    /**
     *
     * @var ?string
     */
    protected $anonymousId;

    /**
     *
     * @var ?bool
     */
    protected $updateProductData;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $email = null,
        ?string $password = null,
        ?string $anonymousCartId = null,
        ?CartResourceIdentifier $anonymousCart = null,
        ?string $anonymousCartSignInMode = null,
        ?string $anonymousId = null,
        ?bool $updateProductData = null
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->anonymousCartId = $anonymousCartId;
        $this->anonymousCart = $anonymousCart;
        $this->anonymousCartSignInMode = $anonymousCartSignInMode;
        $this->anonymousId = $anonymousId;
        $this->updateProductData = $updateProductData;
    }

    /**
     * <p>Email address of the Customer treated as <a href="/../api/customers-overview#email-case-insensitivity">case-insensitive</a>.</p>
     *
     *
     * @return null|string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    /**
     * <p>Password of the Customer.</p>
     *
     *
     * @return null|string
     */
    public function getPassword()
    {
        if (is_null($this->password)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->password = (string) $data;
        }

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
        if (is_null($this->anonymousCartId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_CART_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousCartId = (string) $data;
        }

        return $this->anonymousCartId;
    }

    /**
     * <p>Identifies a <a href="ctp:api:type:Cart">Cart</a> that will be assigned to the Customer.</p>
     *
     *
     * @return null|CartResourceIdentifier
     */
    public function getAnonymousCart()
    {
        if (is_null($this->anonymousCart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_CART);
            if (is_null($data)) {
                return null;
            }

            $this->anonymousCart = CartResourceIdentifierModel::of($data);
        }

        return $this->anonymousCart;
    }

    /**
     * <ul>
     * <li>Set to <code>MergeWithExistingCustomerCart</code> if <a href="ctp:api:type:LineItem">LineItems</a> of the anonymous Cart should be merged with the active Customer Cart that has been modified most recently.</li>
     * <li>Set to <code>UseAsNewActiveCustomerCart</code> if the anonymous Cart should be used as the new active Customer Cart and no <a href="ctp:api:type:LineItem">LineItems</a> are to be merged.</li>
     * </ul>
     *
     *
     * @return null|string
     */
    public function getAnonymousCartSignInMode()
    {
        if (is_null($this->anonymousCartSignInMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_CART_SIGN_IN_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousCartSignInMode = (string) $data;
        }

        return $this->anonymousCartSignInMode;
    }

    /**
     * <p>If both <code>anonymousCart</code> and <code>anonymousId</code> are provided, the <code>anonymousId</code> on the CustomerSignin must match that of the anonymous <a href="ctp:api:type:Cart">Cart</a>.
     * Otherwise a <a href="ctp:api:type:InvalidOperationError">400 Bad Request</a> <code>Invalid Operation</code> error is returned with the message:
     * &quot;Cart with the ID cart-id does not have the expected anonymousId.&quot;.</p>
     *
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart will be updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates will be updated.</li>
     * </ul>
     *
     *
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        if (is_null($this->updateProductData)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_UPDATE_PRODUCT_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->updateProductData = (bool) $data;
        }

        return $this->updateProductData;
    }


    /**
     * @param ?string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param ?string $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param ?string $anonymousCartId
     */
    public function setAnonymousCartId(?string $anonymousCartId): void
    {
        $this->anonymousCartId = $anonymousCartId;
    }

    /**
     * @param ?CartResourceIdentifier $anonymousCart
     */
    public function setAnonymousCart(?CartResourceIdentifier $anonymousCart): void
    {
        $this->anonymousCart = $anonymousCart;
    }

    /**
     * @param ?string $anonymousCartSignInMode
     */
    public function setAnonymousCartSignInMode(?string $anonymousCartSignInMode): void
    {
        $this->anonymousCartSignInMode = $anonymousCartSignInMode;
    }

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void
    {
        $this->updateProductData = $updateProductData;
    }
}
