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
    private $type;

    /**
     * @var ?string
     */
    private $oldOrderState;

    /**
     * @var ?string
     */
    private $orderState;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

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
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
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
            $this->type,
            $this->oldOrderState,
            $this->orderState
        );
    }

    public static function of(): OrderStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
