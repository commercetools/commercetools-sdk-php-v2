<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\EstimatedDelivery;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetEstimatedDeliveryAction extends OrderUpdateAction
{
    public const FIELD_SHIPPING_KEY = 'shippingKey';
    public const FIELD_ESTIMATED_DELIVERY = 'estimatedDelivery';

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Shipping">Shipping</a> to update.
     * This is required and valid only for Orders with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * An <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned if <code>shippingKey</code> is provided for Orders with <code>Single</code> ShippingMode, or omitted for Orders with <code>Multiple</code> ShippingMode.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * <p>Value to set. If empty, any existing value is removed.</p>
     *

     * @return null|EstimatedDelivery
     */
    public function getEstimatedDelivery();

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;

    /**
     * @param ?EstimatedDelivery $estimatedDelivery
     */
    public function setEstimatedDelivery(?EstimatedDelivery $estimatedDelivery): void;
}
