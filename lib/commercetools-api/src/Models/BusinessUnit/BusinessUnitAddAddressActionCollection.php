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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitAddAddressAction>
 * @method BusinessUnitAddAddressAction current()
 * @method BusinessUnitAddAddressAction end()
 * @method BusinessUnitAddAddressAction at($offset)
 */
class BusinessUnitAddAddressActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitAddAddressAction $value
     * @psalm-param BusinessUnitAddAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddAddressAction $data */
                $data = BusinessUnitAddAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
