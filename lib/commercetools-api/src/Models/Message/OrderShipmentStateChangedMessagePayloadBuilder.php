<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderShipmentStateChangedMessagePayload>
 */
final class OrderShipmentStateChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $shipmentState;

    /**
     * @var ?string
     */
    private $oldShipmentState;

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
    }

    /**
     * @return null|string
     */
    public function getOldShipmentState()
    {
        return $this->oldShipmentState;
    }

    /**
     * @return $this
     */
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldShipmentState(?string $oldShipmentState)
    {
        $this->oldShipmentState = $oldShipmentState;

        return $this;
    }

    public function build(): OrderShipmentStateChangedMessagePayload
    {
        return new OrderShipmentStateChangedMessagePayloadModel(
            $this->shipmentState,
            $this->oldShipmentState
        );
    }

    public static function of(): OrderShipmentStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
