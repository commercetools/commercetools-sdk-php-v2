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
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return null|string
     */
    public function getActiveCartSignInMode()
    {
        return $this->activeCartSignInMode;
    }

    /**
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
