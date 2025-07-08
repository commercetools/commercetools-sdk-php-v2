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
 * @extends RecurrencePolicyUpdateActionCollection<RecurrencePolicySetKeyAction>
 * @method RecurrencePolicySetKeyAction current()
 * @method RecurrencePolicySetKeyAction end()
 * @method RecurrencePolicySetKeyAction at($offset)
 */
class RecurrencePolicySetKeyActionCollection extends RecurrencePolicyUpdateActionCollection
{
    /**
     * @psalm-assert RecurrencePolicySetKeyAction $value
     * @psalm-param RecurrencePolicySetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicySetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicySetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicySetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicySetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicySetKeyAction $data */
                $data = RecurrencePolicySetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
