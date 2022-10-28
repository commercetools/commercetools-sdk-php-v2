<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderShipmentStateChangedMessagePayloadModel extends JsonObjectModel implements OrderShipmentStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderShipmentStateChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $shipmentState;

    /**
     *
     * @var ?string
     */
    protected $oldShipmentState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $shipmentState = null,
        ?string $oldShipmentState = null,
        ?string $type = null
    ) {
        $this->shipmentState = $shipmentState;
        $this->oldShipmentState = $oldShipmentState;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:ShipmentState">ShipmentState</a> after the <a href="ctp:api:type:OrderChangeShipmentStateAction">Change Shipment State</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    /**
     * <p><a href="ctp:api:type:ShipmentState">ShipmentState</a> before the <a href="ctp:api:type:OrderChangeShipmentStateAction">Change Shipment State</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldShipmentState()
    {
        if (is_null($this->oldShipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldShipmentState = (string) $data;
        }

        return $this->oldShipmentState;
    }


    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    /**
     * @param ?string $oldShipmentState
     */
    public function setOldShipmentState(?string $oldShipmentState): void
    {
        $this->oldShipmentState = $oldShipmentState;
    }
}
