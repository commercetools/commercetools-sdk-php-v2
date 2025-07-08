<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderBuilder;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderReference;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderCreatedFromRecurringOrderMessagePayload>
 */
final class OrderCreatedFromRecurringOrderMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Order|OrderBuilder
     */
    private $order;

    /**

     * @var null|RecurringOrderReference|RecurringOrderReferenceBuilder
     */
    private $recurringOrderRef;

    /**
     * <p><a href="ctp:api:type:Order">Order</a> that was created.</p>
     *

     * @return null|Order
     */
    public function getOrder()
    {
        return $this->order instanceof OrderBuilder ? $this->order->build() : $this->order;
    }

    /**
     * <p>Reference to the origin <a href="ctp:api:type:RecurringOrder">Recurring Order</a>.</p>
     *

     * @return null|RecurringOrderReference
     */
    public function getRecurringOrderRef()
    {
        return $this->recurringOrderRef instanceof RecurringOrderReferenceBuilder ? $this->recurringOrderRef->build() : $this->recurringOrderRef;
    }

    /**
     * @param ?Order $order
     * @return $this
     */
    public function withOrder(?Order $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @param ?RecurringOrderReference $recurringOrderRef
     * @return $this
     */
    public function withRecurringOrderRef(?RecurringOrderReference $recurringOrderRef)
    {
        $this->recurringOrderRef = $recurringOrderRef;

        return $this;
    }

    /**
     * @deprecated use withOrder() instead
     * @return $this
     */
    public function withOrderBuilder(?OrderBuilder $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @deprecated use withRecurringOrderRef() instead
     * @return $this
     */
    public function withRecurringOrderRefBuilder(?RecurringOrderReferenceBuilder $recurringOrderRef)
    {
        $this->recurringOrderRef = $recurringOrderRef;

        return $this;
    }

    public function build(): OrderCreatedFromRecurringOrderMessagePayload
    {
        return new OrderCreatedFromRecurringOrderMessagePayloadModel(
            $this->order instanceof OrderBuilder ? $this->order->build() : $this->order,
            $this->recurringOrderRef instanceof RecurringOrderReferenceBuilder ? $this->recurringOrderRef->build() : $this->recurringOrderRef
        );
    }

    public static function of(): OrderCreatedFromRecurringOrderMessagePayloadBuilder
    {
        return new self();
    }
}
