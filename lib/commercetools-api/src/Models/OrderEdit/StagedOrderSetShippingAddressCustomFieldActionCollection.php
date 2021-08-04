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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetShippingAddressCustomFieldAction>
 * @method StagedOrderSetShippingAddressCustomFieldAction current()
 * @method StagedOrderSetShippingAddressCustomFieldAction end()
 * @method StagedOrderSetShippingAddressCustomFieldAction at($offset)
 */
class StagedOrderSetShippingAddressCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetShippingAddressCustomFieldAction $value
     * @psalm-param StagedOrderSetShippingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetShippingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetShippingAddressCustomFieldAction $data */
                $data = StagedOrderSetShippingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
