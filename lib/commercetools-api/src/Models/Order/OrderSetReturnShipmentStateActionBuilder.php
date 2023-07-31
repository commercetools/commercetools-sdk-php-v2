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
    private $returnItemKey;

    /**

     * @var ?string
     */
    private $shipmentState;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> to update. Either <code>returnItemId</code> or <code>returnItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getReturnItemId()
    {
        return $this->returnItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> to update. Either <code>returnItemId</code> or <code>returnItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getReturnItemKey()
    {
        return $this->returnItemKey;
    }

    /**
     * <p>New shipment state of the <a href="ctp:api:type:ReturnItem">ReturnItem</a>.</p>
     *

     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
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
     * @param ?string $returnItemKey
     * @return $this
     */
    public function withReturnItemKey(?string $returnItemKey)
    {
        $this->returnItemKey = $returnItemKey;

        return $this;
    }

    /**
     * @param ?string $shipmentState
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
            $this->returnItemKey,
            $this->shipmentState
        );
    }

    public static function of(): OrderSetReturnShipmentStateActionBuilder
    {
        return new self();
    }
}
