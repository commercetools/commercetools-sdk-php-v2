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

interface OrderStoreSetMessage extends OrderMessage
{
    public const FIELD_STORE = 'store';

    /**
     * <p><a href="ctp:api:type:Store">Store</a> that was set.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;
}
