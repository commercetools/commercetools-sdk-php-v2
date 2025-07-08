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
 * @extends RecurrencePolicyScheduleCollection<StandardSchedule>
 * @method StandardSchedule current()
 * @method StandardSchedule end()
 * @method StandardSchedule at($offset)
 */
class StandardScheduleCollection extends RecurrencePolicyScheduleCollection
{
    /**
     * @psalm-assert StandardSchedule $value
     * @psalm-param StandardSchedule|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandardScheduleCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandardSchedule) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandardSchedule
     */
    protected function mapper()
    {
        return function (?int $index): ?StandardSchedule {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandardSchedule $data */
                $data = StandardScheduleModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
