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
 * @implements Builder<MyCustomerResetPassword>
 */
final class MyCustomerResetPasswordBuilder implements Builder
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
     * <p>Value of the token to reset the Customer password.</p>
     *

     * @return null|string
     */
    public function getTokenValue()
    {
        return $this->tokenValue;
    }

    /**
     * <p>New password to be set.</p>
     *

     * @return null|string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param ?string $tokenValue
     * @return $this
     */
    public function withTokenValue(?string $tokenValue)
    {
        $this->tokenValue = $tokenValue;

        return $this;
    }

    /**
     * @param ?string $newPassword
     * @return $this
     */
    public function withNewPassword(?string $newPassword)
    {
        $this->newPassword = $newPassword;

        return $this;
    }


    public function build(): MyCustomerResetPassword
    {
        return new MyCustomerResetPasswordModel(
            $this->tokenValue,
            $this->newPassword
        );
    }

    public static function of(): MyCustomerResetPasswordBuilder
    {
        return new self();
    }
}
