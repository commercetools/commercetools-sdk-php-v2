<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerResetPassword>
 */
final class CustomerResetPasswordBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $tokenValue;

    /**
     * @var ?string
     */
    private $newPassword;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @return null|string
     */
    public function getTokenValue()
    {
        return $this->tokenValue;
    }

    /**
     * @return null|string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withTokenValue(?string $tokenValue)
    {
        $this->tokenValue = $tokenValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewPassword(?string $newPassword)
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): CustomerResetPassword
    {
        return new CustomerResetPasswordModel(
            $this->tokenValue,
            $this->newPassword,
            $this->version
        );
    }

    public static function of(): CustomerResetPasswordBuilder
    {
        return new self();
    }
}
