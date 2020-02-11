<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyCart>
 * @method MyCart current()
 * @method MyCart at($offset)
 */
class MyCartCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCart $value
     * @psalm-param MyCart|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCart) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCart
     */
    protected function mapper()
    {
        return function (int $index): ?MyCart {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
