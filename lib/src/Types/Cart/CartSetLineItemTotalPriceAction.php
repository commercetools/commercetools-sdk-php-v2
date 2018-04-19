<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetLineItemTotalPriceAction extends CartUpdateAction
{
    const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';
    const FIELD_LINE_ITEM_ID = 'lineItemId';

    /**
     * @return ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice();

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @param ExternalLineItemTotalPrice $externalTotalPrice
     * @return $this
     */
    public function setExternalTotalPrice(ExternalLineItemTotalPrice $externalTotalPrice);

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

}
