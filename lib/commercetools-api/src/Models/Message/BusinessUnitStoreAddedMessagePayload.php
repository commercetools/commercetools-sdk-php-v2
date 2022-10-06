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

interface BusinessUnitStoreAddedMessagePayload extends MessagePayload
{
    public const FIELD_STORE = 'store';

    /**
     * <p>The <a href="ctp:api:type:Store">Store</a> that was added to the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;
}
