<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerSetLastNameAction extends MyCustomerUpdateAction
{
    public const FIELD_LAST_NAME = 'lastName';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getLastName();

    /**
     * @param ?string $lastName
     */
    public function setLastName(?string $lastName): void;
}
