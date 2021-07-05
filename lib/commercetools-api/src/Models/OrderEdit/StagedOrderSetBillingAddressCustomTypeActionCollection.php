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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetBillingAddressCustomTypeAction>
 * @method StagedOrderSetBillingAddressCustomTypeAction current()
 * @method StagedOrderSetBillingAddressCustomTypeAction at($offset)
 */
class StagedOrderSetBillingAddressCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetBillingAddressCustomTypeAction $value
     * @psalm-param StagedOrderSetBillingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetBillingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetBillingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetBillingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetBillingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetBillingAddressCustomTypeAction $data */
                $data = StagedOrderSetBillingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
