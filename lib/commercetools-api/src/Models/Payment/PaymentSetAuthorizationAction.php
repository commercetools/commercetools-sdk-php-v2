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
     * @return null|Money
     */
    public function getAmount();

    /**
     * @return null|DateTimeImmutable
     */
    public function getUntil();

    public function setAmount(?Money $amount): void;

    public function setUntil(?DateTimeImmutable $until): void;
}
