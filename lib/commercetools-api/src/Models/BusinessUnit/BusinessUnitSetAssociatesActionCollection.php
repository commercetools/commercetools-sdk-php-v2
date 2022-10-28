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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetAssociatesAction>
 * @method BusinessUnitSetAssociatesAction current()
 * @method BusinessUnitSetAssociatesAction end()
 * @method BusinessUnitSetAssociatesAction at($offset)
 */
class BusinessUnitSetAssociatesActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetAssociatesAction $value
     * @psalm-param BusinessUnitSetAssociatesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetAssociatesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetAssociatesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetAssociatesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetAssociatesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetAssociatesAction $data */
                $data = BusinessUnitSetAssociatesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
