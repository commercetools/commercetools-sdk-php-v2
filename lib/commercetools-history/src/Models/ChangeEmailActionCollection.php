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
 * @extends MapperSequence<ChangeEmailAction>
 * @method ChangeEmailAction current()
 * @method ChangeEmailAction at($offset)
 */
class ChangeEmailActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeEmailAction $value
     * @psalm-param ChangeEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeEmailAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
