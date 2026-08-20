<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\EstimatedDelivery;
use Commercetools\Api\Models\Cart\EstimatedDeliveryBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetEstimatedDeliveryAction>
 */
final class OrderSetEstimatedDeliveryActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingKey;

    /**

     * @var null|EstimatedDelivery|EstimatedDeliveryBuilder
     */
    private $estimatedDelivery;

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Shipping">Shipping</a> to update.
     * This is required and valid only for Orders with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * An <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned if <code>shippingKey</code> is provided for Orders with <code>Single</code> ShippingMode, or omitted for Orders with <code>Multiple</code> ShippingMode.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * <p>Value to set. If empty, any existing value is removed.</p>
     *

     * @return null|EstimatedDelivery
     */
    public function getEstimatedDelivery()
    {
        return $this->estimatedDelivery instanceof EstimatedDeliveryBuilder ? $this->estimatedDelivery->build() : $this->estimatedDelivery;
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
     * @param ?EstimatedDelivery $estimatedDelivery
     * @return $this
     */
    public function withEstimatedDelivery(?EstimatedDelivery $estimatedDelivery)
    {
        $this->estimatedDelivery = $estimatedDelivery;

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

    public function build(): OrderSetEstimatedDeliveryAction
    {
        return new OrderSetEstimatedDeliveryActionModel(
            $this->shippingKey,
            $this->estimatedDelivery instanceof EstimatedDeliveryBuilder ? $this->estimatedDelivery->build() : $this->estimatedDelivery
        );
    }

    public static function of(): OrderSetEstimatedDeliveryActionBuilder
    {
        return new self();
    }
}
