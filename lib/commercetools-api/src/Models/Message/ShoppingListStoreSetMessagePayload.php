<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListStoreSetMessagePayload extends MessagePayload
{
    public const FIELD_STORE = 'store';

    /**
     * <p><a href="ctp:api:type:KeyReference">KeyReference</a> to a <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;
}
