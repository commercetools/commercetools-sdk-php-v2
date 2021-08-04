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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetDeliveryAddressAction>
 * @method StagedOrderSetDeliveryAddressAction current()
 * @method StagedOrderSetDeliveryAddressAction at($offset)
 */
class StagedOrderSetDeliveryAddressActionCollection extends StagedOrderUpdateActionCollection
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
        return function (?int $index): ?StagedOrderSetDeliveryAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetDeliveryAddressAction $data */
                $data = StagedOrderSetDeliveryAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
