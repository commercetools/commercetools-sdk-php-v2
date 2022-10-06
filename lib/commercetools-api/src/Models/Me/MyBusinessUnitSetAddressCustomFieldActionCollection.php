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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitSetAddressCustomFieldAction>
 * @method MyBusinessUnitSetAddressCustomFieldAction current()
 * @method MyBusinessUnitSetAddressCustomFieldAction end()
 * @method MyBusinessUnitSetAddressCustomFieldAction at($offset)
 */
class MyBusinessUnitSetAddressCustomFieldActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitSetAddressCustomFieldAction $value
     * @psalm-param MyBusinessUnitSetAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitSetAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitSetAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitSetAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitSetAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitSetAddressCustomFieldAction $data */
                $data = MyBusinessUnitSetAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
