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
 * @extends MapperSequence<StateChangeKeyAction>
 *
 * @method StateChangeKeyAction current()
 * @method StateChangeKeyAction at($offset)
 */
class StateChangeKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StateChangeKeyAction $value
     * @psalm-param StateChangeKeyAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StateChangeKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateChangeKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateChangeKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?StateChangeKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateChangeKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
