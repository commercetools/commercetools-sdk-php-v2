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
 * @extends MapperSequence<SetStateRolesAction>
 * @method SetStateRolesAction current()
 * @method SetStateRolesAction at($offset)
 */
class SetStateRolesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetStateRolesAction $value
     * @psalm-param SetStateRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStateRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStateRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStateRolesAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetStateRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetStateRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
