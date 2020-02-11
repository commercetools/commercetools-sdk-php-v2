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


final class ReturnItemDraftModel extends JsonObjectModel implements ReturnItemDraft
{

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?string
     */
    protected $customLineItemId;

    /**
     * @var ?string
     */
    protected $comment;

    /**
     * @var ?string
     */
    protected $shipmentState;


    public function __construct(
        int $quantity = null,
        string $lineItemId = null,
        string $customLineItemId = null,
        string $comment = null,
        string $shipmentState = null
    ) {
        $this->quantity = $quantity;
        $this->lineItemId = $lineItemId;
        $this->customLineItemId = $customLineItemId;
        $this->comment = $comment;
        $this->shipmentState = $shipmentState;

    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReturnItemDraft::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItemDraft::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItemDraft::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * @return null|string
     */
    public function getComment()
    {
        if (is_null($this->comment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItemDraft::FIELD_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->comment = (string) $data;
        }

        return $this->comment;
    }

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItemDraft::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }



}
