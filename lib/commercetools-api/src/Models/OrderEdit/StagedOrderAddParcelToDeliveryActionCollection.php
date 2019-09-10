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
 * @extends MapperSequence<StagedOrderAddParcelToDeliveryAction>
 *
 * @method StagedOrderAddParcelToDeliveryAction current()
 * @method StagedOrderAddParcelToDeliveryAction at($offset)
 */
class StagedOrderAddParcelToDeliveryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderAddParcelToDeliveryAction $value
     * @psalm-param StagedOrderAddParcelToDeliveryAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddParcelToDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddParcelToDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddParcelToDeliveryAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderAddParcelToDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderAddParcelToDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
