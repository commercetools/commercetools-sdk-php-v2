<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CustomerResetPassword extends JsonObject
{

    public const FIELD_TOKEN_VALUE = 'tokenValue';
    public const FIELD_NEW_PASSWORD = 'newPassword';
    public const FIELD_VERSION = 'version';

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
