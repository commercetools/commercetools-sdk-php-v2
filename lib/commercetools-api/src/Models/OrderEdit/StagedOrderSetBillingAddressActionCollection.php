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
 * @extends MapperSequence<StagedOrderSetBillingAddressAction>
 * @method StagedOrderSetBillingAddressAction current()
 * @method StagedOrderSetBillingAddressAction at($offset)
 */
class StagedOrderSetBillingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetBillingAddressAction $value
     * @psalm-param StagedOrderSetBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetBillingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
