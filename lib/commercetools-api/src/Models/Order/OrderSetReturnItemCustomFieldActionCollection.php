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
 * @extends OrderUpdateActionCollection<OrderSetReturnItemCustomFieldAction>
 * @method OrderSetReturnItemCustomFieldAction current()
 * @method OrderSetReturnItemCustomFieldAction end()
 * @method OrderSetReturnItemCustomFieldAction at($offset)
 */
class OrderSetReturnItemCustomFieldActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetReturnItemCustomFieldAction $value
     * @psalm-param OrderSetReturnItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetReturnItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetReturnItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetReturnItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetReturnItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetReturnItemCustomFieldAction $data */
                $data = OrderSetReturnItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
