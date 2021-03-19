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
 * @extends MapperSequence<ChangeEnumValueOrderChange>
 * @method ChangeEnumValueOrderChange current()
 * @method ChangeEnumValueOrderChange at($offset)
 */
class ChangeEnumValueOrderChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeEnumValueOrderChange $value
     * @psalm-param ChangeEnumValueOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeEnumValueOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeEnumValueOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeEnumValueOrderChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeEnumValueOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeEnumValueOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
