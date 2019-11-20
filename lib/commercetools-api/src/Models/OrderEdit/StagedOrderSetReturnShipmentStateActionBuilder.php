<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetReturnShipmentStateAction>
 */
final class StagedOrderSetReturnShipmentStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $shipmentState;

    /**
     * @var ?string
     */
    private $returnItemId;

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
    public function getReturnItemId()
    {
        return $this->returnItemId;
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
    public function withReturnItemId(?string $returnItemId)
    {
        $this->returnItemId = $returnItemId;

        return $this;
    }

    public function build(): StagedOrderSetReturnShipmentStateAction
    {
        return new StagedOrderSetReturnShipmentStateActionModel(
            $this->shipmentState,
            $this->returnItemId
        );
    }

    public static function of(): StagedOrderSetReturnShipmentStateActionBuilder
    {
        return new self();
    }
}
