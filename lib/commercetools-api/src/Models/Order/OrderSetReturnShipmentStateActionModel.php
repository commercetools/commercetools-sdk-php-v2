<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderSetReturnShipmentStateActionModel extends JsonObjectModel implements OrderSetReturnShipmentStateAction
{
    public const DISCRIMINATOR_VALUE = 'setReturnShipmentState';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $returnItemId;

    /**
     *
     * @var ?string
     */
    protected $returnItemKey;

    /**
     *
     * @var ?string
     */
    protected $shipmentState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $returnItemId = null,
        ?string $returnItemKey = null,
        ?string $shipmentState = null,
        ?string $action = null
    ) {
        $this->returnItemId = $returnItemId;
        $this->returnItemKey = $returnItemKey;
        $this->shipmentState = $shipmentState;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> to update. Either <code>returnItemId</code> or <code>returnItemKey</code> is required.</p>
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
     * <p><code>key</code> of the <a href="ctp:api:type:ReturnItem">ReturnItem</a> to update. Either <code>returnItemId</code> or <code>returnItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getReturnItemKey()
    {
        if (is_null($this->returnItemKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RETURN_ITEM_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->returnItemKey = (string) $data;
        }

        return $this->returnItemKey;
    }

    /**
     * <p>New shipment state of the <a href="ctp:api:type:ReturnItem">ReturnItem</a>.</p>
     *
     *
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }


    /**
     * @param ?string $returnItemId
     */
    public function setReturnItemId(?string $returnItemId): void
    {
        $this->returnItemId = $returnItemId;
    }

    /**
     * @param ?string $returnItemKey
     */
    public function setReturnItemKey(?string $returnItemKey): void
    {
        $this->returnItemKey = $returnItemKey;
    }

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
}
