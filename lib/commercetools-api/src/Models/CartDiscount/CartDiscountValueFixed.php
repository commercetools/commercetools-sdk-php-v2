<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\CentPrecisionMoneyCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueFixed extends CartDiscountValue
{
    public const FIELD_MONEY = 'money';

    /**
     * <p>Cent precision money values in different currencies.</p>
     *

     * @return null|CentPrecisionMoneyCollection
     */
    public function getMoney();

    /**
     * @param ?CentPrecisionMoneyCollection $money
     */
    public function setMoney(?CentPrecisionMoneyCollection $money): void;
}
