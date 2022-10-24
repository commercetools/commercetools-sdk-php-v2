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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitChangeParentUnitAction>
 * @method MyBusinessUnitChangeParentUnitAction current()
 * @method MyBusinessUnitChangeParentUnitAction end()
 * @method MyBusinessUnitChangeParentUnitAction at($offset)
 */
class MyBusinessUnitChangeParentUnitActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitChangeParentUnitAction $value
     * @psalm-param MyBusinessUnitChangeParentUnitAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitChangeParentUnitActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitChangeParentUnitAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitChangeParentUnitAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitChangeParentUnitAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitChangeParentUnitAction $data */
                $data = MyBusinessUnitChangeParentUnitActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
