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
 * @extends StagedOrderUpdateActionCollection<StagedOrderRemoveParcelFromDeliveryAction>
 * @method StagedOrderRemoveParcelFromDeliveryAction current()
 * @method StagedOrderRemoveParcelFromDeliveryAction at($offset)
 */
class StagedOrderRemoveParcelFromDeliveryActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderRemoveParcelFromDeliveryAction $value
     * @psalm-param StagedOrderRemoveParcelFromDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderRemoveParcelFromDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderRemoveParcelFromDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderRemoveParcelFromDeliveryAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderRemoveParcelFromDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderRemoveParcelFromDeliveryAction $data */
                $data = StagedOrderRemoveParcelFromDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
