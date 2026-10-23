<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurrencePolicyUpdateActionCollection<RecurrencePolicySetMinDaysBetweenOrdersAction>
 * @method RecurrencePolicySetMinDaysBetweenOrdersAction current()
 * @method RecurrencePolicySetMinDaysBetweenOrdersAction end()
 * @method RecurrencePolicySetMinDaysBetweenOrdersAction at($offset)
 */
class RecurrencePolicySetMinDaysBetweenOrdersActionCollection extends RecurrencePolicyUpdateActionCollection
{
    /**
     * @psalm-assert RecurrencePolicySetMinDaysBetweenOrdersAction $value
     * @psalm-param RecurrencePolicySetMinDaysBetweenOrdersAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicySetMinDaysBetweenOrdersActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicySetMinDaysBetweenOrdersAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicySetMinDaysBetweenOrdersAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicySetMinDaysBetweenOrdersAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicySetMinDaysBetweenOrdersAction $data */
                $data = RecurrencePolicySetMinDaysBetweenOrdersActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
