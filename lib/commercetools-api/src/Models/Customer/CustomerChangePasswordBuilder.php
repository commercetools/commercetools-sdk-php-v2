<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerChangePassword>
 */
final class CustomerChangePasswordBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $newPassword;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?string
     */
    private $currentPassword;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|string
     */
    public function getCurrentPassword()
    {
        return $this->currentPassword;
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
    public function withId(?string $id)
    {
        $this->id = $id;

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

    /**
     * @return $this
     */
    public function withCurrentPassword(?string $currentPassword)
    {
        $this->currentPassword = $currentPassword;

        return $this;
    }

    public function build(): CustomerChangePassword
    {
        return new CustomerChangePasswordModel(
            $this->newPassword,
            $this->id,
            $this->version,
            $this->currentPassword
        );
    }

    public static function of(): CustomerChangePasswordBuilder
    {
        return new self();
    }
}
