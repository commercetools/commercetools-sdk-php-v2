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
 * @extends MapperSequence<StagedOrderSetReturnShipmentStateAction>
 *
 * @method StagedOrderSetReturnShipmentStateAction current()
 * @method StagedOrderSetReturnShipmentStateAction at($offset)
 */
class StagedOrderSetReturnShipmentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetReturnShipmentStateAction $value
     * @psalm-param StagedOrderSetReturnShipmentStateAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?StagedOrderSetReturnShipmentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetReturnShipmentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
