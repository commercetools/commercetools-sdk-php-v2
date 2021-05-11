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
 * @extends OrderEditUpdateActionCollection<OrderEditSetShippingAddressCustomTypeAction>
 * @method OrderEditSetShippingAddressCustomTypeAction current()
 * @method OrderEditSetShippingAddressCustomTypeAction at($offset)
 */
class OrderEditSetShippingAddressCustomTypeActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetShippingAddressCustomTypeAction $value
     * @psalm-param OrderEditSetShippingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetShippingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetShippingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetShippingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetShippingAddressCustomTypeAction $data */
                $data = OrderEditSetShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
