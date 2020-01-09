<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;

final class StagedOrderSetReturnShipmentStateActionModel extends JsonObjectModel implements StagedOrderSetReturnShipmentStateAction
{
    const DISCRIMINATOR_VALUE = 'setReturnShipmentState';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $returnItemId;

    /**
     * @var ?string
     */
    protected $shipmentState;

    public function __construct(
        string $returnItemId = null,
        string $shipmentState = null
    ) {
        $this->returnItemId = $returnItemId;
        $this->shipmentState = $shipmentState;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getReturnItemId()
    {
        if (is_null($this->returnItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetReturnShipmentStateAction::FIELD_RETURN_ITEM_ID);
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
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetReturnShipmentStateAction::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    public function setReturnItemId(?string $returnItemId): void
    {
        $this->returnItemId = $returnItemId;
    }

    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
}
