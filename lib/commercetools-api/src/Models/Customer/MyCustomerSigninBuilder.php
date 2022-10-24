<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCustomerSignin>
 */
final class MyCustomerSigninBuilder implements Builder
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

     * @var ?string
     */
    private $activeCartSignInMode;

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
     * <ul>
     * <li>If <code>MergeWithExistingCustomerCart</code>, <a href="ctp:api:type:LineItem">LineItems</a> of the anonymous Cart are merged with the recently modified active Customer Cart.</li>
     * <li>If <code>UseAsNewActiveCustomerCart</code>, the anonymous Cart is used as the new active Customer Cart, and no <a href="ctp:api:type:LineItem">LineItems</a> are merged.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getActiveCartSignInMode()
    {
        return $this->activeCartSignInMode;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, the <a href="ctp:api:type:LineItem">LineItem</a> Product data (<code>name</code>, <code>variant</code>, and <code>productType</code>) of the returned Cart is updated.</li>
     * <li>If <code>false</code>, only the prices, discounts, and tax rates are updated.</li>
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
     * @param ?string $activeCartSignInMode
     * @return $this
     */
    public function withActiveCartSignInMode(?string $activeCartSignInMode)
    {
        $this->activeCartSignInMode = $activeCartSignInMode;

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


    public function build(): MyCustomerSignin
    {
        return new MyCustomerSigninModel(
            $this->email,
            $this->password,
            $this->activeCartSignInMode,
            $this->updateProductData
        );
    }

    public static function of(): MyCustomerSigninBuilder
    {
        return new self();
    }
}
