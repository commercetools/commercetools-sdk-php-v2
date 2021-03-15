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
 * @extends MapperSequence<ChangeIsActiveAction>
 * @method ChangeIsActiveAction current()
 * @method ChangeIsActiveAction at($offset)
 */
class ChangeIsActiveActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeIsActiveAction $value
     * @psalm-param ChangeIsActiveAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeIsActiveActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeIsActiveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeIsActiveAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeIsActiveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeIsActiveActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
