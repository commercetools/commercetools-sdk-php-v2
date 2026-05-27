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
final class GraphQLLineItemQuantityAboveLimitErrorModel extends JsonObjectModel implements GraphQLLineItemQuantityAboveLimitError
{
    public const DISCRIMINATOR_VALUE = 'LineItemQuantityAboveLimit';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?int
     */
    protected $maxCartQuantity;

    /**
     *
     * @var ?string
     */
    protected $lineItem;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $quantity = null,
        ?int $maxCartQuantity = null,
        ?string $lineItem = null,
        ?string $code = null
    ) {
        $this->quantity = $quantity;
        $this->maxCartQuantity = $maxCartQuantity;
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
     * <p>The maximum quantity allowed for this Line Item.</p>
     *
     *
     * @return null|int
     */
    public function getMaxCartQuantity()
    {
        if (is_null($this->maxCartQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MAX_CART_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->maxCartQuantity = (int) $data;
        }

        return $this->maxCartQuantity;
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
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?int $maxCartQuantity
     */
    public function setMaxCartQuantity(?int $maxCartQuantity): void
    {
        $this->maxCartQuantity = $maxCartQuantity;
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
