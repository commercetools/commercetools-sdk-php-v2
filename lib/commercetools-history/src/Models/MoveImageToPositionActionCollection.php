<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MoveImageToPositionAction>
 * @method MoveImageToPositionAction current()
 * @method MoveImageToPositionAction at($offset)
 */
class MoveImageToPositionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MoveImageToPositionAction $value
     * @psalm-param MoveImageToPositionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MoveImageToPositionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MoveImageToPositionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MoveImageToPositionAction
     */
    protected function mapper()
    {
        return function (int $index): ?MoveImageToPositionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MoveImageToPositionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
