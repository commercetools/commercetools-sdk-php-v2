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
 * @implements Builder<LineItemQuantityAboveLimitError>
 */
final class LineItemQuantityAboveLimitErrorBuilder implements Builder
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
    private $maxCartQuantity;

    /**

     * @var ?string
     */
    private $lineItem;

    /**
     * <p><code>&quot;Quantity '$quantity' greater than maximum '$maxCartQuantity'.&quot;</code></p>
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
     * <p>The maximum quantity allowed for this Line Item.</p>
     *

     * @return null|int
     */
    public function getMaxCartQuantity()
    {
        return $this->maxCartQuantity;
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
     * @param ?int $maxCartQuantity
     * @return $this
     */
    public function withMaxCartQuantity(?int $maxCartQuantity)
    {
        $this->maxCartQuantity = $maxCartQuantity;

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


    public function build(): LineItemQuantityAboveLimitError
    {
        return new LineItemQuantityAboveLimitErrorModel(
            $this->message,
            $this->quantity,
            $this->maxCartQuantity,
            $this->lineItem
        );
    }

    public static function of(): LineItemQuantityAboveLimitErrorBuilder
    {
        return new self();
    }
}
