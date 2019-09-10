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
 * @extends MapperSequence<OrderSetDeliveryAddressAction>
 *
 * @method OrderSetDeliveryAddressAction current()
 * @method OrderSetDeliveryAddressAction at($offset)
 */
class OrderSetDeliveryAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetDeliveryAddressAction $value
     * @psalm-param OrderSetDeliveryAddressAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderSetDeliveryAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetDeliveryAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetDeliveryAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetDeliveryAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetDeliveryAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
