<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderReturnShipmentStateChangedMessagePayload>
 */
final class OrderReturnShipmentStateChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $returnItemId;

    /**

     * @var ?string
     */
    private $returnShipmentState;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ReturnItem">ReturnItem</a>.</p>
     *

     * @return null|string
     */
    public function getReturnItemId()
    {
        return $this->returnItemId;
    }

    /**
     * <p>State of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> after the <a href="ctp:api:type:OrderSetReturnShipmentStateAction">Set Return Shipment State</a> update action.</p>
     *

     * @return null|string
     */
    public function getReturnShipmentState()
    {
        return $this->returnShipmentState;
    }

    /**
     * @param ?string $returnItemId
     * @return $this
     */
    public function withReturnItemId(?string $returnItemId)
    {
        $this->returnItemId = $returnItemId;

        return $this;
    }

    /**
     * @param ?string $returnShipmentState
     * @return $this
     */
    public function withReturnShipmentState(?string $returnShipmentState)
    {
        $this->returnShipmentState = $returnShipmentState;

        return $this;
    }


    public function build(): OrderReturnShipmentStateChangedMessagePayload
    {
        return new OrderReturnShipmentStateChangedMessagePayloadModel(
            $this->returnItemId,
            $this->returnShipmentState
        );
    }

    public static function of(): OrderReturnShipmentStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
