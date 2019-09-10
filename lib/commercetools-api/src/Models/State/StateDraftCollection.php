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
 * @extends MapperSequence<StateDraft>
 * @method StateDraft current()
 * @method StateDraft at($offset)
 */
class StateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert StateDraft $value
     * @psalm-param StateDraft|stdClass $value
     * @return StateDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateDraft
     */
    protected function mapper()
    {
        return function(int $index): ?StateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}