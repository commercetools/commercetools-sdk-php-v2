<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCustomerChangePasswordModel extends JsonObjectModel implements MyCustomerChangePassword
{
    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?string
     */
    protected $currentPassword;

    /**
     *
     * @var ?string
     */
    protected $newPassword;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $version = null,
        ?string $currentPassword = null,
        ?string $newPassword = null
    ) {
        $this->version = $version;
        $this->currentPassword = $currentPassword;
        $this->newPassword = $newPassword;
    }

    /**
     * <p>Expected version of the Customer on which the changes should be applied.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Current password of the Customer.</p>
     * <p>If the current password does not match, an <a href="ctp:api:type:InvalidCurrentPasswordError">InvalidCurrentPassword</a> error is returned.</p>
     *
     *
     * @return null|string
     */
    public function getCurrentPassword()
    {
        if (is_null($this->currentPassword)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CURRENT_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->currentPassword = (string) $data;
        }

        return $this->currentPassword;
    }

    /**
     * <p>New password to be set.</p>
     *
     *
     * @return null|string
     */
    public function getNewPassword()
    {
        if (is_null($this->newPassword)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEW_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->newPassword = (string) $data;
        }

        return $this->newPassword;
    }


    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?string $currentPassword
     */
    public function setCurrentPassword(?string $currentPassword): void
    {
        $this->currentPassword = $currentPassword;
    }

    /**
     * @param ?string $newPassword
     */
    public function setNewPassword(?string $newPassword): void
    {
        $this->newPassword = $newPassword;
    }
}
