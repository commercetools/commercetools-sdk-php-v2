<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

interface CustomerGroupSetKeyAction extends CustomerGroupUpdateAction
{
    const FIELD_KEY = 'key';

    /**
     * <p>User-specific unique identifier for the customer group.</p>
     *
     * @return null|string
     */
    public function getKey();

    public function setKey(?string $key): void;
}
