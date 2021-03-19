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
 * @extends MapperSequence<RemoveLocationChange>
 * @method RemoveLocationChange current()
 * @method RemoveLocationChange at($offset)
 */
class RemoveLocationChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveLocationChange $value
     * @psalm-param RemoveLocationChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveLocationChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveLocationChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveLocationChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveLocationChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveLocationChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
