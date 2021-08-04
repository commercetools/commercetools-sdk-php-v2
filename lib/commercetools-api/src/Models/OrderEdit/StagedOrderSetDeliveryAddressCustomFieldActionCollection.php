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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetDeliveryAddressCustomFieldAction>
 * @method StagedOrderSetDeliveryAddressCustomFieldAction current()
 * @method StagedOrderSetDeliveryAddressCustomFieldAction end()
 * @method StagedOrderSetDeliveryAddressCustomFieldAction at($offset)
 */
class StagedOrderSetDeliveryAddressCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetDeliveryAddressCustomFieldAction $value
     * @psalm-param StagedOrderSetDeliveryAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDeliveryAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDeliveryAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDeliveryAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetDeliveryAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetDeliveryAddressCustomFieldAction $data */
                $data = StagedOrderSetDeliveryAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
