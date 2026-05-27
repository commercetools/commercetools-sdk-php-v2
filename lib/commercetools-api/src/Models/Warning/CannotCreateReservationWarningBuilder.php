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
 * @implements Builder<CannotCreateReservationWarning>
 */
final class CannotCreateReservationWarningBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

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

     * @var ?float
     */
    private $quantity;

    /**
     * <p><code>&quot;Failed to create a reservation for product $productId (SKU: $sku, Supply Channel: $supplyChannel) with quantity $quantity.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The ID of the Product for which the reservation could not be created.</p>
     *

     * @return null|string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * <p>The SKU of the Product Variant for which the reservation could not be created.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The ID of the Supply Channel for which the reservation could not be created.</p>
     *

     * @return null|string
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel;
    }

    /**
     * <p>The quantity for which the reservation could not be created.</p>
     *

     * @return null|float
     */
    public function getQuantity()
    {
        return $this->quantity;
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

    /**
     * @param ?float $quantity
     * @return $this
     */
    public function withQuantity(?float $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


    public function build(): CannotCreateReservationWarning
    {
        return new CannotCreateReservationWarningModel(
            $this->message,
            $this->productId,
            $this->sku,
            $this->supplyChannel,
            $this->quantity
        );
    }

    public static function of(): CannotCreateReservationWarningBuilder
    {
        return new self();
    }
}
