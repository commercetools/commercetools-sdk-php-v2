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
 * @extends MapperSequence<OrderUpdate>
 * @method OrderUpdate current()
 * @method OrderUpdate at($offset)
 */
class OrderUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderUpdate $value
     * @psalm-param OrderUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?OrderUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
