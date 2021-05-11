<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of Order
 * @extends BaseResourceCollection<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method Order current()
 * @method Order at($offset)
 */
class OrderCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?Order {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = OrderModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
