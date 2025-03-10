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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetBusinessUnitAction>
 * @method StagedOrderSetBusinessUnitAction current()
 * @method StagedOrderSetBusinessUnitAction end()
 * @method StagedOrderSetBusinessUnitAction at($offset)
 */
class StagedOrderSetBusinessUnitActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetBusinessUnitAction $value
     * @psalm-param StagedOrderSetBusinessUnitAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetBusinessUnitActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetBusinessUnitAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetBusinessUnitAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetBusinessUnitAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetBusinessUnitAction $data */
                $data = StagedOrderSetBusinessUnitActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
