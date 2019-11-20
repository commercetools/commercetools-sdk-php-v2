<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReturnItemDraft>
 */
final class ReturnItemDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $shipmentState;

    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var ?int
     */
    private $quantity;

    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var ?string
     */
    private $comment;

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
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
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
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withComment(?string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    public function build(): ReturnItemDraft
    {
        return new ReturnItemDraftModel(
            $this->shipmentState,
            $this->customLineItemId,
            $this->quantity,
            $this->lineItemId,
            $this->comment
        );
    }

    public static function of(): ReturnItemDraftBuilder
    {
        return new self();
    }
}
