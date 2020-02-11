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
 * @extends MapperSequence<State>
 * @method State current()
 * @method State at($offset)
 */
class StateCollection extends MapperSequence
{
    /**
     * @psalm-assert State $value
     * @psalm-param State|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateCollection
     */
    public function add($value)
    {
        if (!$value instanceof State) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?State
     */
    protected function mapper()
    {
        return function (int $index): ?State {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
