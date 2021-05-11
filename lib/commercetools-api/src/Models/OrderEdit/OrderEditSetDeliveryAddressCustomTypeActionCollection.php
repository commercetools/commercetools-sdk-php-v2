<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\OrderEdit\OrderEditUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderEditUpdateActionCollection<OrderEditSetDeliveryAddressCustomTypeAction>
 * @method OrderEditSetDeliveryAddressCustomTypeAction current()
 * @method OrderEditSetDeliveryAddressCustomTypeAction at($offset)
 */
class OrderEditSetDeliveryAddressCustomTypeActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetDeliveryAddressCustomTypeAction $value
     * @psalm-param OrderEditSetDeliveryAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetDeliveryAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetDeliveryAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetDeliveryAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetDeliveryAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetDeliveryAddressCustomTypeAction $data */
                $data = OrderEditSetDeliveryAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
