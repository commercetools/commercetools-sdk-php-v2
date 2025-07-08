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
     * <p>Key of the address in the <a href="ctp:api:type:Cart">Cart</a> <code>itemShippingAddresses</code>. Duplicate address keys are not allowed.</p>
     *

     * @return null|string
     */
    public function getAddressKey();

    /**
     * <p>Quantity of Line Items or Custom Line Items shipped to the address with the specified <code>addressKey</code>.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
