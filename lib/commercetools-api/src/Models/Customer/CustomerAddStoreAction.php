<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerAddStoreAction extends CustomerUpdateAction
{
    public const FIELD_STORE = 'store';

    /**
     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    public function setStore(?StoreResourceIdentifier $store): void;
}
