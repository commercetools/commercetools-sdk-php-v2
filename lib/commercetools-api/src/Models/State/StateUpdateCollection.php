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
 * @extends MapperSequence<StateUpdate>
 * @method StateUpdate current()
 * @method StateUpdate at($offset)
 */
class StateUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert StateUpdate $value
     * @psalm-param StateUpdate|stdClass $value
     * @return StateUpdateCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StateUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateUpdate
     */
    protected function mapper()
    {
        return function(int $index): ?StateUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateUpdateModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}