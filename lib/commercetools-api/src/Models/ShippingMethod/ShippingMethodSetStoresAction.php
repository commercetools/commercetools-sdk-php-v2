<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodSetStoresAction extends ShippingMethodUpdateAction
{
    public const FIELD_STORES = 'stores';

    /**
     * <p>ResourceIdentifiers of the Stores to set.
     * Overrides the current list of Stores.
     * Set to an empty array to remove all existing values.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;
}
