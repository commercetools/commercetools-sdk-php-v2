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
 * @extends OrderUpdateActionCollection<OrderRemovePaymentAction>
 * @method OrderRemovePaymentAction current()
 * @method OrderRemovePaymentAction at($offset)
 */
class OrderRemovePaymentActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderRemovePaymentAction $value
     * @psalm-param OrderRemovePaymentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderRemovePaymentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderRemovePaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderRemovePaymentAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderRemovePaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderRemovePaymentAction $data */
                $data = OrderRemovePaymentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
