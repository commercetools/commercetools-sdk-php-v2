<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicySchedule;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyScheduleModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderScheduleSetMessagePayloadModel extends JsonObjectModel implements RecurringOrderScheduleSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'RecurringOrderScheduleSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?RecurrencePolicySchedule
     */
    protected $recurrencePolicySchedule;

    /**
     *
     * @var ?RecurrencePolicySchedule
     */
    protected $oldRecurrencePolicySchedule;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurrencePolicySchedule $recurrencePolicySchedule = null,
        ?RecurrencePolicySchedule $oldRecurrencePolicySchedule = null,
        ?string $type = null
    ) {
        $this->recurrencePolicySchedule = $recurrencePolicySchedule;
        $this->oldRecurrencePolicySchedule = $oldRecurrencePolicySchedule;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:RecurrencePolicySchedule">Schedule</a> of the Recurring Order after the <a href="ctp:api:type:RecurringOrderSetScheduleAction">Set Schedule</a> update action.</p>
     *
     *
     * @return null|RecurrencePolicySchedule
     */
    public function getRecurrencePolicySchedule()
    {
        if (is_null($this->recurrencePolicySchedule)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRENCE_POLICY_SCHEDULE);
            if (is_null($data)) {
                return null;
            }
            $className = RecurrencePolicyScheduleModel::resolveDiscriminatorClass($data);
            $this->recurrencePolicySchedule = $className::of($data);
        }

        return $this->recurrencePolicySchedule;
    }

    /**
     * <p><a href="ctp:api:type:RecurrencePolicySchedule">Schedule</a> of the Recurring Order before the <a href="ctp:api:type:RecurringOrderSetScheduleAction">Set Schedule</a> update action.</p>
     *
     *
     * @return null|RecurrencePolicySchedule
     */
    public function getOldRecurrencePolicySchedule()
    {
        if (is_null($this->oldRecurrencePolicySchedule)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_RECURRENCE_POLICY_SCHEDULE);
            if (is_null($data)) {
                return null;
            }
            $className = RecurrencePolicyScheduleModel::resolveDiscriminatorClass($data);
            $this->oldRecurrencePolicySchedule = $className::of($data);
        }

        return $this->oldRecurrencePolicySchedule;
    }


    /**
     * @param ?RecurrencePolicySchedule $recurrencePolicySchedule
     */
    public function setRecurrencePolicySchedule(?RecurrencePolicySchedule $recurrencePolicySchedule): void
    {
        $this->recurrencePolicySchedule = $recurrencePolicySchedule;
    }

    /**
     * @param ?RecurrencePolicySchedule $oldRecurrencePolicySchedule
     */
    public function setOldRecurrencePolicySchedule(?RecurrencePolicySchedule $oldRecurrencePolicySchedule): void
    {
        $this->oldRecurrencePolicySchedule = $oldRecurrencePolicySchedule;
    }
}
