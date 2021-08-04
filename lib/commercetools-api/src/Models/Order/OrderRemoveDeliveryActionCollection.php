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
 * @extends OrderUpdateActionCollection<OrderRemoveDeliveryAction>
 * @method OrderRemoveDeliveryAction current()
 * @method OrderRemoveDeliveryAction at($offset)
 */
class OrderRemoveDeliveryActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderRemoveDeliveryAction $value
     * @psalm-param OrderRemoveDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderRemoveDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderRemoveDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderRemoveDeliveryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderRemoveDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderRemoveDeliveryAction $data */
                $data = OrderRemoveDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
