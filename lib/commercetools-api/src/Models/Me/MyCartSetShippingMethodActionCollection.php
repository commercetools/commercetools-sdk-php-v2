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
 * @extends MapperSequence<MyCartSetShippingMethodAction>
 *
 * @method MyCartSetShippingMethodAction current()
 * @method MyCartSetShippingMethodAction at($offset)
 */
class MyCartSetShippingMethodActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetShippingMethodAction $value
     * @psalm-param MyCartSetShippingMethodAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCartSetShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetShippingMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
