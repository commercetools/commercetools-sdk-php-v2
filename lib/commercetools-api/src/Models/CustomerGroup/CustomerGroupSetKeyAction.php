<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupSetKeyAction extends CustomerGroupUpdateAction
{
    public const FIELD_KEY = 'key';

    /**
     * <p>User-defined unique identifier for the customer group.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
