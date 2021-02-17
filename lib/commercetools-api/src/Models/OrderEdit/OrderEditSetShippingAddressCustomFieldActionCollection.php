<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditSetShippingAddressCustomFieldAction>
 * @method OrderEditSetShippingAddressCustomFieldAction current()
 * @method OrderEditSetShippingAddressCustomFieldAction at($offset)
 */
class OrderEditSetShippingAddressCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditSetShippingAddressCustomFieldAction $value
     * @psalm-param OrderEditSetShippingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetShippingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetShippingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetShippingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetShippingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditSetShippingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
