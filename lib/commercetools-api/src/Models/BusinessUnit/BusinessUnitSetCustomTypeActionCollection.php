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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetCustomTypeAction>
 * @method BusinessUnitSetCustomTypeAction current()
 * @method BusinessUnitSetCustomTypeAction end()
 * @method BusinessUnitSetCustomTypeAction at($offset)
 */
class BusinessUnitSetCustomTypeActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetCustomTypeAction $value
     * @psalm-param BusinessUnitSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetCustomTypeAction $data */
                $data = BusinessUnitSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
