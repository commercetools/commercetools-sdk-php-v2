<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerChangePassword extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_CURRENT_PASSWORD = 'currentPassword';
    const FIELD_NEW_PASSWORD = 'newPassword';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|string
     */
    public function getCurrentPassword();

    /**
     * @return null|string
     */
    public function getNewPassword();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCurrentPassword(?string $currentPassword): void;

    public function setNewPassword(?string $newPassword): void;
}
