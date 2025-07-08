<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicySchedule;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderScheduleSetMessage extends Message
{
    public const FIELD_RECURRENCE_POLICY_SCHEDULE = 'recurrencePolicySchedule';
    public const FIELD_OLD_RECURRENCE_POLICY_SCHEDULE = 'oldRecurrencePolicySchedule';

    /**
     * <p><a href="ctp:api:type:RecurrencePolicySchedule">Schedule</a> of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetScheduleAction">Set Schedule</a> update action.</p>
     *

     * @return null|RecurrencePolicySchedule
     */
    public function getRecurrencePolicySchedule();

    /**
     * <p><a href="ctp:api:type:RecurrencePolicySchedule">Schedule</a> of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetScheduleAction">Set Schedule</a> update action.</p>
     *

     * @return null|RecurrencePolicySchedule
     */
    public function getOldRecurrencePolicySchedule();

    /**
     * @param ?RecurrencePolicySchedule $recurrencePolicySchedule
     */
    public function setRecurrencePolicySchedule(?RecurrencePolicySchedule $recurrencePolicySchedule): void;

    /**
     * @param ?RecurrencePolicySchedule $oldRecurrencePolicySchedule
     */
    public function setOldRecurrencePolicySchedule(?RecurrencePolicySchedule $oldRecurrencePolicySchedule): void;
}
