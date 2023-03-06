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
     * <p>Key of the address in the <a href="ctp:api:type:Cart">Cart</a> <code>itemShippingAddresses</code>.
     * Duplicate address keys are not allowed.</p>
     *

     * @return null|string
     */
    public function getAddressKey();

    /**
     * <p>Quantity of Line Items or Custom Line Items shipped to the address with the specified <code>addressKey</code>.</p>
     * <p>If a quantity is updated to <code>0</code> when defining <a href="ctp:api:type:ItemShippingDetailsDraft">ItemShippingDetailsDraft</a>, the <code>targets</code> are removed from a Line Item or Custom Line Item in the resulting <a href="ctp:api:type:ItemShippingDetails">ItemShippingDetails</a>.</p>
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
