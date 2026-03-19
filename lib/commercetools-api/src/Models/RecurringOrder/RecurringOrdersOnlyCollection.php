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
 * @extends RecurringOrderScopeCollection<RecurringOrdersOnly>
 * @method RecurringOrdersOnly current()
 * @method RecurringOrdersOnly end()
 * @method RecurringOrdersOnly at($offset)
 */
class RecurringOrdersOnlyCollection extends RecurringOrderScopeCollection
{
    /**
     * @psalm-assert RecurringOrdersOnly $value
     * @psalm-param RecurringOrdersOnly|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrdersOnlyCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrdersOnly) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrdersOnly
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrdersOnly {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrdersOnly $data */
                $data = RecurringOrdersOnlyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
