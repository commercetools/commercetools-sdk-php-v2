<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetUnitTypeAction>
 * @method BusinessUnitSetUnitTypeAction current()
 * @method BusinessUnitSetUnitTypeAction end()
 * @method BusinessUnitSetUnitTypeAction at($offset)
 */
class BusinessUnitSetUnitTypeActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetUnitTypeAction $value
     * @psalm-param BusinessUnitSetUnitTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetUnitTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetUnitTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetUnitTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetUnitTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetUnitTypeAction $data */
                $data = BusinessUnitSetUnitTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
