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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetParcelMeasurementsAction>
 * @method StagedOrderSetParcelMeasurementsAction current()
 * @method StagedOrderSetParcelMeasurementsAction at($offset)
 */
class StagedOrderSetParcelMeasurementsActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetParcelMeasurementsAction $value
     * @psalm-param StagedOrderSetParcelMeasurementsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetParcelMeasurementsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetParcelMeasurementsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetParcelMeasurementsAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetParcelMeasurementsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetParcelMeasurementsAction $data */
                $data = StagedOrderSetParcelMeasurementsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
