<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StateUpdateAction>
 *
 * @method StateUpdateAction current()
 * @method StateUpdateAction at($offset)
 */
class StateUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StateUpdateAction $value
     * @psalm-param StateUpdateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StateUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StateUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
