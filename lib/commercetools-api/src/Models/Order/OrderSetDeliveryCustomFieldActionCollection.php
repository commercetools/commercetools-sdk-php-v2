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
 * @extends OrderUpdateActionCollection<OrderSetDeliveryCustomFieldAction>
 * @method OrderSetDeliveryCustomFieldAction current()
 * @method OrderSetDeliveryCustomFieldAction end()
 * @method OrderSetDeliveryCustomFieldAction at($offset)
 */
class OrderSetDeliveryCustomFieldActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetDeliveryCustomFieldAction $value
     * @psalm-param OrderSetDeliveryCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetDeliveryCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetDeliveryCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetDeliveryCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetDeliveryCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetDeliveryCustomFieldAction $data */
                $data = OrderSetDeliveryCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
