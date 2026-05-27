<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CannotUpdateReservationWarning>
 */
final class CannotUpdateReservationWarningBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?float
     */
    private $requestedQuantity;

    /**

     * @var ?float
     */
    private $reservedQuantity;

    /**

     * @var ?string
     */
    private $productId;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?string
     */
    private $supplyChannel;

    /**
     * <p><code>&quot;Failed to update the reservation for line item $lineItemId (Product ID: $productId, SKU: $sku, Supply Channel: $supplyChannel) to a quantity of $requestedQuantity. The reserved amount is still $reservedQuantity.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The ID of the Line Item.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>The quantity that was requested for the Line Item.</p>
     *

     * @return null|float
     */
    public function getRequestedQuantity()
    {
        return $this->requestedQuantity;
    }

    /**
     * <p>The quantity that remains reserved for the Line Item.</p>
     *

     * @return null|float
     */
    public function getReservedQuantity()
    {
        return $this->reservedQuantity;
    }

    /**
     * <p>The ID of the Product associated with the Line Item.</p>
     *

     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * <p>The SKU of the Product Variant associated with the Line Item.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The ID of the Supply Channel associated with the reservation.</p>
     *

     * @return null|string
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

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
     * @param ?float $requestedQuantity
     * @return $this
     */
    public function withRequestedQuantity(?float $requestedQuantity)
    {
        $this->requestedQuantity = $requestedQuantity;

        return $this;
    }

    /**
     * @param ?float $reservedQuantity
     * @return $this
     */
    public function withReservedQuantity(?float $reservedQuantity)
    {
        $this->reservedQuantity = $reservedQuantity;

        return $this;
    }

    /**
     * @param ?string $productId
     * @return $this
     */
    public function withProductId(?string $productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?string $supplyChannel
     * @return $this
     */
    public function withSupplyChannel(?string $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }


    public function build(): CannotUpdateReservationWarning
    {
        return new CannotUpdateReservationWarningModel(
            $this->message,
            $this->lineItemId,
            $this->requestedQuantity,
            $this->reservedQuantity,
            $this->productId,
            $this->sku,
            $this->supplyChannel
        );
    }

    public static function of(): CannotUpdateReservationWarningBuilder
    {
        return new self();
    }
}
