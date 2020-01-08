<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface ItemShippingTarget extends JsonObject
{
    const FIELD_ADDRESS_KEY = 'addressKey';
    const FIELD_QUANTITY = 'quantity';

    /**
     * <p>The key of the address in the cart's <code>itemShippingAddresses</code></p>.
     *
     * @return null|string
     */
    public function getAddressKey();

    /**
     * <p>The quantity of items that should go to the address with the specified <code>addressKey</code>.
     * Only positive values are allowed.
     * Using <code>0</code> as quantity is also possible in a draft object, but the element will not be present in the resulting ItemShippingDetails.</p>.
     *
     * @return null|int
     */
    public function getQuantity();

    public function setAddressKey(?string $addressKey): void;

    public function setQuantity(?int $quantity): void;
}
