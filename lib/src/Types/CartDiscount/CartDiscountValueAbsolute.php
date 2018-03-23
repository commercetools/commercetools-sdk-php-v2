<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\Common\MoneyCollection;
use Commercetools\Types\Common\Money;

interface CartDiscountValueAbsolute extends CartDiscountValue {
    const FIELD_MONEY = 'money';

    /**
     * @return MoneyCollection
     */
    public function getMoney();

    /**
     * @param MoneyCollection $money
     * @return $this
     */
    public function setMoney(MoneyCollection $money);

}
