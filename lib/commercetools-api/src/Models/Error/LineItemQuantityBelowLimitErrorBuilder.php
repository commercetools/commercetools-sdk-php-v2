<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<LineItemQuantityBelowLimitError>
 */
final class LineItemQuantityBelowLimitErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var ?int
     */
    private $minCartQuantity;

    /**

     * @var ?string
     */
    private $lineItem;

    /**
     * <p><code>&quot;Quantity '$quantity' less than minimum '$minCartQuantity'.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The quantity that was requested.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>The minimum quantity required for this Line Item.</p>
     *

     * @return null|int
     */
    public function getMinCartQuantity()
    {
        return $this->minCartQuantity;
    }

    /**
     * <p>Reference to the Line Item that caused the error.</p>
     *

     * @return null|string
     */
    public function getLineItem()
    {
        return $this->lineItem;
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
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?int $minCartQuantity
     * @return $this
     */
    public function withMinCartQuantity(?int $minCartQuantity)
    {
        $this->minCartQuantity = $minCartQuantity;

        return $this;
    }

    /**
     * @param ?string $lineItem
     * @return $this
     */
    public function withLineItem(?string $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }


    public function build(): LineItemQuantityBelowLimitError
    {
        return new LineItemQuantityBelowLimitErrorModel(
            $this->message,
            $this->quantity,
            $this->minCartQuantity,
            $this->lineItem
        );
    }

    public static function of(): LineItemQuantityBelowLimitErrorBuilder
    {
        return new self();
    }
}
