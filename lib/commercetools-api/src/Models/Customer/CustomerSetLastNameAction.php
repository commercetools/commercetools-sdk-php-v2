<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSetLastNameAction extends CustomerUpdateAction
{
    public const FIELD_LAST_NAME = 'lastName';

    /**

     * @return null|string
     */
    public function getLastName();

    /**
     * @param ?string $lastName
     */
    public function setLastName(?string $lastName): void;
}
