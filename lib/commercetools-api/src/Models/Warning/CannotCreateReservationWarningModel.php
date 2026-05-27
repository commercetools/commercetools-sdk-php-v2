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
final class CannotCreateReservationWarningModel extends JsonObjectModel implements CannotCreateReservationWarning
{
    public const DISCRIMINATOR_VALUE = 'CannotCreateReservation';
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
     *
     * @var ?float
     */
    protected $quantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $productId = null,
        ?string $sku = null,
        ?string $supplyChannel = null,
        ?float $quantity = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->productId = $productId;
        $this->sku = $sku;
        $this->supplyChannel = $supplyChannel;
        $this->quantity = $quantity;
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
     * <p><code>&quot;Failed to create a reservation for product $productId (SKU: $sku, Supply Channel: $supplyChannel) with quantity $quantity.&quot;</code></p>
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
     * <p>The ID of the Product for which the reservation could not be created.</p>
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
     * <p>The SKU of the Product Variant for which the reservation could not be created.</p>
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
     * <p>The ID of the Supply Channel for which the reservation could not be created.</p>
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
     * <p>The quantity for which the reservation could not be created.</p>
     *
     *
     * @return null|float
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (float) $data;
        }

        return $this->quantity;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
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

    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }
}
