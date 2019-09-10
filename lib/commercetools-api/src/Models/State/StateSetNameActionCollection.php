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
 * @extends MapperSequence<StateSetNameAction>
 * @method StateSetNameAction current()
 * @method StateSetNameAction at($offset)
 */
class StateSetNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StateSetNameAction $value
     * @psalm-param StateSetNameAction|stdClass $value
     * @return StateSetNameActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StateSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateSetNameAction
     */
    protected function mapper()
    {
        return function(int $index): ?StateSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateSetNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}