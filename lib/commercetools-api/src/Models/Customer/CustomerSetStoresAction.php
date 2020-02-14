<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSetStoresAction extends CustomerUpdateAction
{
    public const FIELD_STORES = 'stores';

    /**
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    public function setStores(?StoreResourceIdentifierCollection $stores): void;
}
