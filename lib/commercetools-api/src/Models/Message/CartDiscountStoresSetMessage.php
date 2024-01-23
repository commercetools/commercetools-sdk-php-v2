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

interface CartDiscountStoresSetMessage extends Message
{
    public const FIELD_STORES = 'stores';

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> of the <a href="ctp:api:type:CartDiscount">Cart Discount</a> after the <a href="ctp:api:type:CartDiscountSetStoresAction">Set Stores</a> update action.</p>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;
}
