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
 * @extends OrderEditUpdateActionCollection<OrderEditSetBillingAddressCustomFieldAction>
 * @method OrderEditSetBillingAddressCustomFieldAction current()
 * @method OrderEditSetBillingAddressCustomFieldAction at($offset)
 */
class OrderEditSetBillingAddressCustomFieldActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetBillingAddressCustomFieldAction $value
     * @psalm-param OrderEditSetBillingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetBillingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetBillingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetBillingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetBillingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetBillingAddressCustomFieldAction $data */
                $data = OrderEditSetBillingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
