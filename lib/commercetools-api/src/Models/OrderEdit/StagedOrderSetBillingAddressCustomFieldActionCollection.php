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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetBillingAddressCustomFieldAction>
 * @method StagedOrderSetBillingAddressCustomFieldAction current()
 * @method StagedOrderSetBillingAddressCustomFieldAction at($offset)
 */
class StagedOrderSetBillingAddressCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetBillingAddressCustomFieldAction $value
     * @psalm-param StagedOrderSetBillingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetBillingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetBillingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetBillingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetBillingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetBillingAddressCustomFieldAction $data */
                $data = StagedOrderSetBillingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
