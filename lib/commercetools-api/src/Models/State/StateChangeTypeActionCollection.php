<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StateChangeTypeAction>
 * @method StateChangeTypeAction current()
 * @method StateChangeTypeAction at($offset)
 */
class StateChangeTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StateChangeTypeAction $value
     * @psalm-param StateChangeTypeAction|stdClass $value
     * @return StateChangeTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StateChangeTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateChangeTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?StateChangeTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateChangeTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}