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
 * @extends MapperSequence<AddStateRolesChange>
 * @method AddStateRolesChange current()
 * @method AddStateRolesChange at($offset)
 */
class AddStateRolesChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddStateRolesChange $value
     * @psalm-param AddStateRolesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddStateRolesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddStateRolesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddStateRolesChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddStateRolesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddStateRolesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
