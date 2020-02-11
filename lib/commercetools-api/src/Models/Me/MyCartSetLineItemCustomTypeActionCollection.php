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
 * @extends MapperSequence<MyCartSetLineItemCustomTypeAction>
 * @method MyCartSetLineItemCustomTypeAction current()
 * @method MyCartSetLineItemCustomTypeAction at($offset)
 */
class MyCartSetLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetLineItemCustomTypeAction $value
     * @psalm-param MyCartSetLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
