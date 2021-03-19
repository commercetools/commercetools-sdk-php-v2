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
 * @extends MapperSequence<RemoveEnumValuesChange>
 * @method RemoveEnumValuesChange current()
 * @method RemoveEnumValuesChange at($offset)
 */
class RemoveEnumValuesChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveEnumValuesChange $value
     * @psalm-param RemoveEnumValuesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveEnumValuesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveEnumValuesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveEnumValuesChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveEnumValuesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveEnumValuesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
