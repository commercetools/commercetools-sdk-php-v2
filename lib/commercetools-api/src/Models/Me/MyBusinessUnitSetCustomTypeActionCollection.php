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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitSetCustomTypeAction>
 * @method MyBusinessUnitSetCustomTypeAction current()
 * @method MyBusinessUnitSetCustomTypeAction end()
 * @method MyBusinessUnitSetCustomTypeAction at($offset)
 */
class MyBusinessUnitSetCustomTypeActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitSetCustomTypeAction $value
     * @psalm-param MyBusinessUnitSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitSetCustomTypeAction $data */
                $data = MyBusinessUnitSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
