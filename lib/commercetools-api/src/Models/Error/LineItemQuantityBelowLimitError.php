<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface LineItemQuantityBelowLimitError extends ErrorObject
{
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_MIN_CART_QUANTITY = 'minCartQuantity';
    public const FIELD_LINE_ITEM = 'lineItem';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Quantity '$quantity' less than minimum '$minCartQuantity'.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>The quantity that was requested.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>The minimum quantity required for this Line Item.</p>
     *

     * @return null|int
     */
    public function getMinCartQuantity();

    /**
     * <p>Reference to the Line Item that caused the error.</p>
     *

     * @return null|string
     */
    public function getLineItem();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?int $minCartQuantity
     */
    public function setMinCartQuantity(?int $minCartQuantity): void;

    /**
     * @param ?string $lineItem
     */
    public function setLineItem(?string $lineItem): void;
}
