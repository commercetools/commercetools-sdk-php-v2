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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetReturnShipmentStateAction>
 * @method StagedOrderSetReturnShipmentStateAction current()
 * @method StagedOrderSetReturnShipmentStateAction end()
 * @method StagedOrderSetReturnShipmentStateAction at($offset)
 */
class StagedOrderSetReturnShipmentStateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetReturnShipmentStateAction $value
     * @psalm-param StagedOrderSetReturnShipmentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetReturnShipmentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetReturnShipmentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetReturnShipmentStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetReturnShipmentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetReturnShipmentStateAction $data */
                $data = StagedOrderSetReturnShipmentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
