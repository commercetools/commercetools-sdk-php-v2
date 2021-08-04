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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetDeliveryItemsAction>
 * @method StagedOrderSetDeliveryItemsAction current()
 * @method StagedOrderSetDeliveryItemsAction end()
 * @method StagedOrderSetDeliveryItemsAction at($offset)
 */
class StagedOrderSetDeliveryItemsActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetDeliveryItemsAction $value
     * @psalm-param StagedOrderSetDeliveryItemsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetDeliveryItemsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetDeliveryItemsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetDeliveryItemsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetDeliveryItemsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetDeliveryItemsAction $data */
                $data = StagedOrderSetDeliveryItemsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
