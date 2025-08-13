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

interface CustomerStoresSetMessagePayload extends MessagePayload
{
    public const FIELD_STORES = 'stores';
    public const FIELD_OLD_STORES = 'oldStores';

    /**
     * <p>The <a href="ctp:api:type:Store">Stores</a> the <a href="ctp:api:type:Customer">Customer</a> is associated with after the <a href="ctp:api:type:CustomerSetStoresAction">Set Stores</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * <p>The <a href="ctp:api:type:Store">Stores</a> the <a href="ctp:api:type:Customer">Customer</a> was associated with before the <a href="ctp:api:type:CustomerSetStoresAction">Set Stores</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getOldStores();

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;

    /**
     * @param ?StoreKeyReferenceCollection $oldStores
     */
    public function setOldStores(?StoreKeyReferenceCollection $oldStores): void;
}
