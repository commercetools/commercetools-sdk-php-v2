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
    public const FIELD_APPLICATION_MODE = 'applicationMode';

    /**
     * <p>Money values provided either in <a href="ctp:api:type:Money">cent precision</a> or <a href="ctp:api:type:HighPrecisionMoneyDraft">high precision</a> for different currencies.
     * A fixed Cart Discount will match a price only if the array contains a value with the same currency. For example, if it contains 10€ and 15$, the matching € price will be discounted by 10€ and the matching $ price will be discounted to 15$.</p>
     * <p>If the array is empty or has multiple values of the same currency, the API returns an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error.</p>
     *

     * @return null|MoneyCollection
     */
    public function getMoney();

    /**
     * <p>Determines how the discount applies on <a href="ctp:api:type:CartDiscountLineItemsTarget">CartDiscountLineItemTarget</a> or <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemTarget</a>.</p>
     * <p>For <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a>, you can also set the mode to <code>ProportionateDistribution</code> or <code>EvenDistribution</code>.</p>
     *

     * @return null|string
     */
    public function getApplicationMode();

    /**
     * @param ?MoneyCollection $money
     */
    public function setMoney(?MoneyCollection $money): void;

    /**
     * @param ?string $applicationMode
     */
    public function setApplicationMode(?string $applicationMode): void;
}
