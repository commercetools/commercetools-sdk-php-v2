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
 * @extends MapperSequence<ChangeValueChange>
 * @method ChangeValueChange current()
 * @method ChangeValueChange at($offset)
 */
class ChangeValueChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueChange $value
     * @psalm-param ChangeValueChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
