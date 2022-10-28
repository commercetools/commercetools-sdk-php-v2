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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitSetContactEmailAction>
 * @method MyBusinessUnitSetContactEmailAction current()
 * @method MyBusinessUnitSetContactEmailAction end()
 * @method MyBusinessUnitSetContactEmailAction at($offset)
 */
class MyBusinessUnitSetContactEmailActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitSetContactEmailAction $value
     * @psalm-param MyBusinessUnitSetContactEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitSetContactEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitSetContactEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitSetContactEmailAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitSetContactEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitSetContactEmailAction $data */
                $data = MyBusinessUnitSetContactEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
