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
 * @extends RecurrencePolicyUpdateActionCollection<RecurrencePolicySetNameAction>
 * @method RecurrencePolicySetNameAction current()
 * @method RecurrencePolicySetNameAction end()
 * @method RecurrencePolicySetNameAction at($offset)
 */
class RecurrencePolicySetNameActionCollection extends RecurrencePolicyUpdateActionCollection
{
    /**
     * @psalm-assert RecurrencePolicySetNameAction $value
     * @psalm-param RecurrencePolicySetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicySetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicySetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicySetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicySetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicySetNameAction $data */
                $data = RecurrencePolicySetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
