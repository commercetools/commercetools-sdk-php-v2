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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitChangeNameAction>
 * @method BusinessUnitChangeNameAction current()
 * @method BusinessUnitChangeNameAction end()
 * @method BusinessUnitChangeNameAction at($offset)
 */
class BusinessUnitChangeNameActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitChangeNameAction $value
     * @psalm-param BusinessUnitChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitChangeNameAction $data */
                $data = BusinessUnitChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
