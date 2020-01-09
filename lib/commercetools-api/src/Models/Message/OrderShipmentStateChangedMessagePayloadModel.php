<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObjectModel;

final class OrderShipmentStateChangedMessagePayloadModel extends JsonObjectModel implements OrderShipmentStateChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderShipmentStateChanged';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $shipmentState;

    /**
     * @var ?string
     */
    protected $oldShipmentState;

    public function __construct(
        string $shipmentState = null,
        string $oldShipmentState = null
    ) {
        $this->shipmentState = $shipmentState;
        $this->oldShipmentState = $oldShipmentState;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderShipmentStateChangedMessagePayload::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    /**
     * @return null|string
     */
    public function getOldShipmentState()
    {
        if (is_null($this->oldShipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderShipmentStateChangedMessagePayload::FIELD_OLD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldShipmentState = (string) $data;
        }

        return $this->oldShipmentState;
    }

    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    public function setOldShipmentState(?string $oldShipmentState): void
    {
        $this->oldShipmentState = $oldShipmentState;
    }
}
