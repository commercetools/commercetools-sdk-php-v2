<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCustomerSigninModel extends JsonObjectModel implements MyCustomerSignin
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
     *
     * @var ?string
     */
    protected $activeCartSignInMode;

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
        ?string $activeCartSignInMode = null,
        ?bool $updateProductData = null
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->activeCartSignInMode = $activeCartSignInMode;
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
     * <ul>
     * <li>If <code>MergeWithExistingCustomerCart</code>, <a href="ctp:api:type:LineItem">LineItems</a> of the anonymous Cart are merged with the recently modified active Customer Cart.</li>
     * <li>If <code>UseAsNewActiveCustomerCart</code>, the anonymous Cart is used as the new active Customer Cart, and no <a href="ctp:api:type:LineItem">LineItems</a> are merged.</li>
     * </ul>
     *
     *
     * @return null|string
     */
    public function getActiveCartSignInMode()
    {
        if (is_null($this->activeCartSignInMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTIVE_CART_SIGN_IN_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->activeCartSignInMode = (string) $data;
        }

        return $this->activeCartSignInMode;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart is updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates are updated.</li>
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
     * @param ?string $activeCartSignInMode
     */
    public function setActiveCartSignInMode(?string $activeCartSignInMode): void
    {
        $this->activeCartSignInMode = $activeCartSignInMode;
    }

    /**
     * @param ?bool $updateProductData
     */
    public function setUpdateProductData(?bool $updateProductData): void
    {
        $this->updateProductData = $updateProductData;
    }
}
