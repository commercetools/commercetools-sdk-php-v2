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
     * <p>Expected version of the Customer.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
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

    /**
     * @param ?int $version
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
