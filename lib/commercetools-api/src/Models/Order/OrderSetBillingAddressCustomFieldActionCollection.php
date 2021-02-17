<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderSetBillingAddressCustomFieldAction>
 * @method OrderSetBillingAddressCustomFieldAction current()
 * @method OrderSetBillingAddressCustomFieldAction at($offset)
 */
class OrderSetBillingAddressCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetBillingAddressCustomFieldAction $value
     * @psalm-param OrderSetBillingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetBillingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetBillingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetBillingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetBillingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetBillingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
