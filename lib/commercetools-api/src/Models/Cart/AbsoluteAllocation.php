<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\HighPrecisionMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AbsoluteAllocation extends Allocation
{
    public const FIELD_AMOUNT = 'amount';

    /**
     * <p>Amount of the Order total allocated to the Payment Method.</p>
     *

     * @return null|HighPrecisionMoney
     */
    public function getAmount();

    /**
     * @param ?HighPrecisionMoney $amount
     */
    public function setAmount(?HighPrecisionMoney $amount): void;
}
