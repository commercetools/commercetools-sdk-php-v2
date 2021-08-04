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
 * @extends StagedOrderUpdateActionCollection<StagedOrderRemoveDeliveryAction>
 * @method StagedOrderRemoveDeliveryAction current()
 * @method StagedOrderRemoveDeliveryAction end()
 * @method StagedOrderRemoveDeliveryAction at($offset)
 */
class StagedOrderRemoveDeliveryActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderRemoveDeliveryAction $value
     * @psalm-param StagedOrderRemoveDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderRemoveDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemoveDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemoveDeliveryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderRemoveDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderRemoveDeliveryAction $data */
                $data = StagedOrderRemoveDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
