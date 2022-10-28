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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetAddressCustomTypeAction>
 * @method BusinessUnitSetAddressCustomTypeAction current()
 * @method BusinessUnitSetAddressCustomTypeAction end()
 * @method BusinessUnitSetAddressCustomTypeAction at($offset)
 */
class BusinessUnitSetAddressCustomTypeActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetAddressCustomTypeAction $value
     * @psalm-param BusinessUnitSetAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetAddressCustomTypeAction $data */
                $data = BusinessUnitSetAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
