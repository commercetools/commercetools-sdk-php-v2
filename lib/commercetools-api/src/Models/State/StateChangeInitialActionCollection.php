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
 * @extends MapperSequence<StateChangeInitialAction>
 *
 * @method StateChangeInitialAction current()
 * @method StateChangeInitialAction at($offset)
 */
class StateChangeInitialActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StateChangeInitialAction $value
     * @psalm-param StateChangeInitialAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StateChangeInitialActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateChangeInitialAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateChangeInitialAction
     */
    protected function mapper()
    {
        return function (int $index): ?StateChangeInitialAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateChangeInitialActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
