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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetAddressCustomFieldAction>
 * @method BusinessUnitSetAddressCustomFieldAction current()
 * @method BusinessUnitSetAddressCustomFieldAction end()
 * @method BusinessUnitSetAddressCustomFieldAction at($offset)
 */
class BusinessUnitSetAddressCustomFieldActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetAddressCustomFieldAction $value
     * @psalm-param BusinessUnitSetAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetAddressCustomFieldAction $data */
                $data = BusinessUnitSetAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
