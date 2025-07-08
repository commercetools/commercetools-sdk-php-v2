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
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderSetStateAction>
 * @method RecurringOrderSetStateAction current()
 * @method RecurringOrderSetStateAction end()
 * @method RecurringOrderSetStateAction at($offset)
 */
class RecurringOrderSetStateActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderSetStateAction $value
     * @psalm-param RecurringOrderSetStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderSetStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderSetStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderSetStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderSetStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderSetStateAction $data */
                $data = RecurringOrderSetStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
