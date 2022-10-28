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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetStoreModeAction>
 * @method BusinessUnitSetStoreModeAction current()
 * @method BusinessUnitSetStoreModeAction end()
 * @method BusinessUnitSetStoreModeAction at($offset)
 */
class BusinessUnitSetStoreModeActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetStoreModeAction $value
     * @psalm-param BusinessUnitSetStoreModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetStoreModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetStoreModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetStoreModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetStoreModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetStoreModeAction $data */
                $data = BusinessUnitSetStoreModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
