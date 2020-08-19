<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypedMoney>
 * @method TypedMoney current()
 * @method TypedMoney at($offset)
 */
class TypedMoneyCollection extends MapperSequence
{
    /**
     * @psalm-assert TypedMoney $value
     * @psalm-param TypedMoney|stdClass $value
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
     * @psalm-return callable(int):?TypedMoney
     */
    protected function mapper()
    {
        return function (int $index): ?TypedMoney {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypedMoneyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
