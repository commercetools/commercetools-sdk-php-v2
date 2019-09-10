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
 * @extends MapperSequence<StagedOrderSetShippingAddressAndCustomShippingMethodAction>
 *
 * @method StagedOrderSetShippingAddressAndCustomShippingMethodAction current()
 * @method StagedOrderSetShippingAddressAndCustomShippingMethodAction at($offset)
 */
class StagedOrderSetShippingAddressAndCustomShippingMethodActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetShippingAddressAndCustomShippingMethodAction $value
     * @psalm-param StagedOrderSetShippingAddressAndCustomShippingMethodAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingAddressAndCustomShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingAddressAndCustomShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingAddressAndCustomShippingMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetShippingAddressAndCustomShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetShippingAddressAndCustomShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
