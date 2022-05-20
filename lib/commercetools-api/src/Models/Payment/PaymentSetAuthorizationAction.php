<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface PaymentSetAuthorizationAction extends PaymentUpdateAction
{
    public const FIELD_AMOUNT = 'amount';
    public const FIELD_UNTIL = 'until';

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getAmount();

    /**
     * @return null|DateTimeImmutable
     */
    public function getUntil();

    /**
     * @param ?Money $amount
     */
    public function setAmount(?Money $amount): void;

    /**
     * @param ?DateTimeImmutable $until
     */
    public function setUntil(?DateTimeImmutable $until): void;
}
