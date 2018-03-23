<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Common\Money;

interface CartRemoveLineItemAction extends CartUpdateAction {
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_EXTERNAL_PRICE = 'externalPrice';
    const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return Money
     */
    public function getExternalPrice();

    /**
     * @return ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param Money $externalPrice
     * @return $this
     */
    public function setExternalPrice(Money $externalPrice);

    /**
     * @param ExternalLineItemTotalPrice $externalTotalPrice
     * @return $this
     */
    public function setExternalTotalPrice(ExternalLineItemTotalPrice $externalTotalPrice);

}
