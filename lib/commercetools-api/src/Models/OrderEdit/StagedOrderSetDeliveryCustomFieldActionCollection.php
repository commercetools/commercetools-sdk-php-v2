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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetDeliveryCustomFieldAction>
 * @method StagedOrderSetDeliveryCustomFieldAction current()
 * @method StagedOrderSetDeliveryCustomFieldAction end()
 * @method StagedOrderSetDeliveryCustomFieldAction at($offset)
 */
class StagedOrderSetDeliveryCustomFieldActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetDeliveryCustomFieldAction $value
     * @psalm-param StagedOrderSetDeliveryCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDeliveryCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDeliveryCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDeliveryCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetDeliveryCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetDeliveryCustomFieldAction $data */
                $data = StagedOrderSetDeliveryCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
