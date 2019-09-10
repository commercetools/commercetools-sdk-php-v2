<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerChangePasswordModel extends JsonObjectModel implements CustomerChangePassword
{
    /**
     * @var ?string
     */
    protected $newPassword;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $currentPassword;

    public function __construct(
        string $newPassword = null,
        string $id = null,
        int $version = null,
        string $currentPassword = null
    ) {
        $this->newPassword = $newPassword;
        $this->id = $id;
        $this->version = $version;
        $this->currentPassword = $currentPassword;
    }

    /**
     * @return null|string
     */
    public function getNewPassword()
    {
        if (is_null($this->newPassword)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerChangePassword::FIELD_NEW_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->newPassword = (string) $data;
        }

        return $this->newPassword;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerChangePassword::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CustomerChangePassword::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|string
     */
    public function getCurrentPassword()
    {
        if (is_null($this->currentPassword)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerChangePassword::FIELD_CURRENT_PASSWORD);
            if (is_null($data)) {
                return null;
            }
            $this->currentPassword = (string) $data;
        }

        return $this->currentPassword;
    }

    public function setNewPassword(?string $newPassword): void
    {
        $this->newPassword = $newPassword;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCurrentPassword(?string $currentPassword): void
    {
        $this->currentPassword = $currentPassword;
    }
}
