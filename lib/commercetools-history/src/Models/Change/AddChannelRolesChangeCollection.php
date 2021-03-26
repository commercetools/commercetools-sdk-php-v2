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
 * @extends MapperSequence<AddChannelRolesChange>
 * @method AddChannelRolesChange current()
 * @method AddChannelRolesChange at($offset)
 */
class AddChannelRolesChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddChannelRolesChange $value
     * @psalm-param AddChannelRolesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddChannelRolesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddChannelRolesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddChannelRolesChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddChannelRolesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddChannelRolesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
