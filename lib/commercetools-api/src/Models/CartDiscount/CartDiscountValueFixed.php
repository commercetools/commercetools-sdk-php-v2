<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\TypedMoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueFixed extends CartDiscountValue
{
    public const FIELD_MONEY = 'money';

    /**
     * <p>Money values in <a href="ctp:api:type:CentPrecisionMoney">cent precision</a> or <a href="ctp:api:type:HighPrecisionMoney">high precision</a> of different currencies.</p>
     *

     * @return null|TypedMoneyCollection
     */
    public function getMoney();

    /**
     * @param ?TypedMoneyCollection $money
     */
    public function setMoney(?TypedMoneyCollection $money): void;
}
