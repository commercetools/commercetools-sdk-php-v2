<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetReturnShipmentStateAction>
 */
final class OrderSetReturnShipmentStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $returnItemId;

    /**
     * @var ?string
     */
    private $shipmentState;

    /**
     * @return null|string
     */
    public function getReturnItemId()
    {
        return $this->returnItemId;
    }

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
    public function withReturnItemId(?string $returnItemId)
    {
        $this->returnItemId = $returnItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }


    public function build(): OrderSetReturnShipmentStateAction
    {
        return new OrderSetReturnShipmentStateActionModel(
            $this->returnItemId,
            $this->shipmentState
        );
    }

    public static function of(): OrderSetReturnShipmentStateActionBuilder
    {
        return new self();
    }
}
