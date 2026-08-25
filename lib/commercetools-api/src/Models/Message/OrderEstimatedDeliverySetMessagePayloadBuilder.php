<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\EstimatedDelivery;
use Commercetools\Api\Models\Cart\EstimatedDeliveryBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEstimatedDeliverySetMessagePayload>
 */
final class OrderEstimatedDeliverySetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|EstimatedDelivery|EstimatedDeliveryBuilder
     */
    private $estimatedDelivery;

    /**

     * @var ?string
     */
    private $shippingKey;

    /**
     * <p>Estimated delivery window on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetEstimatedDeliveryAction">Set Estimated Delivery</a> update action.</p>
     *

     * @return null|EstimatedDelivery
     */
    public function getEstimatedDelivery()
    {
        return $this->estimatedDelivery instanceof EstimatedDeliveryBuilder ? $this->estimatedDelivery->build() : $this->estimatedDelivery;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Shipping">Shipping</a> that was updated. Only present for Orders with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * @param ?EstimatedDelivery $estimatedDelivery
     * @return $this
     */
    public function withEstimatedDelivery(?EstimatedDelivery $estimatedDelivery)
    {
        $this->estimatedDelivery = $estimatedDelivery;

        return $this;
    }

    /**
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

        return $this;
    }

    /**
     * @deprecated use withEstimatedDelivery() instead
     * @return $this
     */
    public function withEstimatedDeliveryBuilder(?EstimatedDeliveryBuilder $estimatedDelivery)
    {
        $this->estimatedDelivery = $estimatedDelivery;

        return $this;
    }

    public function build(): OrderEstimatedDeliverySetMessagePayload
    {
        return new OrderEstimatedDeliverySetMessagePayloadModel(
            $this->estimatedDelivery instanceof EstimatedDeliveryBuilder ? $this->estimatedDelivery->build() : $this->estimatedDelivery,
            $this->shippingKey
        );
    }

    public static function of(): OrderEstimatedDeliverySetMessagePayloadBuilder
    {
        return new self();
    }
}
