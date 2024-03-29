<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\TypedMoneyCollection;
use stdClass;

/**
 * @extends TypedMoneyCollection<Money>
 * @method Money current()
 * @method Money end()
 * @method Money at($offset)
 */
class MoneyCollection extends TypedMoneyCollection
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
        return function (?int $index): ?Money {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Money $data */
                $data = MoneyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
