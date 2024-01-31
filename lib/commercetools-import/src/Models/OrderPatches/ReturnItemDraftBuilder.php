<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReturnItemDraft>
 */
final class ReturnItemDraftBuilder implements Builder
{
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
    private $customLineItemId;

    /**

     * @var ?string
     */
    private $comment;

    /**

     * @var ?string
     */
    private $shipmentState;

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
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**

     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * <p>Maps to <code>ReturnItem.shipmentState</code></p>
     *

     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @param ?string $comment
     * @return $this
     */
    public function withComment(?string $comment)
    {
        $this->comment = $comment;

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


    public function build(): ReturnItemDraft
    {
        return new ReturnItemDraftModel(
            $this->quantity,
            $this->lineItemId,
            $this->customLineItemId,
            $this->comment,
            $this->shipmentState
        );
    }

    public static function of(): ReturnItemDraftBuilder
    {
        return new self();
    }
}
