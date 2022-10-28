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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitChangeAddressAction>
 * @method MyBusinessUnitChangeAddressAction current()
 * @method MyBusinessUnitChangeAddressAction end()
 * @method MyBusinessUnitChangeAddressAction at($offset)
 */
class MyBusinessUnitChangeAddressActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitChangeAddressAction $value
     * @psalm-param MyBusinessUnitChangeAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitChangeAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitChangeAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitChangeAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitChangeAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitChangeAddressAction $data */
                $data = MyBusinessUnitChangeAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
