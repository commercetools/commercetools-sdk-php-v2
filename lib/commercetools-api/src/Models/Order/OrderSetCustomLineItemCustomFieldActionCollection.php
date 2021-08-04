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
 * @extends OrderUpdateActionCollection<OrderSetCustomLineItemCustomFieldAction>
 * @method OrderSetCustomLineItemCustomFieldAction current()
 * @method OrderSetCustomLineItemCustomFieldAction end()
 * @method OrderSetCustomLineItemCustomFieldAction at($offset)
 */
class OrderSetCustomLineItemCustomFieldActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetCustomLineItemCustomFieldAction $value
     * @psalm-param OrderSetCustomLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetCustomLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetCustomLineItemCustomFieldAction $data */
                $data = OrderSetCustomLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
