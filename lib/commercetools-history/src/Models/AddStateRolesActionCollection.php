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
 * @extends MapperSequence<AddStateRolesAction>
 * @method AddStateRolesAction current()
 * @method AddStateRolesAction at($offset)
 */
class AddStateRolesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddStateRolesAction $value
     * @psalm-param AddStateRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddStateRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddStateRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddStateRolesAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddStateRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddStateRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
