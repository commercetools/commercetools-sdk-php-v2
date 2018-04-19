<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Common\Money;

interface CartChangeCustomLineItemMoneyAction extends CartUpdateAction
{
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_MONEY = 'money';

    /**
     * @return string
     */
    public function getCustomLineItemId();

    /**
     * @return Money
     */
    public function getMoney();

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId);

    /**
     * @param Money $money
     * @return $this
     */
    public function setMoney(Money $money);

}
