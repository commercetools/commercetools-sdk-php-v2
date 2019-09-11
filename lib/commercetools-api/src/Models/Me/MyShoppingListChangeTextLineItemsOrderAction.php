<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

interface MyShoppingListChangeTextLineItemsOrderAction extends MyShoppingListUpdateAction
{
    const FIELD_TEXT_LINE_ITEM_ORDER = 'textLineItemOrder';

    /**
     * @return null|array
     */
    public function getTextLineItemOrder();

    public function setTextLineItemOrder(?array $textLineItemOrder): void;
}
