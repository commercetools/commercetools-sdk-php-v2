<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\MoneyCollection;

interface CartDiscountValueAbsoluteDraft extends CartDiscountValueDraft
{
    const FIELD_MONEY = 'money';

    /**
     * @return null|MoneyCollection
     */
    public function getMoney();

    public function setMoney(?MoneyCollection $money): void;
}
