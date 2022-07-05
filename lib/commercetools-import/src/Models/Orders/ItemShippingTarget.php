<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ItemShippingTarget extends JsonObject
{
    public const FIELD_ADDRESS_KEY = 'addressKey';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p>Maps to <code>ItemShippingTarget.addressKey</code>.</p>
     *

     * @return null|string
     */
    public function getAddressKey();

    /**
     * <p>Maps to <code>ItemShippingTarget.quantity</code>.</p>
     *

     * @return null|float
     */
    public function getQuantity();

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void;

    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void;
}
