<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerResetPassword extends JsonObject
{
    public const FIELD_TOKEN_VALUE = 'tokenValue';
    public const FIELD_NEW_PASSWORD = 'newPassword';
    public const FIELD_VERSION = 'version';

    /**
     * <p>Value of the token to reset the Customer password.</p>
     *

     * @return null|string
     */
    public function getTokenValue();

    /**
     * <p>New password to be set.</p>
     *

     * @return null|string
     */
    public function getNewPassword();

    /**
     * <p>Expected version of the Customer.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * @param ?string $tokenValue
     */
    public function setTokenValue(?string $tokenValue): void;

    /**
     * @param ?string $newPassword
     */
    public function setNewPassword(?string $newPassword): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;
}
