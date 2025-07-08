<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurrencePolicySetScheduleAction>
 */
final class RecurrencePolicySetScheduleActionBuilder implements Builder
{
    /**

     * @var null|RecurrencePolicyScheduleDraft|RecurrencePolicyScheduleDraftBuilder
     */
    private $schedule;

    /**
     * <p>Schedule where the recurrence is defined.</p>
     *

     * @return null|RecurrencePolicyScheduleDraft
     */
    public function getSchedule()
    {
        return $this->schedule instanceof RecurrencePolicyScheduleDraftBuilder ? $this->schedule->build() : $this->schedule;
    }

    /**
     * @param ?RecurrencePolicyScheduleDraft $schedule
     * @return $this
     */
    public function withSchedule(?RecurrencePolicyScheduleDraft $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * @deprecated use withSchedule() instead
     * @return $this
     */
    public function withScheduleBuilder(?RecurrencePolicyScheduleDraftBuilder $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    public function build(): RecurrencePolicySetScheduleAction
    {
        return new RecurrencePolicySetScheduleActionModel(
            $this->schedule instanceof RecurrencePolicyScheduleDraftBuilder ? $this->schedule->build() : $this->schedule
        );
    }

    public static function of(): RecurrencePolicySetScheduleActionBuilder
    {
        return new self();
    }
}
