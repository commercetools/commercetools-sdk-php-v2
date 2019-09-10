<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerResetPassword extends JsonObject
{
    const FIELD_TOKEN_VALUE = 'tokenValue';
    const FIELD_NEW_PASSWORD = 'newPassword';
    const FIELD_VERSION = 'version';

    /**
     * @return null|string
     */
    public function getTokenValue();

    /**
     * @return null|string
     */
    public function getNewPassword();

    /**
     * @return null|int
     */
    public function getVersion();

    public function setTokenValue(?string $tokenValue): void;

    public function setNewPassword(?string $newPassword): void;

    public function setVersion(?int $version): void;
}
