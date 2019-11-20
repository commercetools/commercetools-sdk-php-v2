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
     * @var ?bool
     */
    private $updateProductData;

    /**
     * @var ?string
     */
    private $anonymousId;

    /**
     * @var ?string
     */
    private $password;

    /**
     * @var ?string
     */
    private $anonymousCartSignInMode;

    /**
     * @var ?string
     */
    private $anonymousCartId;

    /**
     * @var ?string
     */
    private $email;

    /**
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        return $this->updateProductData;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
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
    public function getAnonymousCartSignInMode()
    {
        return $this->anonymousCartSignInMode;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return $this
     */
    public function withUpdateProductData(?bool $updateProductData)
    {
        $this->updateProductData = $updateProductData;

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
    public function withPassword(?string $password)
    {
        $this->password = $password;

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
    public function withAnonymousCartId(?string $anonymousCartId)
    {
        $this->anonymousCartId = $anonymousCartId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function build(): CustomerSignin
    {
        return new CustomerSigninModel(
            $this->updateProductData,
            $this->anonymousId,
            $this->password,
            $this->anonymousCartSignInMode,
            $this->anonymousCartId,
            $this->email
        );
    }

    public static function of(): CustomerSigninBuilder
    {
        return new self();
    }
}
