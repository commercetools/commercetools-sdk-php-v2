<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MoveImageToPositionChange>
 * @method MoveImageToPositionChange current()
 * @method MoveImageToPositionChange at($offset)
 */
class MoveImageToPositionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert MoveImageToPositionChange $value
     * @psalm-param MoveImageToPositionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MoveImageToPositionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof MoveImageToPositionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MoveImageToPositionChange
     */
    protected function mapper()
    {
        return function (int $index): ?MoveImageToPositionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MoveImageToPositionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
