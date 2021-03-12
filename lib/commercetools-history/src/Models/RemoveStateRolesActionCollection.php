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
 * @extends MapperSequence<RemoveStateRolesAction>
 * @method RemoveStateRolesAction current()
 * @method RemoveStateRolesAction at($offset)
 */
class RemoveStateRolesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveStateRolesAction $value
     * @psalm-param RemoveStateRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveStateRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveStateRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveStateRolesAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveStateRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveStateRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
