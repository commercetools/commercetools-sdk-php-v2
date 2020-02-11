<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartChangeCustomLineItemQuantityAction extends CartUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|int
     */
    public function getQuantity();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setQuantity(?int $quantity): void;
}
