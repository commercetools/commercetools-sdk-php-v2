<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

interface MyShoppingListChangeLineItemsOrderAction extends MyShoppingListUpdateAction
{
    const FIELD_LINE_ITEM_ORDER = 'lineItemOrder';

    /**
     * @return null|array
     */
    public function getLineItemOrder();

    public function setLineItemOrder(?array $lineItemOrder): void;
}
