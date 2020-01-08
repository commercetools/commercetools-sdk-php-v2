<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

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
     * @var ?string
     */
    private $anonymousCartId;

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
    public function getAnonymousCartId()
    {
        return $this->anonymousCartId;
    }

    /**
     * @return null|string
     */
    public function getAnonymousCartSignInMode()
    {
        return $this->anonymousCartSignInMode;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        return $this->updateProductData;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPassword(?string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAnonymousCartId(?string $anonymousCartId)
    {
        $this->anonymousCartId = $anonymousCartId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAnonymousCartSignInMode(?string $anonymousCartSignInMode)
    {
        $this->anonymousCartSignInMode = $anonymousCartSignInMode;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withUpdateProductData(?bool $updateProductData)
    {
        $this->updateProductData = $updateProductData;

        return $this;
    }

    public function build(): CustomerSignin
    {
        return new CustomerSigninModel(
            $this->email,
            $this->password,
            $this->anonymousCartId,
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
