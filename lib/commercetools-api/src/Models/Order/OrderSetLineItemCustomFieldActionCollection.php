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
 * @extends OrderUpdateActionCollection<OrderSetLineItemCustomFieldAction>
 * @method OrderSetLineItemCustomFieldAction current()
 * @method OrderSetLineItemCustomFieldAction at($offset)
 */
class OrderSetLineItemCustomFieldActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetLineItemCustomFieldAction $value
     * @psalm-param OrderSetLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetLineItemCustomFieldAction $data */
                $data = OrderSetLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
