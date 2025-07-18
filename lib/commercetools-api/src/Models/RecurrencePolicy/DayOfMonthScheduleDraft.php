<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DayOfMonthScheduleDraft extends RecurrencePolicyScheduleDraft
{
    public const FIELD_DAY = 'day';

    /**
     * <p>The day of the month when the <a href="ctp:api:type:RecurringOrder">Recurring Order</a> should be created.
     * If the value is greater than the number of days in a given month, the order will be created on the last day of the month.</p>
     *

     * @return null|int
     */
    public function getDay();

    /**
     * @param ?int $day
     */
    public function setDay(?int $day): void;
}
