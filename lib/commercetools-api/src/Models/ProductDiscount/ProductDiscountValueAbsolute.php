<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;

interface ProductDiscountValueAbsolute extends ProductDiscountValue
{
    const FIELD_MONEY = 'money';

    /**
     * @return null|TypedMoneyCollection
     */
    public function getMoney();

    public function setMoney(?TypedMoneyCollection $money): void;
}
