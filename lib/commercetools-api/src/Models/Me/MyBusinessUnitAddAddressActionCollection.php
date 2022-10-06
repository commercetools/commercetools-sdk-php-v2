<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyBusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitAddAddressAction>
 * @method MyBusinessUnitAddAddressAction current()
 * @method MyBusinessUnitAddAddressAction end()
 * @method MyBusinessUnitAddAddressAction at($offset)
 */
class MyBusinessUnitAddAddressActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitAddAddressAction $value
     * @psalm-param MyBusinessUnitAddAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitAddAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitAddAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitAddAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitAddAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitAddAddressAction $data */
                $data = MyBusinessUnitAddAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
