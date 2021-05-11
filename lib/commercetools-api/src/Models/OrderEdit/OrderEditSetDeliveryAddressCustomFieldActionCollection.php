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
 * @extends OrderEditUpdateActionCollection<OrderEditSetDeliveryAddressCustomFieldAction>
 * @method OrderEditSetDeliveryAddressCustomFieldAction current()
 * @method OrderEditSetDeliveryAddressCustomFieldAction at($offset)
 */
class OrderEditSetDeliveryAddressCustomFieldActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetDeliveryAddressCustomFieldAction $value
     * @psalm-param OrderEditSetDeliveryAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetDeliveryAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetDeliveryAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetDeliveryAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetDeliveryAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetDeliveryAddressCustomFieldAction $data */
                $data = OrderEditSetDeliveryAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
