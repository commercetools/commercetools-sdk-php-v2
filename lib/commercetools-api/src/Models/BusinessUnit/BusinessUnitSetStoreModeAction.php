<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitSetStoreModeAction extends BusinessUnitUpdateAction
{
    public const FIELD_STORE_MODE = 'storeMode';
    public const FIELD_STORES = 'stores';

    /**
     * <p>Set to <code>Explicit</code> to specify Stores for the Business Unit. Set to <code>FromParent</code> to inherit Stores from a parent.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * <p>Set the <a href="ctp:api:type:Store">Stores</a> the Business Unit is associated with. Can only be set if <code>storeMode</code> is <code>Explicit</code>.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;
}
