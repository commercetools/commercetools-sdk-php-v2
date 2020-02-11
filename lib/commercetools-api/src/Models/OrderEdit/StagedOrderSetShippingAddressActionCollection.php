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
 * @extends MapperSequence<StagedOrderSetShippingAddressAction>
 * @method StagedOrderSetShippingAddressAction current()
 * @method StagedOrderSetShippingAddressAction at($offset)
 */
class StagedOrderSetShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetShippingAddressAction $value
     * @psalm-param StagedOrderSetShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
