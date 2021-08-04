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
 * @extends OrderUpdateActionCollection<OrderTransitionCustomLineItemStateAction>
 * @method OrderTransitionCustomLineItemStateAction current()
 * @method OrderTransitionCustomLineItemStateAction end()
 * @method OrderTransitionCustomLineItemStateAction at($offset)
 */
class OrderTransitionCustomLineItemStateActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderTransitionCustomLineItemStateAction $value
     * @psalm-param OrderTransitionCustomLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderTransitionCustomLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderTransitionCustomLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderTransitionCustomLineItemStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderTransitionCustomLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderTransitionCustomLineItemStateAction $data */
                $data = OrderTransitionCustomLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
