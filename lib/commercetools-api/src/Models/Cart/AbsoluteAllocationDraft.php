<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\HighPrecisionMoneyDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AbsoluteAllocationDraft extends AllocationDraft
{
    public const FIELD_AMOUNT = 'amount';

    /**
     * <p>Amount of the Order total allocated to the Payment Method.</p>
     *

     * @return null|HighPrecisionMoneyDraft
     */
    public function getAmount();

    /**
     * @param ?HighPrecisionMoneyDraft $amount
     */
    public function setAmount(?HighPrecisionMoneyDraft $amount): void;
}
