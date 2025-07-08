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
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderSetCustomTypeAction>
 * @method RecurringOrderSetCustomTypeAction current()
 * @method RecurringOrderSetCustomTypeAction end()
 * @method RecurringOrderSetCustomTypeAction at($offset)
 */
class RecurringOrderSetCustomTypeActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderSetCustomTypeAction $value
     * @psalm-param RecurringOrderSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderSetCustomTypeAction $data */
                $data = RecurringOrderSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
