<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

class ShoppingListChangeLineItemsOrderActionModel extends ShoppingListUpdateActionModel implements ShoppingListChangeLineItemsOrderAction {
    const DISCRIMINATOR_VALUE = 'changeLineItemsOrder';

    /**
     * @var array
     */
    protected $lineItemOrder;

    /**
     * @return array
     */
    public function getLineItemOrder()
    {
        if (is_null($this->lineItemOrder)) {
            $value = $this->raw(ShoppingListChangeLineItemsOrderAction::FIELD_LINE_ITEM_ORDER);
            $this->lineItemOrder = $value;
        }
        return $this->lineItemOrder;
    }

    /**
     * @param $lineItemOrder
     * @return $this
     */
    public function setLineItemOrder($lineItemOrder)
    {
        $this->lineItemOrder = $lineItemOrder;

        return $this;
    }

}
