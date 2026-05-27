<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CannotUpdateReservationWarningModel extends JsonObjectModel implements CannotUpdateReservationWarning
{
    public const DISCRIMINATOR_VALUE = 'CannotUpdateReservation';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @var ?float
     */
    protected $requestedQuantity;

    /**
     *
     * @var ?float
     */
    protected $reservedQuantity;

    /**
     *
     * @var ?string
     */
    protected $productId;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?string
     */
    protected $supplyChannel;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $lineItemId = null,
        ?float $requestedQuantity = null,
        ?float $reservedQuantity = null,
        ?string $productId = null,
        ?string $sku = null,
        ?string $supplyChannel = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->lineItemId = $lineItemId;
        $this->requestedQuantity = $requestedQuantity;
        $this->reservedQuantity = $reservedQuantity;
        $this->productId = $productId;
        $this->sku = $sku;
        $this->supplyChannel = $supplyChannel;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p><code>&quot;Failed to update the reservation for line item $lineItemId (Product ID: $productId, SKU: $sku, Supply Channel: $supplyChannel) to a quantity of $requestedQuantity. The reserved amount is still $reservedQuantity.&quot;</code></p>
     *
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>The ID of the Line Item.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * <p>The quantity that was requested for the Line Item.</p>
     *
     *
     * @return null|float
     */
    public function getRequestedQuantity()
    {
        if (is_null($this->requestedQuantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_REQUESTED_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->requestedQuantity = (float) $data;
        }

        return $this->requestedQuantity;
    }

    /**
     * <p>The quantity that remains reserved for the Line Item.</p>
     *
     *
     * @return null|float
     */
    public function getReservedQuantity()
    {
        if (is_null($this->reservedQuantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_RESERVED_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->reservedQuantity = (float) $data;
        }

        return $this->reservedQuantity;
    }

    /**
     * <p>The ID of the Product associated with the Line Item.</p>
     *
     *
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * <p>The SKU of the Product Variant associated with the Line Item.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>The ID of the Supply Channel associated with the reservation.</p>
     *
     *
     * @return null|string
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }
            $this->supplyChannel = (string) $data;
        }

        return $this->supplyChannel;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?float $requestedQuantity
     */
    public function setRequestedQuantity(?float $requestedQuantity): void
    {
        $this->requestedQuantity = $requestedQuantity;
    }

    /**
     * @param ?float $reservedQuantity
     */
    public function setReservedQuantity(?float $reservedQuantity): void
    {
        $this->reservedQuantity = $reservedQuantity;
    }

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?string $supplyChannel
     */
    public function setSupplyChannel(?string $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
}
