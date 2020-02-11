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
 * @extends MapperSequence<StagedOrderChangeTaxCalculationModeAction>
 * @method StagedOrderChangeTaxCalculationModeAction current()
 * @method StagedOrderChangeTaxCalculationModeAction at($offset)
 */
class StagedOrderChangeTaxCalculationModeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderChangeTaxCalculationModeAction $value
     * @psalm-param StagedOrderChangeTaxCalculationModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderChangeTaxCalculationModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderChangeTaxCalculationModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderChangeTaxCalculationModeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderChangeTaxCalculationModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderChangeTaxCalculationModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
