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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitRemoveAddressAction>
 * @method BusinessUnitRemoveAddressAction current()
 * @method BusinessUnitRemoveAddressAction end()
 * @method BusinessUnitRemoveAddressAction at($offset)
 */
class BusinessUnitRemoveAddressActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitRemoveAddressAction $value
     * @psalm-param BusinessUnitRemoveAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitRemoveAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitRemoveAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitRemoveAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitRemoveAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitRemoveAddressAction $data */
                $data = BusinessUnitRemoveAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
