<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderRemoveItemShippingAddressAction extends StagedOrderUpdateAction
{
    public const FIELD_ADDRESS_KEY = 'addressKey';

    /**
     * <p><code>key</code> of the Address to remove from <code>itemShippingAddresses</code>.</p>
     *

     * @return null|string
     */
    public function getAddressKey();

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void;
}
