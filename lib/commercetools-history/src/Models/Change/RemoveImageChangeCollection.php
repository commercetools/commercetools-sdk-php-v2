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
 * @extends MapperSequence<RemoveImageChange>
 * @method RemoveImageChange current()
 * @method RemoveImageChange at($offset)
 */
class RemoveImageChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveImageChange $value
     * @psalm-param RemoveImageChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveImageChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveImageChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveImageChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveImageChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveImageChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
