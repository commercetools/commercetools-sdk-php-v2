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
 * @extends MapperSequence<ChangeStateTypeAction>
 * @method ChangeStateTypeAction current()
 * @method ChangeStateTypeAction at($offset)
 */
class ChangeStateTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeStateTypeAction $value
     * @psalm-param ChangeStateTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeStateTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeStateTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeStateTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeStateTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeStateTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
