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
 * @extends MapperSequence<ChangeGroupsChange>
 * @method ChangeGroupsChange current()
 * @method ChangeGroupsChange at($offset)
 */
class ChangeGroupsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeGroupsChange $value
     * @psalm-param ChangeGroupsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeGroupsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeGroupsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeGroupsChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeGroupsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeGroupsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
