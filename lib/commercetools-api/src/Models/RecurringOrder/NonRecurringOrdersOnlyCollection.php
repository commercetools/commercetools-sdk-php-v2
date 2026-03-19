<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderScopeCollection<NonRecurringOrdersOnly>
 * @method NonRecurringOrdersOnly current()
 * @method NonRecurringOrdersOnly end()
 * @method NonRecurringOrdersOnly at($offset)
 */
class NonRecurringOrdersOnlyCollection extends RecurringOrderScopeCollection
{
    /**
     * @psalm-assert NonRecurringOrdersOnly $value
     * @psalm-param NonRecurringOrdersOnly|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NonRecurringOrdersOnlyCollection
     */
    public function add($value)
    {
        if (!$value instanceof NonRecurringOrdersOnly) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NonRecurringOrdersOnly
     */
    protected function mapper()
    {
        return function (?int $index): ?NonRecurringOrdersOnly {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var NonRecurringOrdersOnly $data */
                $data = NonRecurringOrdersOnlyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
