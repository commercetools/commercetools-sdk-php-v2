<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueFixedDraft extends CartDiscountValueDraft
{
    public const FIELD_MONEY = 'money';

    /**
     * <p>Money values provided either in <a href="ctp:api:type:Money">cent precision</a> or <a href="ctp:api:type:HighPrecisionMoneyDraft">high precision</a> for different currencies.
     * A fixed Cart Discount will only match a price if this array contains a value with the same currency. If it contains 10€ and 15$, the matching € price will be discounted by 10€ and the matching $ price will be discounted to 15$.</p>
     *

     * @return null|MoneyCollection
     */
    public function getMoney();

    /**
     * @param ?MoneyCollection $money
     */
    public function setMoney(?MoneyCollection $money): void;
}
