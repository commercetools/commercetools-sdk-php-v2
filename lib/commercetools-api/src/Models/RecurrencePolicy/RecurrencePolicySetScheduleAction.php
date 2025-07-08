<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurrencePolicySetScheduleAction extends RecurrencePolicyUpdateAction
{
    public const FIELD_SCHEDULE = 'schedule';

    /**
     * <p>Schedule where the recurrence is defined.</p>
     *

     * @return null|RecurrencePolicyScheduleDraft
     */
    public function getSchedule();

    /**
     * @param ?RecurrencePolicyScheduleDraft $schedule
     */
    public function setSchedule(?RecurrencePolicyScheduleDraft $schedule): void;
}
