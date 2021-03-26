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
 * @extends MapperSequence<ChangeQuantityChange>
 * @method ChangeQuantityChange current()
 * @method ChangeQuantityChange at($offset)
 */
class ChangeQuantityChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeQuantityChange $value
     * @psalm-param ChangeQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeQuantityChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
