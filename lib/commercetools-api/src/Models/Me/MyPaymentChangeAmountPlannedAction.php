<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Money;

interface MyPaymentChangeAmountPlannedAction extends MyPaymentUpdateAction
{

    public const FIELD_AMOUNT = 'amount';

    /**
     * @return null|Money
     */
    public function getAmount();

    public function setAmount(?Money $amount): void;
}
