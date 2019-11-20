<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderStateChangedMessagePayload>
 */
final class OrderStateChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $oldOrderState;

    /**
     * @var ?string
     */
    private $orderState;

    /**
     * @return null|string
     */
    public function getOldOrderState()
    {
        return $this->oldOrderState;
    }

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
    public function withOldOrderState(?string $oldOrderState)
    {
        $this->oldOrderState = $oldOrderState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }

    public function build(): OrderStateChangedMessagePayload
    {
        return new OrderStateChangedMessagePayloadModel(
            $this->oldOrderState,
            $this->orderState
        );
    }

    public static function of(): OrderStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
