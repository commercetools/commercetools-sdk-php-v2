<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomLineItemQuantityChangedMessage extends OrderMessage
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_OLD_QUANTITY = 'oldQuantity';

    /**

     * @return null|string
     */
    public function getCustomLineItemId();

    /**

     * @return null|int
     */
    public function getQuantity();

    /**

     * @return null|int
     */
    public function getOldQuantity();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?int $oldQuantity
     */
    public function setOldQuantity(?int $oldQuantity): void;
}
