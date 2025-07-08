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
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderSetKeyAction>
 * @method RecurringOrderSetKeyAction current()
 * @method RecurringOrderSetKeyAction end()
 * @method RecurringOrderSetKeyAction at($offset)
 */
class RecurringOrderSetKeyActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderSetKeyAction $value
     * @psalm-param RecurringOrderSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderSetKeyAction $data */
                $data = RecurringOrderSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
