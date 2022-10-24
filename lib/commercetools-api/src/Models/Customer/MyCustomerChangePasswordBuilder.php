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
 * @implements Builder<MyCustomerChangePassword>
 */
final class MyCustomerChangePasswordBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?string
     */
    private $currentPassword;

    /**

     * @var ?string
     */
    private $newPassword;

    /**
     * <p>Expected version of the Customer on which the changes should be applied.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Current password of the Customer.</p>
     * <p>If the current password does not match, an <a href="ctp:api:type:InvalidCurrentPasswordError">InvalidCurrentPassword</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getCurrentPassword()
    {
        return $this->currentPassword;
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
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?string $currentPassword
     * @return $this
     */
    public function withCurrentPassword(?string $currentPassword)
    {
        $this->currentPassword = $currentPassword;

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


    public function build(): MyCustomerChangePassword
    {
        return new MyCustomerChangePasswordModel(
            $this->version,
            $this->currentPassword,
            $this->newPassword
        );
    }

    public static function of(): MyCustomerChangePasswordBuilder
    {
        return new self();
    }
}
