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
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderTransitionStateAction>
 * @method RecurringOrderTransitionStateAction current()
 * @method RecurringOrderTransitionStateAction end()
 * @method RecurringOrderTransitionStateAction at($offset)
 */
class RecurringOrderTransitionStateActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderTransitionStateAction $value
     * @psalm-param RecurringOrderTransitionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderTransitionStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderTransitionStateAction $data */
                $data = RecurringOrderTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
