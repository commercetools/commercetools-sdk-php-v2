<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartChangeCustomLineItemQuantityActionModel extends CartUpdateActionModel implements CartChangeCustomLineItemQuantityAction
{
    const DISCRIMINATOR_VALUE = 'changeCustomLineItemQuantity';

    /**
     * @var string
     */
    protected $customLineItemId;
    /**
     * @var int
     */
    protected $quantity;

    /**
     * @return string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            $value = $this->raw(CartChangeCustomLineItemQuantityAction::FIELD_CUSTOM_LINE_ITEM_ID);
            $value = (string)$value;
            $this->customLineItemId = $value;
        }
        return $this->customLineItemId;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(CartChangeCustomLineItemQuantityAction::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId)
    {
        $this->customLineItemId = (string)$customLineItemId;

        return $this;
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

}
