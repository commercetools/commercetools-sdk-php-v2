<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;

final class StagedOrderChangeShipmentStateActionModel extends JsonObjectModel implements StagedOrderChangeShipmentStateAction
{
    const DISCRIMINATOR_VALUE = 'changeShipmentState';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $shipmentState;

    public function __construct(
        string $action = null,
        string $shipmentState = null
    ) {
        $this->action = $action;
        $this->shipmentState = $shipmentState;
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
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderChangeShipmentStateAction::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
}
