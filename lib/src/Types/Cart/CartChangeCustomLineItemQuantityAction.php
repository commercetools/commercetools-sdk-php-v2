<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartChangeCustomLineItemQuantityAction extends CartUpdateAction
{
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_QUANTITY = 'quantity';

    /**
     * @return string
     */
    public function getCustomLineItemId();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

}
