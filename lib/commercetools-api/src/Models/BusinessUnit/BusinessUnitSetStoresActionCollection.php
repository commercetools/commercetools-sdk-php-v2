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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetStoresAction>
 * @method BusinessUnitSetStoresAction current()
 * @method BusinessUnitSetStoresAction end()
 * @method BusinessUnitSetStoresAction at($offset)
 */
class BusinessUnitSetStoresActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetStoresAction $value
     * @psalm-param BusinessUnitSetStoresAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetStoresActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetStoresAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetStoresAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetStoresAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetStoresAction $data */
                $data = BusinessUnitSetStoresActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
