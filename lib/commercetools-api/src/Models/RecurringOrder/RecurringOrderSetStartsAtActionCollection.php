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
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderSetStartsAtAction>
 * @method RecurringOrderSetStartsAtAction current()
 * @method RecurringOrderSetStartsAtAction end()
 * @method RecurringOrderSetStartsAtAction at($offset)
 */
class RecurringOrderSetStartsAtActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderSetStartsAtAction $value
     * @psalm-param RecurringOrderSetStartsAtAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderSetStartsAtActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderSetStartsAtAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderSetStartsAtAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderSetStartsAtAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderSetStartsAtAction $data */
                $data = RecurringOrderSetStartsAtActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
