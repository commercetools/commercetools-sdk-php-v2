<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicySchedule;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyScheduleBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderScheduleSetMessagePayload>
 */
final class RecurringOrderScheduleSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|RecurrencePolicySchedule|RecurrencePolicyScheduleBuilder
     */
    private $recurrencePolicySchedule;

    /**

     * @var null|RecurrencePolicySchedule|RecurrencePolicyScheduleBuilder
     */
    private $oldRecurrencePolicySchedule;

    /**
     * <p><a href="ctp:api:type:RecurrencePolicySchedule">Schedule</a> of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetScheduleAction">Set Schedule</a> update action.</p>
     *

     * @return null|RecurrencePolicySchedule
     */
    public function getRecurrencePolicySchedule()
    {
        return $this->recurrencePolicySchedule instanceof RecurrencePolicyScheduleBuilder ? $this->recurrencePolicySchedule->build() : $this->recurrencePolicySchedule;
    }

    /**
     * <p><a href="ctp:api:type:RecurrencePolicySchedule">Schedule</a> of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetScheduleAction">Set Schedule</a> update action.</p>
     *

     * @return null|RecurrencePolicySchedule
     */
    public function getOldRecurrencePolicySchedule()
    {
        return $this->oldRecurrencePolicySchedule instanceof RecurrencePolicyScheduleBuilder ? $this->oldRecurrencePolicySchedule->build() : $this->oldRecurrencePolicySchedule;
    }

    /**
     * @param ?RecurrencePolicySchedule $recurrencePolicySchedule
     * @return $this
     */
    public function withRecurrencePolicySchedule(?RecurrencePolicySchedule $recurrencePolicySchedule)
    {
        $this->recurrencePolicySchedule = $recurrencePolicySchedule;

        return $this;
    }

    /**
     * @param ?RecurrencePolicySchedule $oldRecurrencePolicySchedule
     * @return $this
     */
    public function withOldRecurrencePolicySchedule(?RecurrencePolicySchedule $oldRecurrencePolicySchedule)
    {
        $this->oldRecurrencePolicySchedule = $oldRecurrencePolicySchedule;

        return $this;
    }

    /**
     * @deprecated use withRecurrencePolicySchedule() instead
     * @return $this
     */
    public function withRecurrencePolicyScheduleBuilder(?RecurrencePolicyScheduleBuilder $recurrencePolicySchedule)
    {
        $this->recurrencePolicySchedule = $recurrencePolicySchedule;

        return $this;
    }

    /**
     * @deprecated use withOldRecurrencePolicySchedule() instead
     * @return $this
     */
    public function withOldRecurrencePolicyScheduleBuilder(?RecurrencePolicyScheduleBuilder $oldRecurrencePolicySchedule)
    {
        $this->oldRecurrencePolicySchedule = $oldRecurrencePolicySchedule;

        return $this;
    }

    public function build(): RecurringOrderScheduleSetMessagePayload
    {
        return new RecurringOrderScheduleSetMessagePayloadModel(
            $this->recurrencePolicySchedule instanceof RecurrencePolicyScheduleBuilder ? $this->recurrencePolicySchedule->build() : $this->recurrencePolicySchedule,
            $this->oldRecurrencePolicySchedule instanceof RecurrencePolicyScheduleBuilder ? $this->oldRecurrencePolicySchedule->build() : $this->oldRecurrencePolicySchedule
        );
    }

    public static function of(): RecurringOrderScheduleSetMessagePayloadBuilder
    {
        return new self();
    }
}
