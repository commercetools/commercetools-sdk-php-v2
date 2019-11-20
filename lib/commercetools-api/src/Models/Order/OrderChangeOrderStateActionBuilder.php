<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderChangeOrderStateAction>
 */
final class OrderChangeOrderStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $orderState;

    /**
     * @return null|string
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @return $this
     */
    public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }

    public function build(): OrderChangeOrderStateAction
    {
        return new OrderChangeOrderStateActionModel(
            $this->orderState
        );
    }

    public static function of(): OrderChangeOrderStateActionBuilder
    {
        return new self();
    }
}
