<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RecurrencePolicySetScheduleActionModel extends JsonObjectModel implements RecurrencePolicySetScheduleAction
{
    public const DISCRIMINATOR_VALUE = 'setSchedule';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?RecurrencePolicyScheduleDraft
     */
    protected $schedule;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurrencePolicyScheduleDraft $schedule = null,
        ?string $action = null
    ) {
        $this->schedule = $schedule;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Schedule where the recurrence is defined.</p>
     *
     *
     * @return null|RecurrencePolicyScheduleDraft
     */
    public function getSchedule()
    {
        if (is_null($this->schedule)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SCHEDULE);
            if (is_null($data)) {
                return null;
            }
            $className = RecurrencePolicyScheduleDraftModel::resolveDiscriminatorClass($data);
            $this->schedule = $className::of($data);
        }

        return $this->schedule;
    }


    /**
     * @param ?RecurrencePolicyScheduleDraft $schedule
     */
    public function setSchedule(?RecurrencePolicyScheduleDraft $schedule): void
    {
        $this->schedule = $schedule;
    }
}
