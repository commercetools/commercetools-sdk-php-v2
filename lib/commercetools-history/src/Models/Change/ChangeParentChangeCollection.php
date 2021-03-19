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
 * @extends MapperSequence<ChangeParentChange>
 * @method ChangeParentChange current()
 * @method ChangeParentChange at($offset)
 */
class ChangeParentChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeParentChange $value
     * @psalm-param ChangeParentChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeParentChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeParentChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeParentChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeParentChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeParentChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
