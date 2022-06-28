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
 * @extends OrderUpdateActionCollection<OrderSetDeliveryCustomTypeAction>
 * @method OrderSetDeliveryCustomTypeAction current()
 * @method OrderSetDeliveryCustomTypeAction end()
 * @method OrderSetDeliveryCustomTypeAction at($offset)
 */
class OrderSetDeliveryCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetDeliveryCustomTypeAction $value
     * @psalm-param OrderSetDeliveryCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetDeliveryCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetDeliveryCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetDeliveryCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetDeliveryCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetDeliveryCustomTypeAction $data */
                $data = OrderSetDeliveryCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
