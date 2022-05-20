<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\CentPrecisionMoneyDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDiscountValueAbsoluteDraft extends ProductDiscountValueDraft
{
    public const FIELD_MONEY = 'money';

    /**
     * <p>Money values in different currencies. An absolute <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> will only match a price if this array contains a value with the same currency. For example, if it contains 10€ and 15$, the matching € price will be decreased by 10€ and the matching $ price will be decreased by 15$.</p>
     *
     * @return null|CentPrecisionMoneyDraftCollection
     */
    public function getMoney();

    /**
     * @param ?CentPrecisionMoneyDraftCollection $money
     */
    public function setMoney(?CentPrecisionMoneyDraftCollection $money): void;
}
