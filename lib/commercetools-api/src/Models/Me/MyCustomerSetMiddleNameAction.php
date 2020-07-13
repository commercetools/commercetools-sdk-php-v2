<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerSetMiddleNameAction extends MyCustomerUpdateAction
{
    public const FIELD_MIDDLE_NAME = 'middleName';

    /**
     * @return null|string
     */
    public function getMiddleName();

    /**
     * @param ?string $middleName
     */
    public function setMiddleName(?string $middleName): void;
}
