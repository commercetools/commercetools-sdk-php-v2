<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

class ShoppingListChangeTextLineItemsOrderActionModel extends ShoppingListUpdateActionModel implements ShoppingListChangeTextLineItemsOrderAction {
    const DISCRIMINATOR_VALUE = 'changeTextLineItemsOrder';

    /**
     * @var array
     */
    protected $textLineItemOrder;

    /**
     * @return array
     */
    public function getTextLineItemOrder()
    {
        if (is_null($this->textLineItemOrder)) {
            $value = $this->raw(ShoppingListChangeTextLineItemsOrderAction::FIELD_TEXT_LINE_ITEM_ORDER);
            $value = (array)$value;
            $this->textLineItemOrder = $value;
        }
        return $this->textLineItemOrder;
    }

    /**
     * @param $textLineItemOrder
     * @return $this
     */
    public function setTextLineItemOrder($textLineItemOrder)
    {
        $this->textLineItemOrder = $textLineItemOrder;

        return $this;
    }

}
