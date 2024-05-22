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
 * @extends OrderUpdateActionCollection<OrderSetShippingCustomFieldAction>
 * @method OrderSetShippingCustomFieldAction current()
 * @method OrderSetShippingCustomFieldAction end()
 * @method OrderSetShippingCustomFieldAction at($offset)
 */
class OrderSetShippingCustomFieldActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetShippingCustomFieldAction $value
     * @psalm-param OrderSetShippingCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetShippingCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetShippingCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetShippingCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetShippingCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetShippingCustomFieldAction $data */
                $data = OrderSetShippingCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
