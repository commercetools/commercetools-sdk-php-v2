<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderSetScheduleAction>
 * @method RecurringOrderSetScheduleAction current()
 * @method RecurringOrderSetScheduleAction end()
 * @method RecurringOrderSetScheduleAction at($offset)
 */
class RecurringOrderSetScheduleActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderSetScheduleAction $value
     * @psalm-param RecurringOrderSetScheduleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderSetScheduleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderSetScheduleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderSetScheduleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderSetScheduleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderSetScheduleAction $data */
                $data = RecurringOrderSetScheduleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
