<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderReturnShipmentStateChangedMessagePayload>
 */
final class OrderReturnShipmentStateChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $returnItemId;

    /**
     * @var ?string
     */
    private $returnShipmentState;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

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
    public function getReturnShipmentState()
    {
        return $this->returnShipmentState;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

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

    /**
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
            $this->type,
            $this->returnItemId,
            $this->returnShipmentState
        );
    }

    public static function of(): OrderReturnShipmentStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
