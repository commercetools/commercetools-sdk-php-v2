<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Order>
 * @method Order current()
 * @method Order at($offset)
 */
class OrderCollection extends MapperSequence
{
    /**
     * @psalm-assert Order $value
     * @psalm-param Order|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCollection
     */
    public function add($value)
    {
        if (!$value instanceof Order) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Order
     */
    protected function mapper()
    {
        return function (int $index): ?Order {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
