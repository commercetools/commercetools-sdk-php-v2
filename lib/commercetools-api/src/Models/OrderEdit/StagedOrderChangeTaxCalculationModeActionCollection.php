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
 * @extends StagedOrderUpdateActionCollection<StagedOrderChangeTaxCalculationModeAction>
 * @method StagedOrderChangeTaxCalculationModeAction current()
 * @method StagedOrderChangeTaxCalculationModeAction at($offset)
 */
class StagedOrderChangeTaxCalculationModeActionCollection extends StagedOrderUpdateActionCollection
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
        return function (?int $index): ?StagedOrderChangeTaxCalculationModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderChangeTaxCalculationModeAction $data */
                $data = StagedOrderChangeTaxCalculationModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
