<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderDeletedMessagePayload>
 */
final class OrderDeletedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|Order|OrderBuilder
     */
    private $order;

    /**
     * @return null|Order
     */
    public function getOrder()
    {
        return $this->order instanceof OrderBuilder ? $this->order->build() : $this->order;
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
     * @deprecated use withOrder() instead
     * @return $this
     */
    public function withOrderBuilder(?OrderBuilder $order)
    {
        $this->order = $order;

        return $this;
    }

    public function build(): OrderDeletedMessagePayload
    {
        return new OrderDeletedMessagePayloadModel(
            $this->order instanceof OrderBuilder ? $this->order->build() : $this->order
        );
    }

    public static function of(): OrderDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
