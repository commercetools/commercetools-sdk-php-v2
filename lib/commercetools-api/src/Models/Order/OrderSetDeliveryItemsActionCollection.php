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
 * @extends OrderUpdateActionCollection<OrderSetDeliveryItemsAction>
 * @method OrderSetDeliveryItemsAction current()
 * @method OrderSetDeliveryItemsAction end()
 * @method OrderSetDeliveryItemsAction at($offset)
 */
class OrderSetDeliveryItemsActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetDeliveryItemsAction $value
     * @psalm-param OrderSetDeliveryItemsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetDeliveryItemsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetDeliveryItemsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetDeliveryItemsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetDeliveryItemsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetDeliveryItemsAction $data */
                $data = OrderSetDeliveryItemsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
