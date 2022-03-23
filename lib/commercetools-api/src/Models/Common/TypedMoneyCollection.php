<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of TypedMoney
 * @extends MoneyCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method TypedMoney current()
 * @method TypedMoney end()
 * @method TypedMoney at($offset)
 */
class TypedMoneyCollection extends MoneyCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypedMoneyCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypedMoney) {
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
        return function (?int $index): ?TypedMoney {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = TypedMoneyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
