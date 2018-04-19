<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Common\Money;

interface CartSetLineItemPriceAction extends CartUpdateAction
{
    const FIELD_EXTERNAL_PRICE = 'externalPrice';
    const FIELD_LINE_ITEM_ID = 'lineItemId';

    /**
     * @return Money
     */
    public function getExternalPrice();

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @param Money $externalPrice
     * @return $this
     */
    public function setExternalPrice(Money $externalPrice);

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

}
