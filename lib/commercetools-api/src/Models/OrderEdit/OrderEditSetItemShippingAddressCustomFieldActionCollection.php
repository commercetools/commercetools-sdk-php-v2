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
 * @extends OrderEditUpdateActionCollection<OrderEditSetItemShippingAddressCustomFieldAction>
 * @method OrderEditSetItemShippingAddressCustomFieldAction current()
 * @method OrderEditSetItemShippingAddressCustomFieldAction at($offset)
 */
class OrderEditSetItemShippingAddressCustomFieldActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetItemShippingAddressCustomFieldAction $value
     * @psalm-param OrderEditSetItemShippingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetItemShippingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetItemShippingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetItemShippingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetItemShippingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetItemShippingAddressCustomFieldAction $data */
                $data = OrderEditSetItemShippingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
