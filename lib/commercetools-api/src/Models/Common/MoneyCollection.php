<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Money>
 * @method Money current()
 * @method Money at($offset)
 */
class MoneyCollection extends MapperSequence
{
    /**
     * @psalm-assert Money $value
     * @psalm-param Money|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MoneyCollection
     */
    public function add($value)
    {
        if (!$value instanceof Money) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Money
     */
    protected function mapper()
    {
        return function (int $index): ?Money {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MoneyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
