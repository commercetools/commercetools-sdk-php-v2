<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyScheduleDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurrencePolicyScheduleDraftCollection<DayOfMonthScheduleDraft>
 * @method DayOfMonthScheduleDraft current()
 * @method DayOfMonthScheduleDraft end()
 * @method DayOfMonthScheduleDraft at($offset)
 */
class DayOfMonthScheduleDraftCollection extends RecurrencePolicyScheduleDraftCollection
{
    /**
     * @psalm-assert DayOfMonthScheduleDraft $value
     * @psalm-param DayOfMonthScheduleDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DayOfMonthScheduleDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DayOfMonthScheduleDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DayOfMonthScheduleDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DayOfMonthScheduleDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DayOfMonthScheduleDraft $data */
                $data = DayOfMonthScheduleDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
