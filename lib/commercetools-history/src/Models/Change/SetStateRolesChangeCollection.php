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
 * @extends ChangeCollection<SetStateRolesChange>
 * @method SetStateRolesChange current()
 * @method SetStateRolesChange end()
 * @method SetStateRolesChange at($offset)
 */
class SetStateRolesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetStateRolesChange $value
     * @psalm-param SetStateRolesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStateRolesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStateRolesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStateRolesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetStateRolesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetStateRolesChange $data */
                $data = SetStateRolesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
