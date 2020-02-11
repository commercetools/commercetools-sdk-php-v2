<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderChangeShipmentStateAction>
 */
final class StagedOrderChangeShipmentStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $shipmentState;

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
    }

    /**
     * @return $this
     */
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }


    public function build(): StagedOrderChangeShipmentStateAction
    {
        return new StagedOrderChangeShipmentStateActionModel(
            $this->shipmentState
        );
    }

    public static function of(): StagedOrderChangeShipmentStateActionBuilder
    {
        return new self();
    }
}
