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
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderSetCustomFieldAction>
 * @method RecurringOrderSetCustomFieldAction current()
 * @method RecurringOrderSetCustomFieldAction end()
 * @method RecurringOrderSetCustomFieldAction at($offset)
 */
class RecurringOrderSetCustomFieldActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderSetCustomFieldAction $value
     * @psalm-param RecurringOrderSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderSetCustomFieldAction $data */
                $data = RecurringOrderSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
