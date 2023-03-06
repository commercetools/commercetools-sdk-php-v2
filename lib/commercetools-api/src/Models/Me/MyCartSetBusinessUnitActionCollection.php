<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartSetBusinessUnitAction>
 * @method MyCartSetBusinessUnitAction current()
 * @method MyCartSetBusinessUnitAction end()
 * @method MyCartSetBusinessUnitAction at($offset)
 */
class MyCartSetBusinessUnitActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetBusinessUnitAction $value
     * @psalm-param MyCartSetBusinessUnitAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetBusinessUnitActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetBusinessUnitAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetBusinessUnitAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetBusinessUnitAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetBusinessUnitAction $data */
                $data = MyCartSetBusinessUnitActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
