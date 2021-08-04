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
 * @extends OrderUpdateActionCollection<OrderSetBillingAddressAction>
 * @method OrderSetBillingAddressAction current()
 * @method OrderSetBillingAddressAction end()
 * @method OrderSetBillingAddressAction at($offset)
 */
class OrderSetBillingAddressActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetBillingAddressAction $value
     * @psalm-param OrderSetBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetBillingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetBillingAddressAction $data */
                $data = OrderSetBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
