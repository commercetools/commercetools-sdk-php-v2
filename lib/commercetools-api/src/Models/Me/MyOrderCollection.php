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
 * @extends MapperSequence<MyOrder>
 *
 * @method MyOrder current()
 * @method MyOrder at($offset)
 */
class MyOrderCollection extends MapperSequence
{
    /**
     * @psalm-assert MyOrder $value
     * @psalm-param MyOrder|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyOrderCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyOrder) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyOrder
     */
    protected function mapper()
    {
        return function (int $index): ?MyOrder {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyOrderModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
