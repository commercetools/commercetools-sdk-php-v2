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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitRemoveStoreAction>
 * @method BusinessUnitRemoveStoreAction current()
 * @method BusinessUnitRemoveStoreAction end()
 * @method BusinessUnitRemoveStoreAction at($offset)
 */
class BusinessUnitRemoveStoreActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitRemoveStoreAction $value
     * @psalm-param BusinessUnitRemoveStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitRemoveStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitRemoveStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitRemoveStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitRemoveStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitRemoveStoreAction $data */
                $data = BusinessUnitRemoveStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
