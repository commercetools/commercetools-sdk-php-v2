<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurrencePolicyUpdateActionCollection<RecurrencePolicySetScheduleAction>
 * @method RecurrencePolicySetScheduleAction current()
 * @method RecurrencePolicySetScheduleAction end()
 * @method RecurrencePolicySetScheduleAction at($offset)
 */
class RecurrencePolicySetScheduleActionCollection extends RecurrencePolicyUpdateActionCollection
{
    /**
     * @psalm-assert RecurrencePolicySetScheduleAction $value
     * @psalm-param RecurrencePolicySetScheduleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicySetScheduleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicySetScheduleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicySetScheduleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicySetScheduleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicySetScheduleAction $data */
                $data = RecurrencePolicySetScheduleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
