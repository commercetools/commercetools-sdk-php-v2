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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetContactEmailAction>
 * @method BusinessUnitSetContactEmailAction current()
 * @method BusinessUnitSetContactEmailAction end()
 * @method BusinessUnitSetContactEmailAction at($offset)
 */
class BusinessUnitSetContactEmailActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetContactEmailAction $value
     * @psalm-param BusinessUnitSetContactEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetContactEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetContactEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetContactEmailAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetContactEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetContactEmailAction $data */
                $data = BusinessUnitSetContactEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
