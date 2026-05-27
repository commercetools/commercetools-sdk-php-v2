<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class LineItemQuantityBelowLimitErrorModel extends JsonObjectModel implements LineItemQuantityBelowLimitError
{
    public const DISCRIMINATOR_VALUE = 'LineItemQuantityBelowLimit';
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
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?int
     */
    protected $minCartQuantity;

    /**
     *
     * @var ?string
     */
    protected $lineItem;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?int $quantity = null,
        ?int $minCartQuantity = null,
        ?string $lineItem = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->quantity = $quantity;
        $this->minCartQuantity = $minCartQuantity;
        $this->lineItem = $lineItem;
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
     * <p><code>&quot;Quantity '$quantity' less than minimum '$minCartQuantity'.&quot;</code></p>
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
     * <p>The quantity that was requested.</p>
     *
     *
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * <p>The minimum quantity required for this Line Item.</p>
     *
     *
     * @return null|int
     */
    public function getMinCartQuantity()
    {
        if (is_null($this->minCartQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MIN_CART_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->minCartQuantity = (int) $data;
        }

        return $this->minCartQuantity;
    }

    /**
     * <p>Reference to the Line Item that caused the error.</p>
     *
     *
     * @return null|string
     */
    public function getLineItem()
    {
        if (is_null($this->lineItem)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM);
            if (is_null($data)) {
                return null;
            }
            $this->lineItem = (string) $data;
        }

        return $this->lineItem;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?int $minCartQuantity
     */
    public function setMinCartQuantity(?int $minCartQuantity): void
    {
        $this->minCartQuantity = $minCartQuantity;
    }

    /**
     * @param ?string $lineItem
     */
    public function setLineItem(?string $lineItem): void
    {
        $this->lineItem = $lineItem;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
