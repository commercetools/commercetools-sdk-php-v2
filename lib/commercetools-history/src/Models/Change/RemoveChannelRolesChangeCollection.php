<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<RemoveChannelRolesChange>
 * @method RemoveChannelRolesChange current()
 * @method RemoveChannelRolesChange at($offset)
 */
class RemoveChannelRolesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveChannelRolesChange $value
     * @psalm-param RemoveChannelRolesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveChannelRolesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveChannelRolesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveChannelRolesChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveChannelRolesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveChannelRolesChange $data */
                $data = RemoveChannelRolesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
