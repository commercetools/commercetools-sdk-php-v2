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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetDeliveryAddressCustomTypeAction>
 * @method StagedOrderSetDeliveryAddressCustomTypeAction current()
 * @method StagedOrderSetDeliveryAddressCustomTypeAction end()
 * @method StagedOrderSetDeliveryAddressCustomTypeAction at($offset)
 */
class StagedOrderSetDeliveryAddressCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetDeliveryAddressCustomTypeAction $value
     * @psalm-param StagedOrderSetDeliveryAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDeliveryAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDeliveryAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDeliveryAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetDeliveryAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetDeliveryAddressCustomTypeAction $data */
                $data = StagedOrderSetDeliveryAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
