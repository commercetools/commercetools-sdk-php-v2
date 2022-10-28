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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitSetAddressCustomTypeAction>
 * @method MyBusinessUnitSetAddressCustomTypeAction current()
 * @method MyBusinessUnitSetAddressCustomTypeAction end()
 * @method MyBusinessUnitSetAddressCustomTypeAction at($offset)
 */
class MyBusinessUnitSetAddressCustomTypeActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitSetAddressCustomTypeAction $value
     * @psalm-param MyBusinessUnitSetAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitSetAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitSetAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitSetAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitSetAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitSetAddressCustomTypeAction $data */
                $data = MyBusinessUnitSetAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
