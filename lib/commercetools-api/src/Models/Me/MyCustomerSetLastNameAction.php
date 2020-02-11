<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MyCustomerSetLastNameAction extends MyCustomerUpdateAction
{

    public const FIELD_LAST_NAME = 'lastName';

    /**
     * @return null|string
     */
    public function getLastName();

    public function setLastName(?string $lastName): void;
}
