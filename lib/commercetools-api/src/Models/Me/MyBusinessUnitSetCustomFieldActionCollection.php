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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitSetCustomFieldAction>
 * @method MyBusinessUnitSetCustomFieldAction current()
 * @method MyBusinessUnitSetCustomFieldAction end()
 * @method MyBusinessUnitSetCustomFieldAction at($offset)
 */
class MyBusinessUnitSetCustomFieldActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitSetCustomFieldAction $value
     * @psalm-param MyBusinessUnitSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitSetCustomFieldAction $data */
                $data = MyBusinessUnitSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
