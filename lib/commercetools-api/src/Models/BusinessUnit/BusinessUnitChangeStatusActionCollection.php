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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitChangeStatusAction>
 * @method BusinessUnitChangeStatusAction current()
 * @method BusinessUnitChangeStatusAction end()
 * @method BusinessUnitChangeStatusAction at($offset)
 */
class BusinessUnitChangeStatusActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitChangeStatusAction $value
     * @psalm-param BusinessUnitChangeStatusAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitChangeStatusActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitChangeStatusAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitChangeStatusAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitChangeStatusAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitChangeStatusAction $data */
                $data = BusinessUnitChangeStatusActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
