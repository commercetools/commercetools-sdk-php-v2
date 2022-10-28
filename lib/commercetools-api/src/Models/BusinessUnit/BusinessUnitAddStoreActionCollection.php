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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitAddStoreAction>
 * @method BusinessUnitAddStoreAction current()
 * @method BusinessUnitAddStoreAction end()
 * @method BusinessUnitAddStoreAction at($offset)
 */
class BusinessUnitAddStoreActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitAddStoreAction $value
     * @psalm-param BusinessUnitAddStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddStoreAction $data */
                $data = BusinessUnitAddStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
