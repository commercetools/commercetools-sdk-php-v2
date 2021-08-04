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
 * @extends StagedOrderUpdateActionCollection<StagedOrderAddDeliveryAction>
 * @method StagedOrderAddDeliveryAction current()
 * @method StagedOrderAddDeliveryAction end()
 * @method StagedOrderAddDeliveryAction at($offset)
 */
class StagedOrderAddDeliveryActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderAddDeliveryAction $value
     * @psalm-param StagedOrderAddDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddDeliveryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderAddDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderAddDeliveryAction $data */
                $data = StagedOrderAddDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
