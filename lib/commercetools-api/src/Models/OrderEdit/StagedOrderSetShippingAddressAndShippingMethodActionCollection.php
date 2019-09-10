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
 * @extends MapperSequence<StagedOrderSetShippingAddressAndShippingMethodAction>
 *
 * @method StagedOrderSetShippingAddressAndShippingMethodAction current()
 * @method StagedOrderSetShippingAddressAndShippingMethodAction at($offset)
 */
class StagedOrderSetShippingAddressAndShippingMethodActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetShippingAddressAndShippingMethodAction $value
     * @psalm-param StagedOrderSetShippingAddressAndShippingMethodAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingAddressAndShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingAddressAndShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingAddressAndShippingMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetShippingAddressAndShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetShippingAddressAndShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
