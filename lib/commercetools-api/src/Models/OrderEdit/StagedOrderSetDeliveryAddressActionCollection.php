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
 * @extends MapperSequence<StagedOrderSetDeliveryAddressAction>
 * @method StagedOrderSetDeliveryAddressAction current()
 * @method StagedOrderSetDeliveryAddressAction at($offset)
 */
class StagedOrderSetDeliveryAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetDeliveryAddressAction $value
     * @psalm-param StagedOrderSetDeliveryAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDeliveryAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDeliveryAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDeliveryAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetDeliveryAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetDeliveryAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
