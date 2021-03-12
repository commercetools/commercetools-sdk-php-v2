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
 * @extends MapperSequence<ChangeKeyAction>
 * @method ChangeKeyAction current()
 * @method ChangeKeyAction at($offset)
 */
class ChangeKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeKeyAction $value
     * @psalm-param ChangeKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
