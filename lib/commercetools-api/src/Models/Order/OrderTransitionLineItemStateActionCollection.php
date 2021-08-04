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
 * @extends OrderUpdateActionCollection<OrderTransitionLineItemStateAction>
 * @method OrderTransitionLineItemStateAction current()
 * @method OrderTransitionLineItemStateAction end()
 * @method OrderTransitionLineItemStateAction at($offset)
 */
class OrderTransitionLineItemStateActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderTransitionLineItemStateAction $value
     * @psalm-param OrderTransitionLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderTransitionLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderTransitionLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderTransitionLineItemStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderTransitionLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderTransitionLineItemStateAction $data */
                $data = OrderTransitionLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
