<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyPaymentChangeAmountPlannedAction extends MyPaymentUpdateAction
{
    public const FIELD_AMOUNT = 'amount';

    /**
     * <p>New value to set.</p>
     *

     * @return null|Money
     */
    public function getAmount();

    /**
     * @param ?Money $amount
     */
    public function setAmount(?Money $amount): void;
}
