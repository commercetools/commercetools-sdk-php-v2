<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitStoreModeChangedMessagePayload extends MessagePayload
{
    public const FIELD_STORES = 'stores';
    public const FIELD_STORE_MODE = 'storeMode';
    public const FIELD_OLD_STORES = 'oldStores';
    public const FIELD_OLD_STORE_MODE = 'oldStoreMode';

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * <p><a href="ctp:api:type:BusinessUnitStoreMode">BusinessUnitStoreMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getOldStores();

    /**
     * <p><a href="ctp:api:type:BusinessUnitStoreMode">BusinessUnitStoreMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitSetStoreModeAction">Set Store Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldStoreMode();

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;

    /**
     * @param ?StoreKeyReferenceCollection $oldStores
     */
    public function setOldStores(?StoreKeyReferenceCollection $oldStores): void;

    /**
     * @param ?string $oldStoreMode
     */
    public function setOldStoreMode(?string $oldStoreMode): void;
}
