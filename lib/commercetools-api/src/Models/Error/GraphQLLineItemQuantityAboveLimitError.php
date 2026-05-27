<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLLineItemQuantityAboveLimitError extends GraphQLErrorObject
{
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_MAX_CART_QUANTITY = 'maxCartQuantity';
    public const FIELD_LINE_ITEM = 'lineItem';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>The quantity that was requested.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>The maximum quantity allowed for this Line Item.</p>
     *

     * @return null|int
     */
    public function getMaxCartQuantity();

    /**
     * <p>Reference to the Line Item that caused the error.</p>
     *

     * @return null|string
     */
    public function getLineItem();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?int $maxCartQuantity
     */
    public function setMaxCartQuantity(?int $maxCartQuantity): void;

    /**
     * @param ?string $lineItem
     */
    public function setLineItem(?string $lineItem): void;
}
