<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Me\MyBusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitChangeNameAction>
 * @method MyBusinessUnitChangeNameAction current()
 * @method MyBusinessUnitChangeNameAction end()
 * @method MyBusinessUnitChangeNameAction at($offset)
 */
class MyBusinessUnitChangeNameActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitChangeNameAction $value
     * @psalm-param MyBusinessUnitChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitChangeNameAction $data */
                $data = MyBusinessUnitChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
