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
 * @extends OrderUpdateActionCollection<OrderSetParcelCustomFieldAction>
 * @method OrderSetParcelCustomFieldAction current()
 * @method OrderSetParcelCustomFieldAction end()
 * @method OrderSetParcelCustomFieldAction at($offset)
 */
class OrderSetParcelCustomFieldActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetParcelCustomFieldAction $value
     * @psalm-param OrderSetParcelCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetParcelCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetParcelCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetParcelCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetParcelCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetParcelCustomFieldAction $data */
                $data = OrderSetParcelCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
