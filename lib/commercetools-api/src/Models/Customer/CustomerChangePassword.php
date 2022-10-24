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
     * <p>Unique identifier of the Customer.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Expected version of the Customer on which the changes should be applied.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Current password of the Customer.</p>
     * <p>If the current password does not match, an <a href="ctp:api:type:InvalidCurrentPasswordError">InvalidCurrentPassword</a> error is returned.</p>
     *

     * @return null|string
     */
    public function getCurrentPassword();

    /**
     * <p>New password to be set.</p>
     *

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
