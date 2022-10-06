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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitChangeParentUnitAction>
 * @method BusinessUnitChangeParentUnitAction current()
 * @method BusinessUnitChangeParentUnitAction end()
 * @method BusinessUnitChangeParentUnitAction at($offset)
 */
class BusinessUnitChangeParentUnitActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitChangeParentUnitAction $value
     * @psalm-param BusinessUnitChangeParentUnitAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitChangeParentUnitActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitChangeParentUnitAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitChangeParentUnitAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitChangeParentUnitAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitChangeParentUnitAction $data */
                $data = BusinessUnitChangeParentUnitActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
