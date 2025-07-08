<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderStateDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderStateDraftCollection<RecurringOrderCanceled>
 * @method RecurringOrderCanceled current()
 * @method RecurringOrderCanceled end()
 * @method RecurringOrderCanceled at($offset)
 */
class RecurringOrderCanceledCollection extends RecurringOrderStateDraftCollection
{
    /**
     * @psalm-assert RecurringOrderCanceled $value
     * @psalm-param RecurringOrderCanceled|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderCanceledCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderCanceled) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderCanceled
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderCanceled {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderCanceled $data */
                $data = RecurringOrderCanceledModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
