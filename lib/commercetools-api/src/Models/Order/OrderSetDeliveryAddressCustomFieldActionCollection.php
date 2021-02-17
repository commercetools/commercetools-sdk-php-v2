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
 * @extends MapperSequence<OrderSetDeliveryAddressCustomFieldAction>
 * @method OrderSetDeliveryAddressCustomFieldAction current()
 * @method OrderSetDeliveryAddressCustomFieldAction at($offset)
 */
class OrderSetDeliveryAddressCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetDeliveryAddressCustomFieldAction $value
     * @psalm-param OrderSetDeliveryAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetDeliveryAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetDeliveryAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetDeliveryAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetDeliveryAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetDeliveryAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
