<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

class ShoppingListRemoveTextLineItemActionModel extends ShoppingListUpdateActionModel implements ShoppingListRemoveTextLineItemAction {
    const DISCRIMINATOR_VALUE = 'removeTextLineItem';

    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var string
     */
    protected $textLineItemId;

    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(ShoppingListRemoveTextLineItemAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return string
     */
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            $value = $this->raw(ShoppingListRemoveTextLineItemAction::FIELD_TEXT_LINE_ITEM_ID);
            $value = (string)$value;
            $this->textLineItemId = $value;
        }
        return $this->textLineItemId;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param string $textLineItemId
     * @return $this
     */
    public function setTextLineItemId(string $textLineItemId)
    {
        $this->textLineItemId = (string)$textLineItemId;

        return $this;
    }

}
