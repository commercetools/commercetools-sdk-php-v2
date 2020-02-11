<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListRemoveTextLineItemAction extends MyShoppingListUpdateAction
{
    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * @return null|int
     */
    public function getQuantity();

    public function setTextLineItemId(?string $textLineItemId): void;

    public function setQuantity(?int $quantity): void;
}
