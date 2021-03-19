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
 * @extends MapperSequence<AddLocationChange>
 * @method AddLocationChange current()
 * @method AddLocationChange at($offset)
 */
class AddLocationChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddLocationChange $value
     * @psalm-param AddLocationChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddLocationChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddLocationChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddLocationChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddLocationChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddLocationChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
