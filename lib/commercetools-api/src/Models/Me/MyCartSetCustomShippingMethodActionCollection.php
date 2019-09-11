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
 * @extends MapperSequence<MyCartSetCustomShippingMethodAction>
 *
 * @method MyCartSetCustomShippingMethodAction current()
 * @method MyCartSetCustomShippingMethodAction at($offset)
 */
class MyCartSetCustomShippingMethodActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetCustomShippingMethodAction $value
     * @psalm-param MyCartSetCustomShippingMethodAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCartSetCustomShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetCustomShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetCustomShippingMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetCustomShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetCustomShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
