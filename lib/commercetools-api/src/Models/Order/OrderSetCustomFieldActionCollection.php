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
 * @extends OrderUpdateActionCollection<OrderSetCustomFieldAction>
 * @method OrderSetCustomFieldAction current()
 * @method OrderSetCustomFieldAction at($offset)
 */
class OrderSetCustomFieldActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetCustomFieldAction $value
     * @psalm-param OrderSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetCustomFieldAction $data */
                $data = OrderSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
