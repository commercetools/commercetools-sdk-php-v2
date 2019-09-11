<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyCartChangeTaxModeAction>
 *
 * @method MyCartChangeTaxModeAction current()
 * @method MyCartChangeTaxModeAction at($offset)
 */
class MyCartChangeTaxModeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartChangeTaxModeAction $value
     * @psalm-param MyCartChangeTaxModeAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?MyCartChangeTaxModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartChangeTaxModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
