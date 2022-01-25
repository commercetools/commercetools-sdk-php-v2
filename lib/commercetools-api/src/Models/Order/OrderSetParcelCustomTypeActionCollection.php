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
 * @extends OrderUpdateActionCollection<OrderSetParcelCustomTypeAction>
 * @method OrderSetParcelCustomTypeAction current()
 * @method OrderSetParcelCustomTypeAction end()
 * @method OrderSetParcelCustomTypeAction at($offset)
 */
class OrderSetParcelCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetParcelCustomTypeAction $value
     * @psalm-param OrderSetParcelCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetParcelCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetParcelCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetParcelCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetParcelCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetParcelCustomTypeAction $data */
                $data = OrderSetParcelCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
