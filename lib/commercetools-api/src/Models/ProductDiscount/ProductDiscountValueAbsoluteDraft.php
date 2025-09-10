<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDiscountValueAbsoluteDraft extends ProductDiscountValueDraft
{
    public const FIELD_MONEY = 'money';

    /**
     * <p>Money values in different currencies.
     * An absolute Product Discount will match a price only if the array contains a value with the same currency. For example, if it contains 10€ and 15$, the matching € price will be decreased by 10€ and the matching $ price will be decreased by 15$.</p>
     * <p>If the value exceeds the price of a Product Variant, the discounted price (of the Product Variant) will be a negative value.</p>
     * <p>If the array is empty or has multiple values of the same currency, the API returns an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error.</p>
     *

     * @return null|MoneyCollection
     */
    public function getMoney();

    /**
     * @param ?MoneyCollection $money
     */
    public function setMoney(?MoneyCollection $money): void;
}
