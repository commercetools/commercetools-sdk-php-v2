<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyScheduleCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurrencePolicyScheduleCollection<DayOfMonthSchedule>
 * @method DayOfMonthSchedule current()
 * @method DayOfMonthSchedule end()
 * @method DayOfMonthSchedule at($offset)
 */
class DayOfMonthScheduleCollection extends RecurrencePolicyScheduleCollection
{
    /**
     * @psalm-assert DayOfMonthSchedule $value
     * @psalm-param DayOfMonthSchedule|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DayOfMonthScheduleCollection
     */
    public function add($value)
    {
        if (!$value instanceof DayOfMonthSchedule) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DayOfMonthSchedule
     */
    protected function mapper()
    {
        return function (?int $index): ?DayOfMonthSchedule {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DayOfMonthSchedule $data */
                $data = DayOfMonthScheduleModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
