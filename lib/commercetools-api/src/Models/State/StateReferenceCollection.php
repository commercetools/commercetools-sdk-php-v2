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
 * @extends MapperSequence<StateReference>
 * @method StateReference current()
 * @method StateReference at($offset)
 */
class StateReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert StateReference $value
     * @psalm-param StateReference|stdClass $value
     * @return StateReferenceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StateReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateReference
     */
    protected function mapper()
    {
        return function(int $index): ?StateReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateReferenceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}