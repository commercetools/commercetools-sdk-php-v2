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
 * @extends ChangeCollection<SetChannelRolesChange>
 * @method SetChannelRolesChange current()
 * @method SetChannelRolesChange end()
 * @method SetChannelRolesChange at($offset)
 */
class SetChannelRolesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetChannelRolesChange $value
     * @psalm-param SetChannelRolesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetChannelRolesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetChannelRolesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetChannelRolesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetChannelRolesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetChannelRolesChange $data */
                $data = SetChannelRolesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
