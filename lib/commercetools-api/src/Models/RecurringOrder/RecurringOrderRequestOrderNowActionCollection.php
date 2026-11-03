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
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderRequestOrderNowAction>
 * @method RecurringOrderRequestOrderNowAction current()
 * @method RecurringOrderRequestOrderNowAction end()
 * @method RecurringOrderRequestOrderNowAction at($offset)
 */
class RecurringOrderRequestOrderNowActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderRequestOrderNowAction $value
     * @psalm-param RecurringOrderRequestOrderNowAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderRequestOrderNowActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderRequestOrderNowAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderRequestOrderNowAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderRequestOrderNowAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderRequestOrderNowAction $data */
                $data = RecurringOrderRequestOrderNowActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
