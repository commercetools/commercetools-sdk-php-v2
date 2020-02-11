<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerChangeEmailAction extends MyCustomerUpdateAction
{
    public const FIELD_EMAIL = 'email';

    /**
     * @return null|string
     */
    public function getEmail();

    public function setEmail(?string $email): void;
}
