<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerResetPassword extends JsonObject
{
    public const FIELD_TOKEN_VALUE = 'tokenValue';
    public const FIELD_NEW_PASSWORD = 'newPassword';

    /**
     * @return null|string
     */
    public function getTokenValue();

    /**
     * @return null|string
     */
    public function getNewPassword();

    /**
     * @param ?string $tokenValue
     */
    public function setTokenValue(?string $tokenValue): void;

    /**
     * @param ?string $newPassword
     */
    public function setNewPassword(?string $newPassword): void;
}
