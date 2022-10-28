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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitChangeAddressAction>
 * @method BusinessUnitChangeAddressAction current()
 * @method BusinessUnitChangeAddressAction end()
 * @method BusinessUnitChangeAddressAction at($offset)
 */
class BusinessUnitChangeAddressActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitChangeAddressAction $value
     * @psalm-param BusinessUnitChangeAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitChangeAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitChangeAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitChangeAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitChangeAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitChangeAddressAction $data */
                $data = BusinessUnitChangeAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
