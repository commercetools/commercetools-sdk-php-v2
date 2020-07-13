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
 * @implements Builder<CustomerChangePassword>
 */
final class CustomerChangePasswordBuilder implements Builder
{
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

    /**
     * @var ?string
     */
    private $newPassword;

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
     * @return null|string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

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


    public function build(): CustomerChangePassword
    {
        return new CustomerChangePasswordModel(
            $this->id,
            $this->version,
            $this->currentPassword,
            $this->newPassword
        );
    }

    public static function of(): CustomerChangePasswordBuilder
    {
        return new self();
    }
}
