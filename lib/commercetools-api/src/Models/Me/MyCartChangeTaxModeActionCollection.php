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
 * @extends MyCartUpdateActionCollection<MyCartChangeTaxModeAction>
 * @method MyCartChangeTaxModeAction current()
 * @method MyCartChangeTaxModeAction end()
 * @method MyCartChangeTaxModeAction at($offset)
 */
class MyCartChangeTaxModeActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartChangeTaxModeAction $value
     * @psalm-param MyCartChangeTaxModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartChangeTaxModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartChangeTaxModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartChangeTaxModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartChangeTaxModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartChangeTaxModeAction $data */
                $data = MyCartChangeTaxModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
