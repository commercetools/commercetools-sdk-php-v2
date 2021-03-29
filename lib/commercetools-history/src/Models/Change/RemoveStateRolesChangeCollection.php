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
 * @extends MapperSequence<RemoveStateRolesChange>
 * @method RemoveStateRolesChange current()
 * @method RemoveStateRolesChange at($offset)
 */
class RemoveStateRolesChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveStateRolesChange $value
     * @psalm-param RemoveStateRolesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveStateRolesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveStateRolesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveStateRolesChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveStateRolesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveStateRolesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
