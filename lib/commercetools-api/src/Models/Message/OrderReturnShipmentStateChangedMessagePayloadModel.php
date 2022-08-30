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
final class OrderReturnShipmentStateChangedMessagePayloadModel extends JsonObjectModel implements OrderReturnShipmentStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderReturnShipmentStateChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $returnItemId;

    /**
     *
     * @var ?string
     */
    protected $returnShipmentState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $returnItemId = null,
        ?string $returnShipmentState = null,
        ?string $type = null
    ) {
        $this->returnItemId = $returnItemId;
        $this->returnShipmentState = $returnShipmentState;
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
     * <p>Unique identifier of the <a href="ctp:api:type:ReturnItem">ReturnItem</a>.</p>
     *
     *
     * @return null|string
     */
    public function getReturnItemId()
    {
        if (is_null($this->returnItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RETURN_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->returnItemId = (string) $data;
        }

        return $this->returnItemId;
    }

    /**
     * <p>State of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> after the <a href="ctp:api:type:OrderSetReturnShipmentStateAction">Set Return Shipment State</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getReturnShipmentState()
    {
        if (is_null($this->returnShipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RETURN_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->returnShipmentState = (string) $data;
        }

        return $this->returnShipmentState;
    }


    /**
     * @param ?string $returnItemId
     */
    public function setReturnItemId(?string $returnItemId): void
    {
        $this->returnItemId = $returnItemId;
    }

    /**
     * @param ?string $returnShipmentState
     */
    public function setReturnShipmentState(?string $returnShipmentState): void
    {
        $this->returnShipmentState = $returnShipmentState;
    }
}
