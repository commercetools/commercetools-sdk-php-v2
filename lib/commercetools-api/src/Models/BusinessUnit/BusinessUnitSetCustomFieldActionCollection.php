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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetCustomFieldAction>
 * @method BusinessUnitSetCustomFieldAction current()
 * @method BusinessUnitSetCustomFieldAction end()
 * @method BusinessUnitSetCustomFieldAction at($offset)
 */
class BusinessUnitSetCustomFieldActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetCustomFieldAction $value
     * @psalm-param BusinessUnitSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetCustomFieldAction $data */
                $data = BusinessUnitSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
