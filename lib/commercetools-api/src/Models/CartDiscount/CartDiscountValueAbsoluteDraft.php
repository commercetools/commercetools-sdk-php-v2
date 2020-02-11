<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\MoneyCollection;

interface CartDiscountValueAbsoluteDraft extends CartDiscountValueDraft
{

    public const FIELD_MONEY = 'money';

    /**
     * @return null|MoneyCollection
     */
    public function getMoney();

    public function setMoney(?MoneyCollection $money): void;
}
