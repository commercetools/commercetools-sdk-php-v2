<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface RecurringOrderStartsAtSetMessagePayload extends MessagePayload
{
    public const FIELD_STARTS_AT = 'startsAt';
    public const FIELD_OLD_STARTS_AT = 'oldStartsAt';

    /**
     * <p>Start date and time of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetStartsAtAction">Set Starts At</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartsAt();

    /**
     * <p>Start date and time of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetStartsAtAction">Set Starts At</a> update action.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getOldStartsAt();

    /**
     * @param ?DateTimeImmutable $startsAt
     */
    public function setStartsAt(?DateTimeImmutable $startsAt): void;

    /**
     * @param ?DateTimeImmutable $oldStartsAt
     */
    public function setOldStartsAt(?DateTimeImmutable $oldStartsAt): void;
}
