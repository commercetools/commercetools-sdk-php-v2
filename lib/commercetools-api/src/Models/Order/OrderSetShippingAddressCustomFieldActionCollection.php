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
 * @extends MapperSequence<OrderSetShippingAddressCustomFieldAction>
 * @method OrderSetShippingAddressCustomFieldAction current()
 * @method OrderSetShippingAddressCustomFieldAction at($offset)
 */
class OrderSetShippingAddressCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetShippingAddressCustomFieldAction $value
     * @psalm-param OrderSetShippingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetShippingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetShippingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetShippingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetShippingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetShippingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
