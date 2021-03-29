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
 * @extends MapperSequence<AddToCategoryChange>
 * @method AddToCategoryChange current()
 * @method AddToCategoryChange at($offset)
 */
class AddToCategoryChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddToCategoryChange $value
     * @psalm-param AddToCategoryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddToCategoryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddToCategoryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddToCategoryChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddToCategoryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddToCategoryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
