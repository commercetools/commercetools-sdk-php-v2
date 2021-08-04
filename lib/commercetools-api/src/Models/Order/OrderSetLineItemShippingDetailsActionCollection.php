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
 * @extends OrderUpdateActionCollection<OrderSetLineItemShippingDetailsAction>
 * @method OrderSetLineItemShippingDetailsAction current()
 * @method OrderSetLineItemShippingDetailsAction at($offset)
 */
class OrderSetLineItemShippingDetailsActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetLineItemShippingDetailsAction $value
     * @psalm-param OrderSetLineItemShippingDetailsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetLineItemShippingDetailsAction $data */
                $data = OrderSetLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
