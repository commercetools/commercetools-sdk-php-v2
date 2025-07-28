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
 * @extends RecurringOrderUpdateActionCollection<RecurringOrderSetExpiresAtAction>
 * @method RecurringOrderSetExpiresAtAction current()
 * @method RecurringOrderSetExpiresAtAction end()
 * @method RecurringOrderSetExpiresAtAction at($offset)
 */
class RecurringOrderSetExpiresAtActionCollection extends RecurringOrderUpdateActionCollection
{
    /**
     * @psalm-assert RecurringOrderSetExpiresAtAction $value
     * @psalm-param RecurringOrderSetExpiresAtAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderSetExpiresAtActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderSetExpiresAtAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderSetExpiresAtAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderSetExpiresAtAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderSetExpiresAtAction $data */
                $data = RecurringOrderSetExpiresAtActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
