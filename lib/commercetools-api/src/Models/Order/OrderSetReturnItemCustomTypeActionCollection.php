<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderUpdateActionCollection<OrderSetReturnItemCustomTypeAction>
 * @method OrderSetReturnItemCustomTypeAction current()
 * @method OrderSetReturnItemCustomTypeAction end()
 * @method OrderSetReturnItemCustomTypeAction at($offset)
 */
class OrderSetReturnItemCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetReturnItemCustomTypeAction $value
     * @psalm-param OrderSetReturnItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetReturnItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetReturnItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetReturnItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetReturnItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetReturnItemCustomTypeAction $data */
                $data = OrderSetReturnItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
