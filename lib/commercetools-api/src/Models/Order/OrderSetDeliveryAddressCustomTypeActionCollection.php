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
 * @extends MapperSequence<OrderSetDeliveryAddressCustomTypeAction>
 * @method OrderSetDeliveryAddressCustomTypeAction current()
 * @method OrderSetDeliveryAddressCustomTypeAction at($offset)
 */
class OrderSetDeliveryAddressCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetDeliveryAddressCustomTypeAction $value
     * @psalm-param OrderSetDeliveryAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetDeliveryAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetDeliveryAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetDeliveryAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetDeliveryAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetDeliveryAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
