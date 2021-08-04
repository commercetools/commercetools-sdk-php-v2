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
 * @template T of Money
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method Money current()
 * @method Money end()
 * @method Money at($offset)
 */
class MoneyCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?Money {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = MoneyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
