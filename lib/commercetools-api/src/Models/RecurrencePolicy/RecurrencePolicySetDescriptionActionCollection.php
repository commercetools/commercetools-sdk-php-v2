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
 * @extends RecurrencePolicyUpdateActionCollection<RecurrencePolicySetDescriptionAction>
 * @method RecurrencePolicySetDescriptionAction current()
 * @method RecurrencePolicySetDescriptionAction end()
 * @method RecurrencePolicySetDescriptionAction at($offset)
 */
class RecurrencePolicySetDescriptionActionCollection extends RecurrencePolicyUpdateActionCollection
{
    /**
     * @psalm-assert RecurrencePolicySetDescriptionAction $value
     * @psalm-param RecurrencePolicySetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicySetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicySetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicySetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicySetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicySetDescriptionAction $data */
                $data = RecurrencePolicySetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
