<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\TypedMoneyCollection;

interface CartDiscountValueAbsolute extends CartDiscountValue
{

    public const FIELD_MONEY = 'money';

    /**
     * @return null|TypedMoneyCollection
     */
    public function getMoney();

    public function setMoney(?TypedMoneyCollection $money): void;
}
