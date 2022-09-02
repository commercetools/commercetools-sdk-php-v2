<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ItemShippingTarget extends JsonObject
{
    public const FIELD_ADDRESS_KEY = 'addressKey';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_SHIPPING_METHOD_KEY = 'shippingMethodKey';

    /**
     * <p>The key of the address in the cart's <code>itemShippingAddresses</code></p>
     *

     * @return null|string
     */
    public function getAddressKey();

    /**
     * <p>The quantity of items that should go to the address with the specified <code>addressKey</code>.
     * Only positive values are allowed.
     * Using <code>0</code> as quantity is also possible in a draft object, but the element will not be present in the resulting ItemShippingDetails.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     * <p>It connects Line Item quantities with individual shipping addresses.</p>
     *

     * @return null|string
     */
    public function getShippingMethodKey();

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?string $shippingMethodKey
     */
    public function setShippingMethodKey(?string $shippingMethodKey): void;
}
