<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetItemShippingAddressCustomFieldAction>
 * @method StagedOrderSetItemShippingAddressCustomFieldAction current()
 * @method StagedOrderSetItemShippingAddressCustomFieldAction at($offset)
 */
class StagedOrderSetItemShippingAddressCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetItemShippingAddressCustomFieldAction $value
     * @psalm-param StagedOrderSetItemShippingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetItemShippingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetItemShippingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetItemShippingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetItemShippingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetItemShippingAddressCustomFieldAction $data */
                $data = StagedOrderSetItemShippingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
