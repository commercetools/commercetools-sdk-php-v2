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
 * @extends MapperSequence<OrderEditSetBillingAddressCustomFieldAction>
 * @method OrderEditSetBillingAddressCustomFieldAction current()
 * @method OrderEditSetBillingAddressCustomFieldAction at($offset)
 */
class OrderEditSetBillingAddressCustomFieldActionCollection extends MapperSequence
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
                $data = OrderEditSetBillingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
