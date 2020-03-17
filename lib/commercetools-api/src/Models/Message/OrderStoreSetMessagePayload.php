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

interface OrderStoreSetMessagePayload extends MessagePayload
{
    public const FIELD_STORE = 'store';

    /**
     * @return null|StoreKeyReference
     */
    public function getStore();

    public function setStore(?StoreKeyReference $store): void;
}
