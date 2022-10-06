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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitRemoveAddressAction>
 * @method MyBusinessUnitRemoveAddressAction current()
 * @method MyBusinessUnitRemoveAddressAction end()
 * @method MyBusinessUnitRemoveAddressAction at($offset)
 */
class MyBusinessUnitRemoveAddressActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitRemoveAddressAction $value
     * @psalm-param MyBusinessUnitRemoveAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitRemoveAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitRemoveAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitRemoveAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitRemoveAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitRemoveAddressAction $data */
                $data = MyBusinessUnitRemoveAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
