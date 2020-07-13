<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerChangePassword extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_CURRENT_PASSWORD = 'currentPassword';
    public const FIELD_NEW_PASSWORD = 'newPassword';

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

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $currentPassword
     */
    public function setCurrentPassword(?string $currentPassword): void;

    /**
     * @param ?string $newPassword
     */
    public function setNewPassword(?string $newPassword): void;
}
