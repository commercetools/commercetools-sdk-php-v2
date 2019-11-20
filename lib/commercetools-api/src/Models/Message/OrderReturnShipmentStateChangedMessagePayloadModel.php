<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObjectModel;

final class OrderReturnShipmentStateChangedMessagePayloadModel extends JsonObjectModel implements OrderReturnShipmentStateChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderReturnShipmentStateChanged';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $returnItemId;

    /**
     * @var ?string
     */
    protected $returnShipmentState;

    public function __construct(
        string $returnItemId = null,
        string $returnShipmentState = null
    ) {
        $this->returnItemId = $returnItemId;
        $this->returnShipmentState = $returnShipmentState;
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
    public function getReturnItemId()
    {
        if (is_null($this->returnItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderReturnShipmentStateChangedMessagePayload::FIELD_RETURN_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->returnItemId = (string) $data;
        }

        return $this->returnItemId;
    }

    /**
     * @return null|string
     */
    public function getReturnShipmentState()
    {
        if (is_null($this->returnShipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderReturnShipmentStateChangedMessagePayload::FIELD_RETURN_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->returnShipmentState = (string) $data;
        }

        return $this->returnShipmentState;
    }

    public function setReturnItemId(?string $returnItemId): void
    {
        $this->returnItemId = $returnItemId;
    }

    public function setReturnShipmentState(?string $returnShipmentState): void
    {
        $this->returnShipmentState = $returnShipmentState;
    }
}
