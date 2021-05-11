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
 * @extends OrderUpdateActionCollection<OrderSetStoreAction>
 * @method OrderSetStoreAction current()
 * @method OrderSetStoreAction at($offset)
 */
class OrderSetStoreActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetStoreAction $value
     * @psalm-param OrderSetStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetStoreAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetStoreAction $data */
                $data = OrderSetStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
