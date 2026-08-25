<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\EstimatedDelivery;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartEstimatedDeliverySetMessagePayload extends MessagePayload
{
    public const FIELD_ESTIMATED_DELIVERY = 'estimatedDelivery';
    public const FIELD_SHIPPING_KEY = 'shippingKey';

    /**
     * <p>Estimated delivery window on the <a href="ctp:api:type:Cart">Cart</a> after the <a href="ctp:api:type:CartSetEstimatedDeliveryAction">Set Estimated Delivery</a> update action.</p>
     *

     * @return null|EstimatedDelivery
     */
    public function getEstimatedDelivery();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Shipping">Shipping</a> that was updated. Only present for Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * @param ?EstimatedDelivery $estimatedDelivery
     */
    public function setEstimatedDelivery(?EstimatedDelivery $estimatedDelivery): void;

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;
}
